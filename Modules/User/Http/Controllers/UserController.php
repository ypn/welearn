<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Cartalyst\Sentinel\Users\EloquentUser as Users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Sentinel;
use Validator;


class UserController extends BaseController
{


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Request $request)
    {
      $input = $request->all();
      $rule = [
        'firstname'=>'required|max:255|min:1',
        'lastname'=>'required|max:255|min:1',
        'email'=>'required|max:255|email',
        'password'=>'required|max:255',
        'confirm_password'=>'required|max:255|same:password'
      ];

      $validator = Validator::make($input,$rule);

      if($validator->fails()){
        echo $validator->messages();
      }else{
        try{
          Sentinel::registerAndActivate([
            'email'=>$input['email'],
            'first_name'=>$input['firstname'],
            'last_name'=>$input['lastname'],
            'password'=>$input['password']
          ]);

        }
        catch (\Illuminate\Database\QueryException $e)

          {
              switch ($e->getCode()) {
                case 23000:
                  echo 'Email Existed';
                  echo $e->getMessage();
                  break;

                default:
                  echo $e->getCode();
                  echo '<br>';
                  echo $e->getMessage();
                  echo 'Not determine error';
                  break;
              }


          }
      }

    }

    public function login(Request $request){
      $input = $request->all();
      $rule = [
        'email'=>'email|required|max:255',
        'password'=>'required|max:255'
      ];

      $validator = validator::make($input,$rule);


      if($validator->fails()){
        echo $validator->messages();
      }
      else{
        $auth = Sentinel::authenticateAndRemember([
          'email'=>$input['email'],
          'password'=>$input['password']
        ]);

        if($auth){
          return redirect('/');
        }
      }

    }

    public function logout(){
      Sentinel::logout(null,true);
      return redirect('/');
    }

    //Facebook callback login
    public function fbCallback(){
       if (!session_id()) {
           session_start();
       }
       $fb = new \Facebook\Facebook([
         'app_id' => '1288241967885581',
         'app_secret' => 'b2d98c55d198bc3ddc68f3ef2113ad75',
         'default_graph_version' => 'v2.8',
         //'default_access_token' => '{access-token}', // optional
       ]);

       $helper = $fb->getRedirectLoginHelper();

       try {
         $accessToken = $helper->getAccessToken();
       } catch(Facebook\Exceptions\FacebookResponseException $e) {
         // When Graph returns an error
         echo 'Graph returned an error: ' . $e->getMessage();
         exit;
       } catch(Facebook\Exceptions\FacebookSDKException $e) {
         // When validation fails or other local issues
         echo 'Facebook SDK returned an error: ' . $e->getMessage();
         exit;
       }

       if (! isset($accessToken)) {
         if ($helper->getError()) {
           header('HTTP/1.0 401 Unauthorized');
           echo "Error: " . $helper->getError() . "\n";
           echo "Error Code: " . $helper->getErrorCode() . "\n";
           echo "Error Reason: " . $helper->getErrorReason() . "\n";
           echo "Error Description: " . $helper->getErrorDescription() . "\n";
         } else {
           header('HTTP/1.0 400 Bad Request');
           echo 'Bad request';
         }
         exit;
       }

       $oAuth2Client = $fb->getOAuth2Client();

       $tokenMetadata = $oAuth2Client->debugToken($accessToken);

       $tokenMetadata->validateAppId('1288241967885581');

       $tokenMetadata->validateExpiration();

       if (! $accessToken->isLongLived()) {
       // Exchanges a short-lived access token for a long-lived one
         try {
           $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
         } catch (Facebook\Exceptions\FacebookSDKException $e) {
           echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
           exit;
         }
       }

       try {
       // Returns a `Facebook\FacebookResponse` object
         $response = $fb->get('/me?fields=id,first_name,last_name,email,locale,education,cover,birthday,picture', $accessToken);
       } catch(Facebook\Exceptions\FacebookResponseException $e) {
         echo 'Graph returned an error: ' . $e->getMessage();
         exit;
       } catch(Facebook\Exceptions\FacebookSDKException $e) {
         echo 'Facebook SDK returned an error: ' . $e->getMessage();
         exit;
       }

       $fbuser = $response->getGraphUser()->asArray();

       $user = Users::where('email',$fbuser['email'])->first();

       if(empty($user)){
         try{
           $user = Sentinel::registerAndActivate([
            'email'=>$fbuser['email'],
            'password'=>'welearn'.$fbuser['id'],
            'first_name'=>$fbuser['first_name'],
            'last_name'=>$fbuser['last_name'],
            'picture'=>$fbuser['picture']['url'],
            'type_society'=>1,
            'cover'=>$fbuser['cover']['source']
           ]);
         }
         catch (\Illuminate\Database\QueryException $e){
           echo $e->getMessage();
         }
       }

       $auth = Sentinel::authenticateAndRemember([
         'email'=>$user->email,
         'password'=>'welearn'.$fbuser['id']
       ]);
       if($auth){
         return redirect('/');
       }

   }

    /*
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}

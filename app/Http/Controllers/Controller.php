<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Sentinel;
use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setLocale(Request $request){
      $locale = $request->locale;
      App::setLocale($locale);
      return response('set_cookie')->cookie('lang',$locale,30,null,null,null,false);
    }

    public function index(){

      if(!Sentinel::check()){
        if (!session_id()) {
            session_start();
        }
        // $fb = new \Facebook\Facebook([
        //   'app_id' => '1288241967885581',
        //   'app_secret' => 'b2d98c55d198bc3ddc68f3ef2113ad75',
        //   'default_graph_version' => 'v2.8',
        // ]);

        $fb = new \Facebook\Facebook([
          'app_id' => config('services.facebook.app_id'),
          'app_secret' => config('services.facebook.app_id'),
          'default_graph_version' => 'v2.8',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        $permissions = ['email']; // Optional permissions
        $loginUrl = $helper->getLoginUrl(url('/') . '/user/fb-login', $permissions);

        return view('welcome',array('fb_url'=>$loginUrl));
      }else{
          $user = Sentinel::getUser();
          return view ('user::index',array('user'=>[
              'name'=>$user->first_name . ' ' . $user->last_name,
              'picture'=>$user->picture
          ]));
      }

    }

}

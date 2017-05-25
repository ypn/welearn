<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Database\QueryException;
use Cartalyst\Sentinel\Users\EloquentUser as Users;

use Modules\User\Entities\Teachers;
use Validator,DB,Sentinel;
use Carbon\Carbon;

class TrainerController extends Controller
{
    /**
     * register to become a teacher
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new teacher.
     * @return Response
     */
    public function create()
    {
        return view('user::layouts.form_register_trainer');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

      $response = array('code'=>null,'message'=>null);
      $inputs = $request->all();


      //Validate dữ liệu đầu vào
      $rules = [
        'opinion'=>'required',
        'first_name'=>'required|max:255',
        'last_name'=>'required|max:255',
        'email'=>'required|email|max:255',
        'phone'=>'required|max:20',
        'sex'=>'between:1,2',
        'birthday'=>'required|date',
        'company'=>'required|max:255',
        'location'=>'required|max:500',
        'short_desc'=>'max:500',
        'field'=>'required|max:255',
        'detail_information'=>'required'
      ];

      $validator = Validator::make($inputs,$rules);

      if($validator->fails()){
        $response = array('code'=>100,'message'=>$validator->messages());

      }else{
        if(!isset($input['opinion']) && $inputs['opinion']){
          try{
            $user = Sentinel::getUser();
            if(!empty($user)){
              //Cập nhật bảng users
              $user->phone = $this->cleanInput($inputs['phone']);
              $user->birthday = Carbon::createFromFormat('d/m/Y', $this->cleanInput($inputs['birthday']));
              $user->location = $this->cleanInput($inputs['location']);
              $user->sex = $this->cleanInput($inputs['sex']);

              //Lưu vào bảng teachers
              $teacher = new Teachers();
              $teacher->uid = $user->id;
              $teacher->company = $this->cleanInput($inputs['company']);
              $teacher->expertise = $this->cleanInput($inputs['field']);
              $teacher->short_desc = $this->cleanInput($inputs['short_desc']);

              //Trường này cần làm sạch dữ liệu đầu vào, loại bỏ các thẻ script
              $teacher->detail_desc = isset($inputs['detail_information']) ? $inputs['detail_information'] : null;

              DB::beginTransaction();
              $user->save();
              $teacher->save();
              DB::commit();

              $response =  array('code'=>201,'message'=>'create teacher success');

            }else{
              $response = array('code'=>999,'message'=>'user not existed');
            }

          }
          catch(QueryException $e){
            DB::rollback();
            if($e->getCode()==23000){
              $response =   array('code'=>23000,'message'=>'teacher existed');
            }
            $e->getMessage();
          }catch(\Exception $e){
            DB::rollback();
            $response =   array('code'=>992,'message'=>'unknown error');
          }
        }
      }

      return view ('user::active_email')->with('response',$response);
    }

    private function cleanInput($input){
      return isset($input) ? trim(strip_tags($input)) : null;
    }

    /**
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

@extends('user::layouts.master')
@section('script')
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script src="{{Module::asset('user:tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{Module::asset('user:build/js/wlnstepper.js')}}"></script>
<script src="{{Module::asset('user:build/js/user.master.y.js')}}"></script>
@stop
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
@stop
<style media="screen">
  #detail_information{
  height:100%;
}
.form-group.required .control-label:after {
  content:" *";
  color:red;
}
.error{
  font-weight:normal;
  color:red;
}
#short_desc{
  resize:vertical;
  height:80px;
}
.box{
  height: 470px;
  overflow-y:auto;
  white-space: normal;
  background:#fff;
  font-size:15px;
}

.document{
  padding: 0 100px;
  text-align:justify;
}
.document h3{
  text-align:center;
}


.stepper-item{
  white-space:pre;
}
.stepper-wrapper{
    border:1px solid #ddd;
}

</style>
@section('content')
<div class="container">
  <div class="entry-information">

    <form class="form-horizontal" id="myform" action="/user/teacher/register" method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="wln-stepper">
        <div class="stepper-wrapper">
            <div class="stepper-content">
              <div class="stepper-item">
                <div class="box document">
                  <h3>@lang('form_register_trainer.mission.title')</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis
                    enim venenatis magna rutrum elementum. Fusce scelerisque ornare enim et tempus.
                    Nulla metus velit, porta eget rhoncus id, varius vitae est. Sed ultricies turpis sed est
                    tincidunt volutpat. Proin faucibus massa quis elementum ornare. Nulla facilisi.
                    Vivamus pulvinar,
                    purus sagittis cursus suscipit, diam velit fermentum quam, sit amet mattis libero
                    lectus vitae sem. Duis a erat sed neque porta tincidunt. Phasellus hendrerit lacus eu ipsum
                    luctus, vel fermentum nisl interdum. In a nisl tortor. Aenean vel dui mi.

                    Sed sit amet molestie diam. Pellentesque accumsan vitae enim id ultrices. Sed erat erat,
                    congue sit amet magna eu,
                    vulputate auctor metus. Fusce in nibh id neque vulputate accumsan vitae ac ex.
                    Ut volutpat nisl augue.
                     Curabitur ullamcorper vehicula sodales. Duis et lobortis nulla, at egestas ex.

                    Ut pharetra nisl at elit sagittis, interdum congue orci convallis. Nam non porttitor diam.
                    Maecenas tristique mauris et nunc iaculis lacinia. Nam non faucibus leo. Curabitur tortor sapien,
                    laoreet et ornare vitae, interdum a lectus. Pellentesque habitant morbi tristique senectus et netus
                    et malesuada fames ac turpis egestas. In fermentum interdum metus sit amet posuere.
                     Donec semper aliquam orci,
                    sit amet rhoncus nulla cursus nec.
                  </p>

                  <div class="radio">
                  <label class="checkbox-inline"><input type="checkbox" name="opinion" value="true">@lang('form_register_trainer.mission.accept')</label>
                  </div>

                </div>
              </div>

              <!--Section hông tin cơ bản -->
              <div class="stepper-item">
                <div class="box document">
                  <h3>@lang('form_register_trainer.basic_info.title')</h3>
                  <div class="form-group required">
                    <label class="control-label col-md-2" for="first_name">@lang('landingpage.signin_signup.form_info.first_name')</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="first_name" id="first_name">
                    </div>
                  </div>

                  <div class="form-group required">
                    <label class="control-label col-md-2" for="last_name">@lang('landingpage.signin_signup.form_info.last_name')</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="last_name" id="last_name">
                    </div>
                  </div>

                  <div class="form-group required">
                    <label class="control-label col-md-2" for="email">@lang('landingpage.signin_signup.form_info.email')</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                  </div>

                  <div class="form-group required">
                    <label class="control-label col-md-2" for="phone">@lang('landingpage.signin_signup.form_info.phone')</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                  </div>

                  <div class="form-group required">
                    <label class="control-label col-md-2" for="birthday">@lang('form_register_trainer.basic_info.birthday')</label>
                    <div class="col-md-10">
                      <div class="input-group date" data-provide="datepicker">
                        <input type="text" name="birthday" id="birthday" onkeydown="return false" class="form-control">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2" for="sex">@lang('form_register_trainer.basic_info.sex')</label>
                    <div class="col-md-10">
                      <div class="radio">
                        <label class="radio-inline"><input type="radio" name="sex" value="1">@lang('form_register_trainer.basic_info.male')</label>
                        <label class="radio-inline"><input type="radio" name="sex" value="2">@lang('form_register_trainer.basic_info.female')</label>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!--End section thông tin cơ bản-->

              <!--Section chuyên môn -->
              <div class="stepper-item">
                <div class="box document">
                  <h3>@lang('form_register_trainer.expertise.title')</h3>

                  <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="form-group required">
                        <label class="control-label col-md-2" for="company">@lang('form_register_trainer.expertise.company')</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="company" id="company">
                        </div>
                      </div>

                      <div class="form-group required">
                        <label class="control-label col-md-2" for="location">@lang('form_register_trainer.expertise.location')</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="location" id="location">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2" for="position">@lang('form_register_trainer.expertise.position')</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="position" id="position">
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="form-group required">
                        <label class="control-label col-md-2" for="field">@lang('form_register_trainer.expertise.title')</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="field" id="field">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2" for="short_desc">@lang('form_register_trainer.expertise.short_desc')</label>
                        <div class="col-md-10">
                            <textarea type="text" class="form-control" name="short_desc" id="short_desc" cols="10"></textarea>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
              <!--End section chuyên môn -->

              <div class="stepper-item">
                <div class="box document">
                  <h3>Thông tin liên quan</h3>
                  <div class="form-group">
                    <label class="col-md-2" for="fb">Facebook cá nhân</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" name="fb" id="fb">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2" for="yt">Kênh youtube</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" name="yt" id="yt">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2" for="fb">Website cá nhân</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" name="web" id="web">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2" for="fb">Video giới thiệu</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" name="web" id="web">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2">Lưu ý</label>
                    <div class="col-md-10">
                      Các thông tin trên là không bắt buộc
                    </div>
                  </div>
                </div>
              </div>

              <!--Section giới thiệu chi tiết -->
              <div class="stepper-item">
                <div class="box document">
                  <h3>Hãy cho học viên của chúng tôi biết rõ hơn về bạn</h3>
                  <textarea id="detail_information" name="detail_information"></textarea>
                </div>
              </div>
              <!--End section giới thiệu chi tiết -->
            </div>
        </div>
        <div class="pull-right  stepper-controller" style="margin-top:15px;">
          <a href="javascript:void(0)" class="btn btn-primary btn-step-control" data-forward="prev">prev</a>
          <a href="javascript:void(0)" class="btn btn-primary btn-step-control" data-forward="next">next</a>
          <input type="submit" class="btn btn-success" style="display:none;">
        </div>
    </form>

  </div>
</div>
@stop

@extends('user::layouts.dashboard.user_dashboard_master')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
<style media="screen">
  .container{
    margin-bottom:20px;
  }
</style>
@stop
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script src="{{Module::asset('user:build/js/course-designer.js')}}"></script>
@stop
@section('content')
<div class="container">
  <h3 class=title>Tạo khóa học</h3>
  <form class="form-horizontal" action="javascript:void(0)" method="get">
    <!--Thông tin cơ bản -->
    <div class="panel panel-default">
      <div class="panel-heading">
        Thông tin cơ bản
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label class="col-md-2 control-label">Lĩnh vực</label>
          <div class="col-md-10">
              <select class="form-control" name="">
                <option value="">Lập trình</option>
                <option value="">Ngoại ngữ</option>
                <option value="">Kiến thức THPT</option>
                <option value="">Ôn thi đại học</option>
                <option value="">Marketing</option>
              </select>
          </div>
        </div>

        <div class="form-group required">
          <label class="col-md-2 control-label">Tên khóa học *</label>
          <div class="col-md-10">
              <input type="text" class="form-control">
          </div>
        </div>

        <div class="form-group required">
          <label class="col-md-2 control-label">Thời lượng dự kiến *</label>
          <div class="col-md-10">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Nhập số bài học dự kiến cho khóa học.Ví dụ: 15">
                <span class="input-group-addon" id="basic-addon1">Bài</span>
            </div>
          </div>
        </div>

        <div class="form-group required">
          <label class="col-md-2 control-label">Thời gian 1 buổi học *</label>
          <div class="col-md-10">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Thời gian ước lượng cho một buổi học.Ví dụ: 120">
                <span class="input-group-addon" id="basic-addon1">phút</span>
            </div>
          </div>
        </div>

        <div class="form-group required">
          <label class="col-md-2 control-label">Giá tiền khóa học *</label>
          <div class="col-md-10">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Nhập số tiền mỗi học viên cần trả để tham gia học. Ví dụ: 1.200.000">
                <span class="input-group-addon">VNĐ</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--stop-->

    <!-- Giới thiệu khóa học -->
    <div class="panel panel-default">
      <div class="panel-heading">
        Giới thiệu khóa học
      </div>
      <div class="panel-body">
        <div class="form-group required">
          <label class="col-md-2 control-label">Ảnh khóa học</label>
          <div class="col-md-10">
            <label class="custom-file">
              <input type="file" id="file" class="custom-file-input">
              <span class="custom-file-control"></span>
            </label>
          </div>
        </div>

        <div class="form-group required">
          <label class="col-md-2 control-label">Video giới thiệu</label>
          <div class="col-md-10">
              <input type="text" class="form-control" placeholder="Link youtube"/>
          </div>
        </div>

        <div class="form-group required">
          <label class="col-md-2 control-label">Giới thiệu khóa học *</label>
          <div class="col-md-10">
              <textarea type="text" class="form-control" placeholder="Hãy giới thiệu qua về khóa học của bạn."></textarea>
          </div>
        </div>

        <div class="form-group required">
          <label class="col-md-2 control-label">Đối tượng tham dự</label>
          <div class="col-md-10">
              <textarea type="text" class="form-control" placeholder="Hãy giới thiệu qua về khóa học của bạn."></textarea>
          </div>
        </div>

        <div class="form-group required">
          <label class="col-md-2 control-label">Lợi ích của khóa học</label>
          <div class="col-md-10">
              <textarea type="text" class="form-control" placeholder="Hãy cho học viên thấy khóa học của bạn có giá trị to lớn thế nào với họ."></textarea>
          </div>
        </div>
      </div>
    </div>
    <!-- Stop -->

    <!-- Nội dung chi tiết -->
    <div class="panel panel-default">
      <div class="panel-heading">
        Nội dung chi tiết
      </div>
      <div class="panel-body">
        <div id="wln-course-designer"></div>
      </div>
    </div>
    <!--Stop -->

    <div class="pull-right">
      <button type="button" class="btn btn-primary" name="button">Lưu lại</button>
      <button type="button" class="btn btn-danger" name="button">Đăng kí</button>
    </div>
  </form>
</div>
@stop

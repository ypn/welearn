<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrationWelearnSchemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Lưu trữ thông tin giảng viên
        Schema::create('teachers',function(Blueprint $table){
          $table->increments('id');
          $table->integer('uid');//khóa ngoại tham chiếu tới id trong bảng user.
          $table->tinyInteger('type')->nullable();//gồm 3 kiểu: giáo viện tự do - đối tác cá nhân - đối tác tổ chức.
          $table->tinyInteger('status')->nullable();//trạng thái giảng viên: đang giảng dạy - đã thôi dạy...
          $table->string('company')->nullable();//Công ty làm việc
          $table->string('position')->nullable();//Vị trí công việc hiện tại
          $table->string('expertise')->nullable();//Chuyên môn
          $table->text('short_desc')->nullable();//Giới thiệu qua về bản thân
          $table->text('detail_desc')->nullable();//Giới thiệu chi tiết

          //Related information
          $table->string('fb')->nullable();//đường dẫn tới trang facebook cá nhân.
          $table->string('yt')->nullable();//đường dẫn tới kênh youtube.
          $table->string('web')->nullable();//đường dẫn tời website cá nhân.
          $table->string('video')->nullable();//đường dẫn tới video giới thiệu trên youtube.
          $table->timestamps();

          $table->engine = 'InnoDB';
          $table->unique ('uid');//Tham chiếu 1:1 tới bảng user


        });

        //Lưu trữ thông tin học viên
        Schema::create('students',function(Blueprint $table){
          $table->increments('id');
          $table->integer('uid');
          $table->timestamps();

          $table->engine = 'InnoDB';
        });

        //Lưu trữ thông tin khóa học
        Schema::create('courses',function(Blueprint $table){
          $table->increments('id');
          $table->string('course_name');
          $table->integer('teacher_id');
          $table->float('price')->nullable();
          $table->integer('category_id');
          $table->tinyInteger('min_student_required')->nullable();//Số học viên tối thiểu để bắt đầu khóa học.
          $table->tinyInteger('max_student_required')->nullable();//Số học viên tối đa của khóa học.
          $table->tinyInteger('duration')->nullable();//Thời gian dự kiến của khóa học (bao nhiêu buổi).
          $table->dateTime('date_start')->nullable();//Ngày dự kiến bắt đầu khóa học.
          $table->tinyInteger('status')->nullable();//Trạng thái khóa học:sắp mở - đã bắt đầu - đã kết thúc.
          $table->tinyInteger('rating')->nullable();//Chấm điểm  của học viên về khóa học.
          $table->timestamps();

          $table->engine = 'InnoDB';
        });

        //Phân loại khóa học
        Schema::create('course_categories',function(Blueprint $table){
          $table->increments('id');
          $table->timestamps();

          $table->engine = 'InnoDB';
        });

        Schema::create('course_sub_categories',function(Blueprint $table){
          $table->increments('id');
          $table->integer('course_id');
          $table->integer('parent_id');//parent category;
          $table->timestamps();

          $table->engine = 'InnoDB';
        });

        Schema::create('course_infomarion',function(Blueprint $table){
          $table->increments('id');
          $table->tinyInteger('locale_id');
          $table->string('title');
          $table->text('description');
          $table->timestamps();

          $table->engine = 'InnoDB';

        });

        Schema::create('student_course',function(Blueprint $table){
          $table->increments('id');
          $table->integer('student_id');
          $table->integer('course_id');
          $table->tinyInteger('status');//Trạng thái học viên: Đã đăng kí - Đang học - Đã kết thúc.
          $table->timestamps();

          $table->engine = 'InnoDB';

        });

        Schema::create('languages',function(Blueprint $table){
          $table->increments('id');
          $table->char('code');
          $table->string('language_name');
          $table->string('flag');
          $table->timestamps();

          $table->engine = 'InnoDB';
        });

        Schema::create('course_categories_infomation',function(Blueprint $table){
          $table->increments('id');
          $table->tinyInteger('locale_id')->nullable();
          $table->string('title');
          $table->text('description')->nullable();
          $table->timestamps();

          $table->engine = 'InnoDB';
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teachers');
        Schema::drop('students');
        Schema::drop('courses');
        Schema::drop('course_categories');
        Schema::drop('course_sub_categories');
        Schema::drop('course_infomarion');
        Schema::drop('student_course');
        Schema::drop('languages');
        Schema::drop('course_categories_infomation');
    }
}

<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $guarded = ['id'];
    protected $table = 'teachers';
}

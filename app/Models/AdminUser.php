<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Encore\Admin\Auth\Database\Administrator as Administrator;

class AdminUser extends Administrator
{
    use SoftDeletes;
}

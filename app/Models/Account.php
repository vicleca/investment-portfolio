<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'url'];

    /**
     * Get the adminUser that belongs the account
     */
    public function adminUser()
    {
        return $this->belongsTo('App\Models\AdminUser');
    }
}

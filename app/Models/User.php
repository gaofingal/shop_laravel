<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "users";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'news_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;


    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'news_created_time';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'news_updated_time';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'news_name', 'news_password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'news_password', 'remember_token',
    ];


}

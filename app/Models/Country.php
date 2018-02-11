<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/11 0011
 * Time: 12:13
 */

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class Country extends Model
{
    public $collection = 'country';

    public $timestamps  = true;


    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'created_time';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'updated_time';


    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/1 0001
 * Time: 16:34
 */

namespace App\Http\Controllers;


class CollectController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view("collect");
    }
}
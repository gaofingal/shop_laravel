<?php

namespace App\Http\Controllers;


use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestsController extends Controller
{

    public function index()
    {
        Test::test();
    }
}
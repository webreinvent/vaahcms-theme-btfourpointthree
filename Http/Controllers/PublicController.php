<?php

namespace VaahCms\Themes\BtFourPointThree\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class PublicController extends Controller
{


    public function __construct()
    {

    }

    public function index()
    {
        return 'PublicController';
    }

}

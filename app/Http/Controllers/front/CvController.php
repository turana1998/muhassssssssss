<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CvController extends Controller
{
    //
    public function index()
    {
        return view('front.vacancies.vacancies-list');
    }
    public function create()
    {
        return view('front.vacancies.create');
    }
}

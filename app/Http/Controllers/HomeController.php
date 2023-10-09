<?php

namespace App\Http\Controllers;

use Carbon\Cli\Invoker;
use Illuminate\Http\Request;

use App\Models\Course;

class HomeController extends Controller
{
    public function __invoke()
    {

        $courses = Course::where('status', '3')->latest('id')->get();

        //return $courses;

        return view('welcome', compact('courses'));
    }
}

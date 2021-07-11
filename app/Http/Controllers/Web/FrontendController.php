<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::whereStatus(1)->orderBy('created_at', 'DESC')->get();
        return view('web.homepage.index', compact('sliders'));
    }

    public function show($uri){
        // $pages = Page::where('parent_id', 0)->get();
        $page = Page::where('uri', $uri)->first();
        return view('web.template.master', compact('pages', 'page'));
    }
    public function about()
    {
        return view('web.about');
    }

    public function verify()
    {
        return view('web.verify');
    }

    public function admission()
    {
        $courses = Course::orderBy('created_at', 'DESC')->get();
        return view('web.admission', compact('courses'));
    }
}

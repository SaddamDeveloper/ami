<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::whereStatus(1)->orderBy('created_at', 'DESC')->get();
        return view('web.homepage.index', compact('sliders'));
    }
}

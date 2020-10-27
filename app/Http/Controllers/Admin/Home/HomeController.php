<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    public function index(){
        $home = HomePage::first();
        return view('admin.home.index', compact('home'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'mobile' => 'required|numeric',
            'address' => 'required|string',
            'about' => 'required|string'
        ]);

        if($request->hasfile('logo'))
        {
            $this->validate($request, [
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('logo');
            $destination = base_path().'/public/admin/homepage/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/admin/homepage/thumb/'.$image_name;
            Image::make($image)
            ->resize(346, 252)
            ->save($thumb_path);
            $frontend = HomePage::find(1);
            if($frontend->logo){
                //Delete
                $image_path_thumb = "/admin/homepage/thumb/".$frontend->logo;  
                $image_path_original = "/admin/homepage/".$frontend->logo;  
                if(File::exists($image_path_thumb)) {
                    File::delete($image_path_thumb);
                }
                if(File::exists($image_path_original)){
                    File::delete($image_path_original);
                }

                //Update
                $frontend->image = $image_name;
                if($frontend->save()){
                    return redirect()->back()->with('message','Successfully Updated!');
                }
            }else{
                $frontend->image = $image_name;
                if($frontend->save()){
                    return redirect()->back()->with('message','Successfully Updated!');
                }
            }
        }

        $home = HomePage::find(1);
        $home->mobile = $request->input('mobile');
        $home->address = $request->input('address');
        $home->about = $request->input('about');
        $home->fb_id = $request->input('fb_id');
        $home->tw_id = $request->input('tw_id');
        $home->yt_id = $request->input('yt_id');

        if($home->save()){
            return redirect()->back()->with('message', 'Successfully Updated!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}

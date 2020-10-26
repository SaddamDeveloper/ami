<?php

namespace App\Http\Controllers\Admin\Home\Slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'   => 'required|string',
            'sub_title' => 'required|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('main_image'))
        {
            $image = $request->file('main_image');
            $destination = base_path().'/public/admin/images/slider/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/admin/images/slider/thumb/'.$image_name;
            Image::make($image)
            ->resize(200, 400)
            ->save($thumb_path);
        }

        $slider = new Slider;
        $slider->title = $request->input('title');
        $slider->sub_title = $request->input('sub_title');
        $slider->main_image = $image_name;

        if($slider->save()){
            return redirect()->back()->with('message','Successfully Added Slider!');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }

    public function list(){
        $query = Slider::orderBy('created_at', 'DESC');
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->editColumn('title', function($row){
            return Str::words($row->title, 12, '...');
        })
        ->editColumn('sub_title', function($row){
            return Str::words($row->sub_title, 16, '...');
        })
        ->addColumn('slider_image', function($row){
            $url= asset('admin/images/slider/'.$row->main_image);
            return '<img src="'.$url.'" alt="Photo" width="200"/>';
        })
        ->addColumn('action', function($row){
            $btn = '
            <a href="'.route('slider.edit', [encrypt($row->id)]).'" class="btn btn-warning btn-sm">Edit</a>              
            <a href="'.route('slider.destroy', [$row]).'" class="btn btn-danger btn-sm">Delete</a>              
            ';
            if ($row->status == '1') {
                $btn .= '<a href="'.route('slider.status', ['id' => encrypt($row->id), 'status' => 2]).'" class="btn btn-primary btn-sm">Unpublish</a>';
                return $btn;
            }else{
                $btn .= '<a href="'.route('slider.status', ['id' => encrypt($row->id), 'status' => 1]).'" class="btn btn-success btn-sm">Publish</a>';
                return $btn;
            }
            return $btn;
        })
        ->rawColumns(['slider_image', 'action'])
        ->make(true);
    }

    public function status($id, $status){
        try {
            $id = decrypt($id);
        } catch (\Exception $e) {
            abort(404);
        }

        $slider = Slider::find($id);
        $slider->status = $status;

        if($slider->save()){
            return redirect()->back()->with('message', 'Successfully Updated Status');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}

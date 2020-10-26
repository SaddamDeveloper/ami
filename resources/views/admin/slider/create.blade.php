@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12" style="margin-top:50px;">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Slider</h2>
                    <div class="clearfix"></div>
                </div>
                @include('common.error')
                <div class="x_content">
                    {{ Form::open(['method' => 'post','route'=>'slider.store', 'enctype'=>'multipart/form-data']) }}
                        <div class="well" style="overflow: auto">
                            <div class="form-row mb-10">
                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{old('title')}}"  placeholder="Enter The Title">
                                        @if($errors->has('title'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @enderror
                                </div>     
                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="sub_title">Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" placeholder="Enter Sub Title">
                                        @if($errors->has('sub_title'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('sub_title') }}</strong>
                                            </span>
                                        @enderror
                                </div>                
                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="main_image">Main Image</label>
                                    <input type="file" class="form-control" name="main_image">
                                        @if($errors->has('main_image'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('main_image') }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">    	            	
                            {{ Form::submit('Submit', array('class'=>'btn btn-success pull-right')) }}  
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



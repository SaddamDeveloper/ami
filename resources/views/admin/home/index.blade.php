@extends('admin.template.admin_master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Frontend Information</h2>
            <div class="clearfix"></div>
        </div>
       @include('common.error')
        <div class="x_content">
            {{ Form::open(['method' => 'post','route'=>'admin.store_home', 'enctype'=>'multipart/form-data']) }}
                <div class="well" style="overflow: auto">
                    <div class="form-row mb-10">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="mobile">Mobile</label>
                            <input type="number" class="form-control" name="mobile" placeholder="Enter mobile" value="{{ $home->mobile }}">
                            @if($errors->has('mobile'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="logo">Logo Upload</label>
                            <input type="file" class="form-control" name="logo" accept="/*">
                            @if($errors->has('logo'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('logo') }}</strong>
                            </span>
                            @enderror
                            <div>
                                <img src="{{ asset('admin/homepage/thumb/'.$home->logo) }}" alt="logo" width="400" height="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="well" style="overflow: auto">
                    <div class="form-row mb-10">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="address">Address*</label>
                            <textarea class="form-control" name="address" placeholder="Enter Address" id="address">{{ $home->address }}</textarea>
                            @if($errors->has('address'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @enderror
                        </div>                                 
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="about">About*</label>
                            <textarea class="form-control" name="about" placeholder="Enter About" id="about">{{ $home->about }}</textarea>
                            @if($errors->has('about'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('about') }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="well" style="overflow: auto">
                    <div class="form-row mb-10">
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="fb_id">FB ID*</label>
                            <input type="text" class="form-control" name="fb_id" placeholder="Enter FB ID" id="fb_id" value="{{ $home->fb_id }}">
                            @if($errors->has('fb_id'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('fb_id') }}</strong>
                            </span>
                            @enderror
                        </div>                                 
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="tw_id">TW ID*</label>
                            <input type="text" class="form-control" name="tw_id" placeholder="Enter TW ID" id="tw_id" value="{{ $home->tw_id }}">
                            @if($errors->has('tw_id'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('tw_id') }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="yt_id">YT ID*</label>
                            <input type="text" class="form-control" name="yt_id" placeholder="Enter YT ID" id="yt_id" value="{{ $home->yt_id }}">
                            @if($errors->has('yt_id'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('yt_id') }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-10">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            
                        </div>                                 
                    </div>
                </div>
                <div class="form-group">    	            	
                    {{ Form::submit('Publish', array('class'=>'btn btn-success pull-right')) }}  
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
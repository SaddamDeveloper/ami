@extends('admin.template.admin_master')
@section('content')
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
            <h2>Add Course</h2>
            <div class="clearfix"></div>
        </div>
        @include('common.error')
        <div class="x_content">
            {{ Form::open(['method' => 'post','route'=>'course.store']) }}
                <div class="well" style="overflow: auto">
                    <div class="form-row mb-10">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="name">Course Name</label>
                            <input type="text" class="form-control" name="name" required value="{{old('name')}}"  placeholder="Enter Course Name">
                                @if($errors->has('name'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>  
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="name">Duration</label>
                            <input type="text" class="form-control" name="duration" required value="{{old('duration')}}"  placeholder="Enter Duration">
                                @if($errors->has('duration'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-row mb-10">
                        <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Enter Description">{{ old('description') }}</textarea>
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
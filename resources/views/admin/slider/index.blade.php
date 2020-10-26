@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="row">

    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
            <h2>Sliders</h2>
            <a href="{{ route('slider.create') }}" class="btn btn-primary pull-right">Add Slider</a>
            <div class="clearfix"></div>
        </div>
        @include('common.error')
        <div class="x_content">   
        <table id="slider_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                <th>Sl. No</th>
                <th>Title</th>
                <th>Sub Title</th>
                <th>Slider Image</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>                       
            </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
 @endsection
 @section('script')
     <script type="text/javascript">
         $(function () {
            var i = 1;
            var table = $('#slider_list').DataTable({
                processing: true,
                serverSide: true,
                iDisplayLength: "50",
                ajax: "{{ route('admin.ajax.slider_list') }}",
                columns: [
                    { "render": function(data, type, full, meta) {return i++;}},
                    {data: 'title', name: 'title',searchable: true},
                    {data: 'sub_title', name: 'sub_title',searchable: true},
                    {data: 'slider_image', name: 'slider_image',searchable: true},
                    {data: 'action', name: 'action',searchable: true}
                ]
            });
            
        });
     </script>
     @endsection
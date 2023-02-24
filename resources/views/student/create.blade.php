@extends('welcome')
@section("custom_css")
    <link rel="stylesheet" href="/admin/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection
@section("custom_js")
    <script src="/admin/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript">
        $('.select2').select2();
    </script>
@endsection
@section("content_header")
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Create a new product</h1>
    </div>
@endsection
@section("main_content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Product information</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{url("/student/create")}}" role="form" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                @include("html.form.input",[
                    "label"=>" Name",
                    "key"=>"name",
                    "type"=>"text",
                    "required"=>true
                ])
                @include("html.form.input",[
                    "label"=>" Age",
                    "key"=>"age",
                    "type"=>"number",
                    "required"=>true
                ])
                @include("html.form.input",[
                    "label"=>" Address",
                    "key"=>"address",
                    "type"=>"text",
                    "required"=>true
                ])
                @include("html.form.input",[
                    "label"=>" Telephone",
                    "key"=>"telephone",
                    "type"=>"number                 ",
                    "required"=>true
                ])
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

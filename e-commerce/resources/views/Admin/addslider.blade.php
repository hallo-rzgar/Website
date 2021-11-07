@extends('layouts.appadmin')
@section('content')

@section('title')
    Add Slider
@endsection
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Slider</h4>
                {!! Form::open(['action' => 'App\Http\Controllers\ProductController@addproduct', 'class'=>'cmxform', 'method'=>'POST','id'=>'commentForm']) !!}
                {{csrf_field()}}
                <div class="form-group">
                    {{Form::label('','Description one',['for'=>'cname'])}}
                    {{Form::text('description_one','',['class'=>'form-control','minlength'=>'2'])}}
                </div>
                <div class="form-group">
                    {{Form::label('','Description two',['for'=>'cname'])}}
                    {{Form::text('description_two','',['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('','Slider Image')}}
                    {{Form::file('slider_image',['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('','Slider Status',['for'=>'cname'])}}
                    {{Form::checkbox('slider_status','','true',['class'=>'form-control '])}}

                </div>

                {!! Form::close() !!}
                {{Form::submit('Save',['class'=>'btn btn-primary btn-sm'])}}


            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="backend/js/form-validation.js"></script>
    <script src="backend/js/bt-maxLength.js"></script>
@endsection


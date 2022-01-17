@extends('layouts.appadmin')
@section('content')

@section('title')
    Add Product
@endsection
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Product</h4>
                    {!! Form::open(['action' => 'App\Http\Controllers\ProductController@saveproduct', 'class'=>'cmxform', 'method'=>'POST','id'=>'commentForm']) !!}
                    {{csrf_field()}}

                    <div class="form-group">
                        {{Form::label('','Product Name',['for'=>'cname'])}}
                        {{Form::text('product_name','',['class'=>'form-control','minlength'=>'2'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('','product Price',['for'=>'cname'])}}
                        {{Form::number('product_price','',['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('','product Category')}}
                        {{Form::select('size',['L'=>'Large','S'=>'Small',],null,['placeholder'=>'Select Category','class'=>'form-control'])}}

                    </div>

                    <div class="form-group">
                        {{Form::file('product_image',['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('','product Status',['for'=>'cname'])}}

                        {{Form::checkbox('product_status','','true',['class'=>'form-control '])}}

                    </div>


                    {{Form::submit('Save',['class'=>'btn btn-primary btn-sm'])}}
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
     <script src="{{asset('backend/js/bt-maxLength.js')}}"></script>
@endsection

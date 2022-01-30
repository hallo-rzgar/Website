@extends('layouts.appadmin')
@section('content')

@section('title')
    Edit  Product
@endsection
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Product</h4>
                @if(Session::has('status'))
                    <div class="alert alert-success">
                        {{Session::get('status')}}

                    </div>
                @endif
                {!! Form::open(['action' => 'App\Http\Controllers\ProductController@updateproduct', 'class'=>'cmxform', 'method'=>'POST','id'=>'commentForm', 'enctype'=>'multipart/form-data']) !!}
                {{csrf_field()}}

                <div class="form-group">
                    {{Form::hidden('id',$product->id)}}

                    {{Form::label('','Product Name',['for'=>'cname'])}}
                    {{Form::text('product_name',$product->product_name,['class'=>'form-control','minlength'=>'2'])}}
                </div>
                <div class="form-group">
                    {{Form::label('','product Price',['for'=>'cname'])}}
                    {{Form::number('product_price',$product->product_price,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('','product Category')}}
                    {{Form::select('product_category',$categories,$product->product_category,[ 'class'=>'form-control'])}}

                </div>


                <div class="form-group">
                    {{Form::label('','product image')}}
                    {{Form::file('product_image',['class'=>'form-control'])}}
                </div>



                {{Form::submit('Update',['class'=>'btn btn-primary btn-sm'])}}
                {!! Form::close() !!}


            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{asset('backend/js/bt-maxLength.js')}}"></script>
@endsection

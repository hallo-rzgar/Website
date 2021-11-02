@extends('layouts.appadmin')
@section('content')

@section('title')
    Add Category
@endsection
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Category</h4>
                         {!! Form::open(['action' => 'App\Http\Controllers\AdminController@addcategory', 'class'=>'cmxform', 'method'=>'POST','id'=>'commentForm']) !!}
                        {{csrf_field()}}
                        {{Form::label('','Product Category',['for'=>'cname'])}}
                        {{Form::text('category_name','',['class'=>'form-control','minlength'=>'2'])}}
                        {{Form::submit('Save',['class'=>'btn btn-primary mt-4 btn-sm'])}}
                    {!! Form::close() !!}



                 </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="backend/js/bt-maxLength.js"></script>
@endsection

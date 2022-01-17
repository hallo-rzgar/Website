@extends('layouts.appadmin')
@section('content')

@section('title')
    Add Category
@endsection
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Category</h4>

                {!! Form::open(['action' => 'App\Http\Controllers\CategoryController@savecategory', 'class'=>'cmxform', 'method'=>'POST','id'=>'commentForm']) !!}
                {{csrf_field()}}
                {{Form::label('','Product Category',['for'=>'cname'])}}
                {{Form::text('category_name',$category->category_name,['class'=>'form-control','minlength'=>'2'])}}
                {{Form::submit('Update',['class'=>'btn btn-primary mt-4 btn-sm'])}}
                {!! Form::close() !!}



            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{asset('backend/js/bt-maxLength.js')}}"></script>

@endsection

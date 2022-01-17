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
                    @if(Session::has('status'))
                         <div class="alert alert-success">
                            {{Session::get('status')}}

                        </div>
                    @endif
                        @if(Session::has('status1'))
                            <div class="alert alert-danger">
                                {{Session::get('status1')}}

                            </div>
                    @endif
                         {!! Form::open(['action' => 'App\Http\Controllers\CategoryController@savecategory', 'class'=>'cmxform', 'method'=>'POST','id'=>'commentForm']) !!}
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
     <script src="{{asset('backend/js/bt-maxLength.js')}}"></script>

@endsection

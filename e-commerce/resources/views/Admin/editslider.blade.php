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
                @if(Session::has('status'))
                    <div class="alert alert-success">
                        {{Session::get('status')}}

                    </div>
                @endif

                {!! Form::open(['action' => 'App\Http\Controllers\SliderController@update_slider', 'class'=>'cmxform', 'method'=>'POST','id'=>'commentForm', 'enctype'=>'multipart/form-data']) !!}
                {{csrf_field()}}
                {{Form::hidden('id',$sliders->id)}}
                <div class="form-group">
                    {{Form::label('','Description one',['for'=>'cname'])}}
                    {{Form::text('description_one',$sliders->description1,['class'=>'form-control','minlength'=>'2'])}}
                </div>
                <div class="form-group">
                    {{Form::label('','Description two',['for'=>'cname'])}}
                    {{Form::text('description_two',$sliders->description2,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('','Slider Image')}}
                    {{Form::file('slider_image',['class'=>'form-control'])}}
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


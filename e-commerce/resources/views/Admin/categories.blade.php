@extends('layouts.appadmin')

@section('title')
    Category
@endsection
@section('content')
    {{Form::hidden('',$increment=1)}}
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Category</h4>
        @if(Session::has('status'))
            <div class="alert alert-success">
                {{Session::get('status')}}

            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>



                            <tr>
                                <th>Order #</th>
                                <th> Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$increment}}</td>
                            <td>{{$category->category_name}}</td>


                            <td>
                                <button class="btn btn-outline-primary" onclick="window.location='{{url('/edit/'.$category->id)}}'">Edit</button>
                                <a href="{{url('/delete/'.$category->id)}}" class="btn btn-outline-danger" id="delete">delete</a>
                            </td>
                        {{Form::hidden('',$increment= $increment+ 1)}}

                        @endforeach





                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

    <script src="{{asset('backend/js/data-table.js')}}"></script>

@endsection

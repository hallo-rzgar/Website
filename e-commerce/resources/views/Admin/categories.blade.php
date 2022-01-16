@extends('layouts.appadmin')
@section('content')

@section('title')
    Category
@endsection
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Category</h4>
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
                            <td>{{$category->id}}</td>
                            <td>{{$category->category_name}}</td>


                            <td>
                                <button class="btn btn-outline-primary">Edit</button>
                                <button class="btn btn-outline-danger">delete</button>
                            </td>

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

    <script src="backend/js/data-table.js"></script>

@endsection

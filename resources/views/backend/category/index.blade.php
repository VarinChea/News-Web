@extends('backend.layouts.app')
@section('content')
<div class="card mt-5">
        <div class="card-header">
            <h2>Laravel 8 CRUD Example from scratch - NiceSnippets.com</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-success" href="{{route('category.create')}}">Add New Category</a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Category Name</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ( $category as $categorys)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $categorys->category_name }}</td>
                            <td>

                                    <a class="btn btn-info" href="{{ route('category.show',$categorys->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('category.edit',$categorys->id) }}">Edit</a>

                                    <a class="btn btn-danger" href="{{ route('category.destroy',$categorys->id) }}">Delete</a>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $category->links() !!}
                    <style>
                    .w-5{
                        display :none;
                    }
                    </style>
                </div>
            </div>
        </div>
    </div>
@endsection

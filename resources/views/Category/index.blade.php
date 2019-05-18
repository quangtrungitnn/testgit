@extends('Category.master')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Category</h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Create New Category
                </button>
            </div>
        </div>
    </div>
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($category as $Category)
                <tr id="row_{{ $Category->id }}" data-id="{{ $Category->id }}">
                    <td>{{$Category->id}}</td>
                    <td>{{$Category->name}}</td>
                    <td>{{$Category->description}}</td>
                    <td>{{$Category->created_at}}</td>
                    <td>{{$Category->updated_at}}</td>
                    <td>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myEditCategory"
                                data-description="{{$Category->description}}" data-myname="{{$Category->name}}"
                                data-id="{{$Category->id}}" data-Create="{{$Category->created_at}}"
                                data-Update="{{$Category->updated_at}}" >
                            Edit
                        </button>

                        <button type="button" class="btn btn-danger delete-post" data-toggle="modal"
                                data-target="#myModal3" value="{{$Category->id}}">
                            Delete
                        </button>

                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        {{ $category->links() }}
    </div>

    @include('Category.create')

    @include('Category.edit')

    @include('Category.delete')

@endsection

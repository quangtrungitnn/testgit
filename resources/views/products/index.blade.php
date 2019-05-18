@extends('Category.master')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myAddProduct">
                    Create New Products
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
                <th>Producer</th>
                <th>Unit_price</th>
                <th>Promotion_price</th>
                <th>Image</th>
                <th>Id_category</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Products as $Product)
                <tr>
                    <td>{{$Product->id}}</td>
                    <td>{{$Product->name}}</td>
                    <td>{{$Product->producer}}</td>
                    <td>{{$Product->unit_price}}</td>
                    <td>{{$Product->promotion_price}}</td>
                    <td>{{$Product->image}}</td>
                    <td>{{$Product->id_category}}</td>
                    <td>{{$Product->created_at}}</td>
                    <td>{{$Product->updated_at}}</td>
                    <td>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myEditProduct"
                                value="{{$Product->id}}">
                            Edit
                        </button>

                        <button type="button" class="btn btn-danger delete-post" data-toggle="modal"
                                data-target="#myDeleteProduct" value="{{$Product->id}}">
                            Delete
                        </button>

                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        {{ $Products->links() }}
    </div>

    <!-- Modal Edit Product -->

    <div class="modal" id="myEditProduct">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
                            <div class="pull-left">
                                <h2>Edit product</h2>
                            </div>
                        </div>
                    </div>
                    <br>
                    <form action="{{route('products.update',$Product->id)}}" method="post" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $Product->name }}" class="form-control"
                                           placeholder="Name">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{$errors->has('producer')?' has-error':''}}">
                                    <strong>Producer:</strong>
                                    <textarea name="producer" id="producer" rows="2" placeholder="producer"
                                              class="form-control"></textarea>
                                    <span class="text-danger">{{$errors->first('producer')}}</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{$errors->has('unit_price')?' has-error':''}}">
                                    <strong>Unit_price:</strong>
                                    <input type="number" name="quantity" class="form-control" placeholder="unit_price">
                                    <span class="text-danger">{{$errors->first('unit_price')}}</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{$errors->has('promotion_price')?' has-error':''}}">
                                    <strong>Promotion_price:</strong>
                                    <input type="number" name="quantity" class="form-control"
                                           placeholder="Promotion_price">
                                    <span class="text-danger">{{$errors->first('promotion_price')}}</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{$errors->has('image')?' has-error':''}}">
                                    <strong>Image:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="image">
                                    <span class="text-danger">{{$errors->first('image')}}</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{$errors->has('id_category')?' has-error':''}}">
                                    <strong>Category:</strong>
                                    <input type="number" name="quantity" class="form-control" placeholder="id_Category">
                                    <span class="text-danger">{{$errors->first('id_category')}}</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{$errors->has('created_at')?' has-error':''}}">
                                    <strong>Created_at:</strong>
                                    <input type="date" name="created_at" class="form-control" placeholder="Created_at">
                                    <span class="text-danger">{{$errors->first('created_at')}}</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{$errors->has('updated_at')?' has-error':''}}">
                                    <strong>Updated_at:</strong>
                                    <input type="date" name="updated_at" class="form-control" placeholder="Updated_at">
                                    <span class="text-danger">{{$errors->first('updated_at')}}</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Add New</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete product-->

    <div class="modal" id="myDeleteProduct">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
                            <div class="pull-left">
                                <h2>Delete product</h2>
                            </div>
                        </div>
                    </div>
                    <br>
                    <form action="{{route('products.destroy',$Product->id)}}" method="post" role="form">
                        <h4>Are you sure you want to delete this product?</h4>
                        <div class="row">
                            <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
                                <div class="pull-left">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                <div class="pull-right">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
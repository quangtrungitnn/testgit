<!-- Modal Add product -->
<div class="modal" id="myAddProduct">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
                        <div class="pull-left">
                            <h2>Add New Product</h2>
                        </div>
                    </div>
                </div>
                <form action="{{route('products.store')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group{{$errors->has('name')?' has-error':''}}">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name">
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

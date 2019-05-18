<!-- Modal Delete Category -->

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
                <form action="{{route('Products.destroy',$Product->id)}}" method="post" role="form">
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
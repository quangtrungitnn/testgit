<!-- Modal Add Category -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
                        <div class="pull-left">
                            <h2>Add New category</h2>
                        </div>
                    </div>
                </div>
                <form action="{{route('Category.store')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @include('Category.from')
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
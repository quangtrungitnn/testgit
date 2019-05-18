<!-- Modal Edit Category -->

<div class="modal" id="myEditCategory" tabindex="-1" role="dialog" aria-labelledby="myEditCategory">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
                        <div class="pull-left">
                            <h2>Edit category</h2>
                        </div>
                    </div>
                </div>
                <br>
                <form action="{{route('Category.update', 'false')}}" method="post" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="PUT">
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


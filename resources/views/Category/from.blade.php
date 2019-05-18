<input type="hidden" id="id" name="id" value="">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{$errors->has('name')?' has-error':''}}">
            <strong>Name:</strong>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
            <span class="text-danger">{{$errors->first('name')}}</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{$errors->has('description')?' has-error':''}}">
            <strong>Note:</strong>
            <textarea name="description" id="description" rows="2" placeholder="description"
                      class="form-control"></textarea>
            <span class="text-danger">{{$errors->first('description')}}</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{$errors->has('created_at')?' has-error':''}}">
            <strong>Created_at:</strong>
            <input type="date" name="created_at" id = "created_at"
                   class="form-control" placeholder="Created_at">
            <span class="text-danger">{{$errors->first('created_at')}}</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{$errors->has('updated_at')?' has-error':''}}">
            <strong>Updated_at:</strong>
            <input type="date" name="updated_at" id = "updated_at"
                   class="form-control" placeholder="Updated_at">
            <span class="text-danger">{{$errors->first('updated_at')}}</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="button" id="edit-category" class="btn btn-primary">Update</button>
    </div>
</div>

<script type="javascript">

    $(document).ready(function () {
        alert(123);
        console.log($("#edit-category"));

    });

</script>
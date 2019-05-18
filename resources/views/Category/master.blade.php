<!doctype html>
<html lang="en">
<head>
    <title>Study Laravel 5.7</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    @yield('content')
</div>

<script>

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#myEditCategory').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('myname');
            var description = button.data('description');

            var modal = $(this);

            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #description').val(description);


        });


        $("#myEditCategory #edit-category").click(function () {
            $.ajax({
                method: "PUT",
                url: 'http://localhost/Category/false',
                data: {
                    name: $('#myEditCategory input#name').val(),
                    description: $('#myEditCategory input#description').val(),
                    id:  $('#myEditCategory input#id').val()
                }
            }).done(function (response) {
                current_id = 'row_' + $('#myEditCategory input#id').val();
                $("tr#" + current_id + ' td:eq(1)').text(response);
            });
        });

    })

</script>
</body>
</html>
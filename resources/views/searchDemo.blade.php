<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 JQuery UI Autocomplete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>

    <div class="container">
        <h1 class="text-center m-5">Laravel 9 JQuery UI AutoComplete Search Example</h1>
        <input type="text" class="typehead form-control" id="search">
    </div>
    
    <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";

        $( "#search" ).autocomplete({
            source: function ( request, response ) {
                $.ajax({
                    url:path,
                    type: 'GET',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function (data) {
                        response( data );
                    }
                });
            },
            select: function (event, ui) {
                $('#search').val(ui.item.label);
                console.log(ui.item);
                return false;
            }
        });

    </script>

</body>
</html>
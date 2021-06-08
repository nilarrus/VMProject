<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ajaxt test</title>
     <!-- Jquery -->
     <script src="{{ URL::asset('js/jquery-3.6.0.js')}}"></script>
     <script src="{{ URL::asset('js/jquery-3.6.0.min.js')}}"></script>
    <script>
        function getMessage() {
            $.ajax({
                type: 'POST',
                url: "{{route('tAjax')}}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    console.log(data);
                    $("#msg").html(data.msg);
                }
            });
        }
    </script>
</head>
<body>
    <div id="msg">
        Hola
    </div>
    <button type="button" onclick="getMessage()">Replace msg</button>
    
</body>
</html>
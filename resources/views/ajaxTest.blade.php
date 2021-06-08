<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Ajaxt test</title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script>
        function getMessage() {
            $.ajax({
                type: 'POST',
                url: '/getm',
                data: '_token = <?php echo csrf_token() ?> ',
                success: function (data) {
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
    {!! Form::submit("Replece msg", ['onclick'=>'getMessage()']) !!}
</body>
</html>
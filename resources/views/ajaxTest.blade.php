<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Ajaxt test</title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script>
        function getMessage() {
            {{ route('tAjax')}}
            $.ajax({
                type: 'POST',
                url: "{{route('tAjax')}}",
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
    <button type="button" onclick="getMessage()">Replace msg</button>
    {!! Form::submit("Replece msg", ['onclick'=>'getMessage()']) !!}
    
</body>
</html>
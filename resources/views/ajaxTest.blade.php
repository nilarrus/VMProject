<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Ajaxt test</title>
     <!-- Jquery -->
     <script src="{{ URL::asset('js/jquery-3.6.0.js')}}"></script>
     <script src="{{ URL::asset('js/jquery-3.6.0.min.js')}}"></script>
    <script>
        function getMessage() {
            {{ route('tAjax')}}
            $.ajax({
                type: 'POST',
                url: "{{route('tAjax')}}",
                data: '_token' : '{{csrf_token()}} ',
                success: function (data) {
                    alert(data);
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
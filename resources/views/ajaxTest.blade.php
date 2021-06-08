<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Ajaxt test</title>
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
    <?php
      echo Form::button('Replace Message',['onClick'=>'getMessage()'])
    ?>
</body>
</html>
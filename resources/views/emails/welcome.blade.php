<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Learning Laravel!</h2>

<div>
    Welcome to {!! $name !!} website!
    <br>
    Bienvenido
    Click en el link para comfirmar su cuenta !!!    
     <a href="http://localhost:8000/mail/Confirmacion/{!! $token !!}">Confirmar su nueva cuenta</a>
</div>

</body>
</html>
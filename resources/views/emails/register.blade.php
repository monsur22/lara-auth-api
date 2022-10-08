<!DOCTYPE html>
<html>

<head>
    <title>Email Confirmation</title>
</head>

<body>
    <h1>Hello {{$user->name}} </h1>
    <p>Please verify your email address</p>
    <a href="http://localhost:8000/email-verify/{{$remember_token}}"> Please Click Here</a>
</body>

</html>

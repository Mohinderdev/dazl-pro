<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <h2>Hello, {{$data['customer_name']}}</h2>
    <h3>Realtor {{$data['realtor_name']}}, Just registered your house and created a new account for you.</h3>
    <h4>Your Login Credentials :</h4>
    <p>Email : {{$data['email']}}</p>
    <p>Password : {{$data['password']}}</p>
  </body>
</html>

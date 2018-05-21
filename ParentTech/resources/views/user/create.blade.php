<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="/user">
      <input type="text" name="username" placeholder="usuario">
      <input type="email" name="email" placeholder="email">
      <input type="password" name="password" placeholder="contraseña">
      {{csrf_field()}}
      <input type="submit" name="submit">
    </form>

  </body>
</html>

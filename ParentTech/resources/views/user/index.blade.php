@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="/user">
      <input type="text" name="username" placeholder="usuario">
      <input type="password" name="password" placeholder="contraseña">
      <input type="email" name="email" placeholder="email">
    </form>

  </body>
</html>

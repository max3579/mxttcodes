<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <form action="/store" method="post">

        {{csrf_field()}}

        <input type="text" name="title" value="title">

        <textarea name="info" rows="8" cols="80"></textarea>

        <button type="submit" name="button">Submit</button>

      </form>
    </div>
  </body>
</html>

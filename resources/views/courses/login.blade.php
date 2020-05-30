<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div>
  <h2> welcome </h2>

  <div class="btn-group">
    <form action="" method="get" target="_blank">
        <button type="submit">admin</button>
     </form>
    </div>
     <div class="btn-group">
     <form action="{{ action('ConfigCourse@studentview') }}" method="get" target="_blank">
        <button type="submit">student</button>
     </form>
    </div>
     <div class="btn-group">
     <form action="" method="get" target="_blank">
        <button type="submit">instructor</button>
     </form>
  </div>
</div>

</body>
</html>

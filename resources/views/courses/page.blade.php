<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

<!--
    Create page to save courses with its details (instructor, room, price, parent course,
     students, and grades of course, start date, days of course, end date).
  -->
<form action="submit" method="post">
     @csrf
    <h1>  course-addition </h1>

    <div class="form-group">
<<<<<<< HEAD
=======
<input type="text" class="form-control" placeholder="course name "  name="name">
<br>  
>>>>>>> 57f7c164cb409a5fd263eb4a1290c61ce2a7da9a
<input type="text" class="form-control" placeholder="instructor name"  name="instructor">
<br>
<input type="number" class="form-control" placeholder="Price"  name="price">
<br>

<input type="text" class="form-control" placeholder="Parent cource "  name="parent_course">
<br>
<input type="number" class="form-control" placeholder="room "  name="room">
<br>


<input type="number"  placeholder="grade" class="form-control" name="grade">
<br>
<button type="submit" class="form-control" class="btn btn-primary  ">Submit</button>
</div>


</form>

</body>
</html>





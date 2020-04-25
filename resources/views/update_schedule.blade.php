<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<style type="text/css">
	   .container
	   {
	   	margin-top: 60px;
	   }
	   h1
	   {
	   	margin-top: 50px;
	   }

	</style>
</head>
<body>
 <center><h1>Update schedule</h1></center>
 <br>
 <div class="container">
 <form method="POST" action="/schedule">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Days/Times</th>
      <th scope="col"><input type="text" name="time1"></th>
      <th scope="col"><input type="text" name="time2"></th>
      <th scope="col"><input type="text" name="time3"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Sunday</th>
      <td><input type="text" name="todo1" value="{{}}"></td>
      <td><input type="text" name="todo2" value="{{}}"></td>
      <td><input type="text" name="todo3" value="{{}}"></td>
    </tr>
   <tr>
      <th scope="row">Monday</th>
      <td><input type="text" name="todo4" value="{{}}"></td>
      <td><input type="text" name="todo5" value="{{}}"></td>
      <td><input type="text" name="todo6" value="{{}}"></td>
    </tr>
    <tr>
      <th scope="row">Tuesday</th>
      <td><input type="text" name="todo7" value="{{}}"></td>
      <td><input type="text" name="todo8" value="{{}}"></td>
      <td><input type="text" name="todo9" value="{{}}"></td>
    </tr>
    <tr>
      <th scope="row">Wednesday</th>
      <td><input type="text" name="todo1" value="{{}}"></td>
      <td><input type="text" name="todo2" value="{{}}"></td>
      <td><input type="text" name="todo3" value="{{}}"></td>
    </tr>
    <tr>
      <th scope="row">Thursday</th>
      <td><input type="text" name="todo1" value="{{}}"></td>
      <td><input type="text" name="todo2" value="{{}}"></td>
      <td><input type="text" name="todo3" value="{{}}"></td>
    </tr>
    <tr>
      <th scope="row">Friday</th>
      <td><input type="text" name="todo1"></td>
      <td><input type="text" name="todo2"></td>
      <td><input type="text" name="todo3"></td>
    </tr>
     <tr>
      <th scope="row">Saturday</th>
      <td><input type="text" name="todo1"></td>
      <td><input type="text" name="todo2"></td>
      <td><input type="text" name="todo3"></td>
    </tr>
  </tbody>
</table><br>
<div class="button" style="float: right;">
 <button class="btn btn-success">Update</button>
 <button class="btn btn-secondary">Cancel</button>
</div>
</form>
</div>
</body>
</html>
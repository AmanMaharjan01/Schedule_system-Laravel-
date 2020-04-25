<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<style type="text/css">
	   .container
	   {
	   	margin-top: 50px;
	   }
	   h1
	   {
	   	margin-top: 30px;
	   }
     input
     {
      width: 99px;
      
     }
     table thead tr th
     {
      text-align: center;
     }
	</style>
</head>
<body>
 <center><h1>Schedule</h1></center>
 <div class="container">
 <form method="POST" action="/schedule">
  @csrf
  <br>
  <div style="float: right">
  <a href="" id="remove"><i class="far fa-minus-square" style="font-size: 35px; padding-bottom: 5px; color: red;"></i></a>
  <a href="#" id="addRow"><i class="far fa-plus-square" style="font-size: 35px; padding-bottom: 5px;" alt="add column"></i></a>
  </div>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Days/Times</th>
      <th>Sunday</th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
      <th>Saturday</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
          <input type="text" name="time1" style="width: 43px;" placeholder="00:00">
          <select name="period1">
            <option value="am">am</option>
            <option value="pm">pm</option>
          </select>
           - <input type="text" name="time2" style="width:47px;" placeholder=" 00:00">
           <select name="period2">
            <option value="am">am</option>
            <option value="pm">pm</option>
          </select>
      </td>
      <td><input type="text" name="todo1" placeholder="Enter activity"></td>
      <td><input type="text" name="todo2" placeholder="Enter activity"></td>
      <td><input type="text" name="todo3" placeholder="Enter activity"></td>
      <td><input type="text" name="todo4" placeholder="Enter activity"></td>
      <td><input type="text" name="todo5" placeholder="Enter activity"></td>
      <td><input type="text" name="todo6" placeholder="Enter activity"></td>
      <td><input type="text" name="todo7" placeholder="Enter activity"></td>
    </tr>    
  </tbody>
</table><br>
<div class="button" style="float: right;">
 <a href="/"><button class="btn btn-success">ADD</button></a>
 <a href="/"><button class="btn btn-secondary">Cancel</button></a>
</div>
<br><br>
<hr>
</form>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Days/Times</th>
      <th>Sunday</th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
      <th>Saturday</th>
      <th>Action</th>
    </tr>
  </thead>
  @foreach($schedules as $schedule)
  <tbody>
    <tr>
      <td>
        {{$schedule->time1}}{{$schedule->period1}} - {{$schedule->time2}}{{$schedule->period2}} 
      </td>
      <td>{{$schedule->todo1}}</td>
      <td>{{$schedule->todo2}}</td>
      <td>{{$schedule->todo3}}</td>
      <td>{{$schedule->todo4}}</td>
      <td>{{$schedule->todo5}}</td>
      <td>{{$schedule->todo6}}</td>
      <td>{{$schedule->todo7}}</td>
      <td><a href="/schedule/delete/{{$schedule->id}}"><i class="far fa-trash-alt" style="color: red;"></i></a></td>
    </tr>    
  </tbody>
  @endforeach
</table>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>CRUD Operations</title>
        <style>
      table{
        border: 1px solid red;
      }
      h2{
        text-align:center;
      }
      .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  float:right;
}




.button1 {
  background-color: white; 
  color: black; 
  border: 4px solid #4CAF50;
  border-radius: 4px;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 4px solid #008CBA;
  border-radius: 4px;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
      .button3 {
  background-color: white; 
  color: black; 
  border: 4px solid #f44336;
  border-radius: 4px;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

form.example input[type=text] {
  padding: 5px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 30%;
  background: #f1f1f1;
}
form.example button {
  float: left;
  width: 7%;
  padding: 5px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

.container{
 
  background-image: linear-gradient(to right, red , yellow);
}

        </style>
</head>
<body>
<div class="container">
<div class = "row">


<div class="col-md-12 form-group">
<h2>Employee Data</h2>
<form action="" method="get">
      <div class="form-group">
        
        <input type="search" name="search" id="" class="form-control" placeholder="Search here by name or email" aria-describedby="helped">
      </div>
      <br>
      <button class="btn btn-primary">Search</button>
     
      </form>
      <a href="{{url('/emp_data')}}"> <button class="btn btn-warning" type="button>">Reset</button></a>
<a href="{{url('/emp_data/create')}}"><button class="button button1">Add Employee</button></a>
</div>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      
      <th>USERNAME</th>
      <th>EMAIL</th>
      <th>PHONE</th>
      <th>GENDER</th>
      <th>ACTION</th>

    </tr>
    <br>
  </thead>
  <tbody>
 @if(count($emps) > 0)
    @foreach ($emps as $stu)
  
    <tr>
 
  <td>{{$stu->username}}</td>
  <td>{{$stu->email}}</td>
  <td>{{$stu->phone}}</td>
  <td>{{$stu->gender}}</td>

{{--  <td style="text-align:center"><a href="{{url('/view', $stu->id)}}"><button class="btn btn-success">View</button></a></td> --}}
  <td> 
  <a href="{{url('/emp_data/delete', $stu->id)}}"><button class="button button3">Delete</button></a>
    <a href="{{url('/emp_data/edit', $stu->id)}}"><button class="button button2">Edit</button></a>
    
    
  </td>
    </tr>
@endforeach  
@else
<tr>
  <td colspan="5">No Record Found</td>
</tr>
@endif
  </tbody>
</table>
<div class="row">
  
  {!! $emps->links() !!}

</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
 </div>
</body>
</html>
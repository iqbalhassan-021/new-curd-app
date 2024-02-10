
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  

  .button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.red{
    background-color: red;
}
img{
    height: 100px;
}
input[type="submit"]{
    cursor: pointer;
}
    </style>
    <title>CURD</title>
</head>
<body>
    <h1>{{$title}}</h1> 
    @if(session()->has('status'))
    <span>{{session('status')}}</span>
    @endif
    <table >
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>ID</th>
        <th>Image</th>
        <th>Action</th>
       
    </tr>
    @foreach($list as $data)
    <tr>
        <td>
            {{$srnum++}}
        </td>
        <td>
            {{$data->name}}
        </td>
        <td>
            {{$data->id}}
        </td>
        <td>
            <img src="{{$data->image}}" alt="Person Image">
        </td>
        <td>
            <a href="{{url('edit/'.$data->id)}}" class="button">Edit</a>
            <a href="{{url('delete/'.$data->id)}}" class="button red">Delete</a>
        </td>

    </tr>
    @endforeach
</table>   
<a href="AddPerson" class="button">{{$buttontitle}}</a>
<div>
    <form action="">
        <input type="text" id="id" name="id" placeholder="CNIC">
        <input type="submit" value="Search" >
    </form>
</div>
</body>
</html>

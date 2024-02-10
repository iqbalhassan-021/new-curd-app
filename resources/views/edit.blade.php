
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

    </style>

    <title>CURD</title>
</head>
<body>
    <h1>{{$title}}</h1> 
    <form action="{{url('update/'.$persondata->id)}}" method="post" enctype="multipart/form-data" >
        @csrf
        @method('put')
  
        <br>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required value="{{$persondata->name}}">
        </div>
        <br>
        <div>
            <label for="id">CNIC</label>
            <input type="text" id="id" name="id" placeholder="CNIC" value="{{$persondata->id}}">
        </div>
        <input type="submit" value="Update" class="button">
    </form>
</body>
</html>

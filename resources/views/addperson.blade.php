
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
    <form action="addpersons" method="post" enctype="multipart/form-data" >
        @csrf
        <div>
            <label for="name">Image</label>
            <input type="file" name="image" id="image" value="choose a image" accept="image/png, image/gif, image/jpeg">
        </div>
        <br>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required>
        </div>
        <br>
        <div>
            <label for="id">CNIC</label>
            <input type="text" id="id" name="id" placeholder="CNIC">
        </div>
        <input type="submit" value="Save Data" class="button" required>
    </form>
</body>
</html>

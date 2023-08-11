<!DOCTYPE html>
<html>
<head>
<style>
h2{
    text-align:center;
}
div{
    margin: auto;
    width: 400px;
}
input{   
    box-sizing: border-box;
    border-radius: 5px;
    width: 400px;
    height: 25px;
    margin: 0px, auto;
}
#button1{
    margin-left: 160px;
}
p{
    text-align: center;
}

</style>  
<h2>Đăng nhập</h2>
</head>
<body>

<div>
<form action="reg.php" method="post" enctype="multipart/form-data">
Avatar*
<input type="file" name="fileupload" id="fileupload"><br><br>






<label for="fname">Name*</label>
<input id = "input1" type="text" id="name" name="name"><br><br>
<label for="fname">Email*</label>
<input id = "input1" type="text" id="email" name="email"><br><br>
<label for="lname">Password*</label>
<input id = "input1" type="text" id="password" name="password"><br><br>
<label for="lname">Password verify*</label>
<input id = "input1" type="text" id="passwordv" name="passwordv"><br><br>
<p>Roles* <br>
<input type="checkbox" id="role1" name="role" value="Superadmin">
  <label for="role1"> Super admin</label><br>
  <input type="checkbox" id="role2" name="role" value="Admin">
  <label for="role2"> Admin</label><br>
</p>
<input id ="button1" type="submit" value="Save">
</form>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.relative {
    position:relative;
    left:400px;
    width:55%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>



<div class="relative">
    <h2>Add User</h2>

    <form action="dbusers.php" method="post">
        <label for="fname">First Name</label><br>
        <input type="text" id="fname" name="fname" placeholder="Your name.."><br>

        <label for="lname">Last Name</label><br>
        <input type="text" id="lname" name="lname" placeholder="Your last name.."><br>

        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" placeholder="Your email.."><br>


        <label for="img">Profile Picture</label><br>
        <input type="file" id="img" name="img" accept="image/*"><br>
    
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>

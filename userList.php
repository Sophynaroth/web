<?php
    $conn = new mysqli('localhost','root','root','niptict');
    if ($conn->connect_error){
        die('Connection Failed' . $conn->connect_error);
    }
    $sql = "SELECT first_name, last_name, email, profile_picture FROM DB_users";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #tb {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    #tb td, #tb th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #tb tr:nth-child(even){background-color: #f2f2f2;}

    #tb tr:hover {background-color: #ddd;}

    #tb th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
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
        <h2> User List</h2>

        <table id="tb">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Profile Picture</th>

    
        <?php

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { ?>

                <tr>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo '<img src="./image/'.$row['profile_picture'].'"alt="cat" style="width:100px; height:100px;">'; ?></td>
                </tr>
        <?php
            }
        }
        mysqli_close($conn);
        ?>

        </table>
    
    </div>

    
</body>
</html>
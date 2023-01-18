<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple Form</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name:<input type="text" name="name"> <br></br>
        Surname: <input type="text" name="surname"> <br></br>
        Email: <input type="text" name="email"><br></br>
        Impact Course: <input type="text" name="impacrcourse"> <br></br>
        Additional Info: <textarea  name="info" cols="50" rows="5"></textarea> <br></br>
        <input type="submit">
    </form>
    <?php
    $name=$surname=$email=$impactcourse=$info="";
    if($_SERVER['REQUEST_METHOD']=="POST") {
        $name = test_input($_POST["name"]);
        $surname = test_input($_POST["surname"]);
        $email = test_input($_POST["email"]);
        $impactcourse= test_input($_POST["impactcourse"]);
        $info = test_input($_POST["info"]);
    }
    function test_input($data) {
        $data=trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name=$_REQUEST['name'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
    
</body>
</html>
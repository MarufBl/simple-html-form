<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $email = $website = $gender = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input("name");
            $website = test_input("website");
            $email = test_input("email");
            $gender = test_input("gender");
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Name :</label><br><input type="text" name="name"><br><br>
        <label>email :</label><br><input type="text" name="email"><br><br>
        <label>website :</label><br><input type="text" name="website"><br><br>
        <label>Gender :</label><br><input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female <input type="radio" name="gender" value="Others">Others<br><br>
        <input type="submit">
    </form>

        <p style="font-size: 20px;"> <?php echo "<h3>Your Information</h3>";?></p>
        <ol>
            
            <li><p style="font-size: 20px;"><?php echo $_POST['name'];?></p></li>
            <li><p style="font-size: 20px;"><?php echo $_POST['email'];?></p></li>
            <li><p style="font-size: 20px;"><?php echo $_POST['website'];?></p></li>
            <li><p style="font-size: 20px;"><?php echo $_POST['gender'];?></p></li>
        </ol>   
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register Page</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">

            <?php
            include("php/config.php");
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $passwrd = $_POST['passwrd'];

                $verifyQuery = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
                if (mysqli_num_rows($verifyQuery) != 0) {
                    echo "
                    <div class='message'>
                        <p>This email is used, Try another Please!</p>
                    </div>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else {
                    mysqli_query($conn, "INSERT INTO users(username, email, age, passwrd) VALUES ('$username', '$email', '$age', '$passwrd')") or die("Error Occured!");
                    echo "
                    <div class='message'>
                        <p>Registration Succefully!</p>
                    </div>";
                    echo "<a href='index.php'><button class='btn'>Login Now</button>";
                }
            } else {

            ?>

                <header>Sign Up</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <input type="submit" class="btn" name="submit" value="Register" required>
                    </div>
                    <div class="links">
                        Already a member? <a href="index.php">Sign In</a>
                    </div>
                </form>
        </div>
    <?php } ?>
    </div>
</body>

</html>
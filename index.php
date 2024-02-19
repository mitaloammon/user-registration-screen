<?php
SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include("php/config.php");
            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $passwrd = mysqli_real_escape_string($conn, $_POST['passwrd']);

                $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND passwrd='$passwrd'") or die("Select Error!");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && empty($row)) {
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['age'] = $row['age'];
                    $_SESSION['id'] = $row['id'];
                } else {
                    echo "
                    <div class='message'>
                        <p>Wrong Username or Password!</p>
                    </div>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button>";
                }

                if (isset($_SESSION['valid'])) {
                    header("Location: home.php");
                }
            } else {
            ?>
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field input">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
                    <div class="links">
                        Don't have account? <a href="register.php">Sign Up Now</a>
                    </div>
                </form>
        </div>
    <?php } ?>
    </div>
</body>

</html>
<?php
SESSION_START();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Page Home</title>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p>Logo</p>
        </div>

        <div class="right-links">
            <?php
            $id = $_SESSION['id'];
            $query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
            while ($result = mysqli_fetch_assoc($query)) {
                $res_uname = $result['username'];
                $res_email = $result['email'];
                $res_age = $result['age'];
                $res_id = $result['id'];
            }

            echo "<a href='edit.php?id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php">
                <button class="btn">Logout</button>
            </a>
        </div>
    </div>

    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php $res_uname ?></b>, Welcome!</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
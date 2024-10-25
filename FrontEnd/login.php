<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Manager Log-in";
        require_once "header.inc";
    ?>
</head>
<body>
    <?php
        require_once "navbar.inc";
    ?>
    <header>
        <h1>Manager Log In</h1>
    </header>

    <main>
        <div id="login">
            <div>
                <?php
                    session_start();
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) {
                        header("location: manage.php");
                        exit;
                    }
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $username = $_POST["username"];
                        $password = $_POST["password"];
                        if (($username == "tuna0009" && $password == "110204")
                            || ($username == "hoangan14" && $password == "031105")
                            || ($username == "haidang0545" && $password == "lovesql"))
                        {
                            $_SESSION['loggedin'] = TRUE;
                            header("location: manage.php");
                            exit;
                        }
                        else {echo "<header><p>Wrong Credentials.</p></header>";}
                    }
                ?>
                <form method="post" action="#">
                    <label for="username">Username:
                        <input type="text" name="username" id="username" required><br>
                    </label>
                    <label for="password">Password:
                        <input type="password" name="password" id="password" required><br><br>
                    </label>
                    <button type="submit" class="button" id="login-button">Login</button>
                </form>
            </div>
        </div>
    </main>
    <?php require_once "footer.inc" ?>
</body>
</html>
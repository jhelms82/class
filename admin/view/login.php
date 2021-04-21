<?php
    // require_once('util/secure_conn.php');  // require a secure connection
    require_once('../../model/admin_db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <main>
            <h1>Login</h1>

            <form action="." method="post" id="login_form" class="aligned">
                <input type="hidden" name="action" value="login">

                <label>Username:</label>
                <input type="text" class="text" name="username">
                <br>

                <label>Password:</label>
                <input type="password" class="text" name="password">
                <br>


                <input type="submit" value="Login">
            </form>


        </main>
    </body>
</html>
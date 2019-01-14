<html>
    <body>
        <h2>Login</h2>
        <form method='post' action='login.php'>
            User name: <input type='text' name='log-user'><br><br>
            Email: <input type='text' name='log-email'><br><br>
            Password: <input type='password' name='log-password'><br><br>
            <input type='submit' name='submit' value='Submit'><br><br>
        </form>
        <h2>Registration</h2>
        <form method='post' action='registration.php'>
            User name: <input type='text' name='reg-user' value='kebabas'><br><br>
            Email: <input type='text' name='reg-email' value='kebabas@kebabas.lt'><br><br>
            Password: <input type='password' name='reg-password' value='kebabas'><br><br>
            Organisation: <input type='selection' name='reg-org' value='dar vienas kebabas'><br><br>
            <input type='submit' name='submit' value='Submit'>
        </form>
    </body>
</html>
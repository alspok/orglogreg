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
            <?php
            require('mysqliconn.php');
            $dbResult = getOrganisationDB('tbl_org');
            ?>
            Organisation:   <select>
                                <?php foreach($dbResult as $item): ?>
                                    <option value=''><?php echo $item; ?></option>
                                <?php endforeach; ?>
                            </select>
            <br><br>
            <input type='submit' name='submit' value='Submit'>
        </form>
    </body>
</html>
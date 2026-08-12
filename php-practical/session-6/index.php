<!DOCTYPE HTML>
<html>

<body>
    <!-- methods - post, get , put, delete, patch, options, head -->
    <form action="welcome.php" method="POST">
        <input type="hidden" name="id" value="<?php echo random_int(100, 150); ?>">
        Name: <input type="text" name="name" placeholder="Enter your name"><br>
        E-mail: <input type="email" name="email" placeholder="Enter your email"><br>
        Password: <input type="password" name="password" placeholder="Enter your password"><br>
        Age: <input type="number" name="age" placeholder="Enter your age"><br>
        <input type="submit">
    </form>

</body>

</html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>



   <div class="wrapper">
        <h2>Register</h2>
        <p>Register here</p>
        <form action="register.php" method="post">

        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>sinnumber</label>
                <input type="text" name="sinnumber" class="form-control" required>
                </div>  

            <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="fname" class="form-control" required>
            </div>    
            <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lname" class="form-control" required>
            </div>    


            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="pass" class="form-control" required>
                </div>    


            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Date of birth</label>
                <input type="date" name="birthday" class="form-control" required>

            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Register">
            </div>
            <p>Already have an account? <a href="main.php">Login</a>.</p>
</form>
</body>
</html>
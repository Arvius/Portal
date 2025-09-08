<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php 
             include("php/config.php");
             if(isset($_POST['submit'])){

                $username = $_POST['username'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $password = $_POST['password'];

                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
                if(mysqli_num_rows($verify_query) !=0){
                    echo "<div class='message'>
                    
                    <p>This email is already registered. Try another one.</p>
                    </div> <br>";
                    echo "<a href= 'register.php'> <button class= 'btn'> Go Back </button> </a>";
                }
                else{
                    mysqli_query($con,"INSERT INTO users (Username, Email, Gender, Password) VALUES ('$username','$email','$gender','$password')") or die ("Error Occured");
                     echo "<div class='message'>
                    
                    <p>Resitration Successful.</p>
                    </div> <br>";
                    echo "<a href= 'index.php'> <button class= 'btn'> Login Now </button> </a>";
                }
             }else {
            
            
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

                <div class="field">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">MALE</option>
                        <option value="female">FEMALE</option>
                    </select>
                </div>

                 <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
               

                <div class="link">
                    Already have an account? <a href="index.php">Sign In</a>
                </div>
            </form>
             <?php } ?>
    </div>
</body>
</html>
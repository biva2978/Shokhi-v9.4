<?php
$dbhost = 'localhost';  // Replace with your database host
$dbname = 'shokhi';  // Replace with your database name
$dbuser = 'root';  // Replace with your database username
$dbpass = '';  // Replace with your database password

try {
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    die();
}

// Rest of your code...
?>

<?php
//error_reporting(0);
if(isset($_POST['signup']))
{
    $fname = $_POST['name'];
    $email = $_POST['email']; 
    $password = md5($_POST['pass']); 

    $sql = "INSERT INTO tblusers(FullName, EmailId, Password) VALUES(:fname, :email, :password)";

    //echo($sql);
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();

  
        echo "<script>alert('Registration successful. Now you can login');</script>";
    
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_up</title>
    <link rel="stylesheet" href="Style/sign_up.css">
</head>
<body>
   



    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="submit" class="btn btn-block" value="Register"/>
                        </div>
                        <p> <a href="index.html">back to home</a> </p>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="Images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="sign_in.html" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>

    


    
</body>
</html>
<?php
    require 'connection.php';
    require 'validation.php';
    $shouldConnect = true;
    $alert = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(empty($_POST["pin"])){
            $pinErr = '<p style = "color:red; float:left"><b>Pin is required</b><p>';
            $shouldConnect = false;
        }
        elseif(!(test_input($_POST["pin"]))){
            $pinErr = '<p style = "color:red; float:left"><b>Please Enter a Valid Pin</b><p>';
            $shouldConnect = false;
        }
        else{
            $pin = test_input($_POST["pin"]);
        }
        if($shouldConnect){
            $chkStmnt = $pdo->prepare($check);
            $chkStmnt->execute(['pin' => $pin]);
            $res = $chkStmnt->fetchAll();
            if(count($res) === 0) $alert = '<h3 class="failed">Failed to Update. Please use the pin you
            received when you paid or <a href="register.php" class="link-to-reg"> pay here</a></h3>';
            else{
                $sql = 'UPDATE attend SET status = "used" WHERE pin = :pin';
                $stmnt = $pdo->prepare($sql);
                $stmnt->execute(['status' => used, 'pin' => $pin]);
                if($stmnt){
                    $alert = "<h3 class='successful'>Redirect Here</h3>";
                } 
            }
            
        }
        else{
            $message = "<h4 class='fail'>Fill properly and try again!</h4>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="ECX Team">

  <title>Unilag Consult Pin</title>


  <!-- Custom CSS -->
  <link rel="stylesheet" href="https://unilagconsult.com.ng/cybercamp19/wp/css/style.css">


</head>
<body>
<header class="masthead d-flex" style="height: 5rem; min-height: 5rem; padding-top: 2rem">
    <div class="container text-center my-auto">
      <h1 class="mb-1" style="font-size: 3rem">Attendance</h1>
    </div>
    <div class="overlay"></div>
  </header>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="contact-form validate-form change-form">

    <?php echo $alert ?>
    <h1 style="font-weight: 100">Enter your pin to access the form</h1>
    <p class="display-6 row justify-content-center justify-content-md-center" style="float:left; margin-left:10px;">Enter the pin you registered with</p>   
    <input type="pin" name="pin" class="input1" placeholder="Enter your pin" />
    <input type="submit" value="submit" class="contact-form-btn">
    </form>
    <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="http://instagram.com/ecx_unilag">
            <i class="icon-social-instagram"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="http://twitter.com/ecx_unilag">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; UnilagConsult 2019</p>
    </div>
  </footer>
</body>
</html>
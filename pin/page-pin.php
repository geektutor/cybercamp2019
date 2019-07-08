<?php
session_start();
/*
	Template Name: Pin Template
*/
do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
// do_action( 'genesis_meta' ); //* Uncomment this if you want child theme's style.css to load
wp_head(); //* we need this for plugins
require 'connection.php';
$alert = '';

if (!empty($_POST['pin'])){
    $pin = $_POST["pin"];
    $result = $pdo->prepare('SELECT * FROM attend WHERE pin = ?');
    $result->execute([$pin]);
    $row = $result->fetch();
    if (! $row){
        $alert = '<h1>Incorrect Pin. Pay <a href="http://paystack.com/pay/cybercamp">here</a</h1>';
    }
    else {
        $delete = $pdo->prepare('DELETE FROM attend WHERE pin = ?');
        $delete->execute([$pin]);
        $column = $delete->fetch();
        $url = 'http://unilagconsult.com.ng/cybercamp19/rform';
        header('Location: '.$url);
        ob_end_flush();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Sodiq">
  <title>Cyber Camp | Pin</title>
  <style type="text/css">
    .input-container {

    }
    .contact-form-btn {
        border: #eee 1em;
        height: 
    }
    </style>
  <link rel="stylesheet" href="https://unilagconsult.com.ng/cybercamp19/wp/css/style.css">
</head>

<body>
<header>
    <nav class="header">
      <a href="https://unilagconsult.com.ng/cybercamp19/" class="logo">
        <img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/cropped-UNILAG-CONSULT3-1.png" alt="Cyber Camp 2019" width="100px"/>
      </a>
      <input class="menu-btn" type="checkbox" id="menu-btn" />
      <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
      <ul class="menu">
        <li><a href="https://unilagconsult.com.ng/cybercamp19/#about">About Us</a></li>
        <div class="dropdown">
          <li class="dropdown-toggle">Curriculum</li>
          <div class="dropdown-container">
              <a href="https://unilagconsult.com.ng/cybercamp19/web-development#curriculum">Web Development</a>
              <a href="https://unilagconsult.com.ng/cybercamp19/app-development#curriculum">Mobile Application Development</a>
              <a href="https://unilagconsult.com.ng/cybercamp19/digital-illustration#curriculum">Digital Illustration & Animation</a>
              <a href="https://unilagconsult.com.ng/cybercamp19/robotics-engineering#curriculum">Robotics Engineering</a>
              <a href="https://unilagconsult.com.ng/cybercamp19/game-development#curriculum">Game Design & Development</a>
          </div>
        </div>
        <li><a href="https://unilagconsult.com.ng/cybercamp19/team#team">Meet The Team</a></li>
        <li><a href="https://unilagconsult.com.ng/cybercamp19/showcase#showcase">Showcase</a></li>
        <li><a href="https://unilagconsult.com.ng/cybercamp19/contact#contact">Contact</a></li>
        <li><a href="https://unilagconsult.com.ng/cybercamp19/pay" class="call-to-action">Register</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="pin">
      <h1 class="section-title">Enter <b>Pin</b></h1>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="contact-form">
        <?php echo $alert ?>
        <input type="pin" name="pin" class="call-to-action register" style="background-color: #333;" placeholder="Enter your pin" />
        <input type="submit" value="SUBMIT" style="color: #333" class="call-to-action register">
      </form>
    </section>
  </main>
  <footer>
  <div class="footer-content">
      <div class="mission">
        <h3>Unilag Consult Cyber Camp</h3>
        <p>
          Cyber Camp was born on the premise and need to capacitate young Nigerians with modern 
          technological skills in various Information Technology specialization areas and it is targeted 
          at Secondary School students between the ages of 10 and 17 years.<br>Our teaching approach is based on 
          a hands-on delivery model which is guaranteed to impact real technical knowledge on our Campers.
        </p>
        <div class="social-links">
          <a href="https://twitter.com/uccybercamp" target="_blank" title="Twitter"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/twitter-logo.png" alt="Twitter"></a>
          <a href="https://www.facebook.com/uccybercamp" target="_blank" title="Facebook"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/facebook-logo.png" alt="Facebook"></a>
          <a href="https://www.instagram.com/uccybercamp/" target="_blank" title="Instagram"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/instagram.png" alt="Instagram"></a>
          <a href="https://www.youtube.com/channel/UCsfXUlZkhFQee9pyQV7NdjA" target="_blank" title="Youtube"><img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/youtube_icon.png" alt="Youtube"></a>
        </div>
      </div>
      <div class="cyber-gif">
        <img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/ccamp19.png" alt="Cyber Camp">
      </div>
      <div class="action-buttons">
        <a href="https://unilagconsult.com.ng/contact" class="call-to-action register">Questions?</a>
      </div>
    </div>
    <div class="copyright">
      &copy; 2019. <a href="http://unilagconsult.com.ng/" target="_blank">Unilag Consult</a>
    </div>
    <?php
	wp_footer(); //* we need this for plugins
	?>
</body>

</html>
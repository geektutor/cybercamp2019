<?php
/*
	Template Name: Contact Template
*/
do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
// do_action( 'genesis_meta' ); //* Uncomment this if you want child theme's style.css to load
wp_head(); //* we need this for plugins
?>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unilagconsult.com.ng/cybercamp19/wp/css/style.css">
    <title>Cyber Camp | Contact</title>
</head>

<body>
  <header>
    <nav class="header">
      <a href="index.html" class="logo"><img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/cropped-UNILAG-CONSULT3-1.png" alt="Cyber Camp 2019" width="100px"/></a>
      <input class="menu-btn" type="checkbox" id="menu-btn" />
      <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
      <ul class="menu">
        <li><a href="https://unilagconsult.com.ng/cybercamp19/#about">About Us</a></li>
        <li><a href="https://unilagconsult.com.ng/cybercamp19/team#team">Meet The Team</a></li>
        <li><a href="https://unilagconsult.com.ng/cybercamp19/showcase#showcase">Showcase</a></li>
        <li><a href="https://unilagconsult.com.ng/cybercamp19/contact#contact">Contact</a></li>
        <li><a href="https://paystack.com/pay/cybercamp" class="call-to-action">Register</a></li>
      </ul>
    </nav>
    <div class="header-image">
      
    </div>
  </header>
  <main>
    <section id="contact">
      <h1 class="section-title">Contact <b>Us</b></h1>
      <div class="contact-container">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.0704917400703!2d3.3884233145903595!3d6.512761995289071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8cef92c57285%3A0x12fd7756f48b1939!2sUnilag+Consult!5e0!3m2!1sen!2sng!4v1561488435796!5m2!1sen!2sng" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <p class="contact-details-title">Contact Information</h2>
        <div class="contact-details">
          <div class="contact-information">
            <p>
              <b>Address:</b>Unilag Consult, Unilag Consult Building,<br>
              <b></b>Commercial/Ransome Kuti road,<br>
              <b></b>University of Lagos Campus,<br>
              <b></b>Akoka-Yaba, Lagos.
            </p>
            <p>
              <b>Email:</b><a href="mailto:cybercamp19@unilagconsult.com.ng" target="_top">cybercamp19@unilagconsult.com.ng</a>
            </p>
            <p>
              <b>Phone:</b><a href="tel:+2348036407558">0803 640 7558</a><br>
              <b></b><a href="tel:+2349098843986">0909 884 3986</a>
            </p>
            <p>
              <b>WhatsApp:</b><a href="https://api.whatsapp.com/send?phone=23408036407558">0803 640 7558</a>
            </p>
          </div>
          <?php echo do_shortcode( '[contact-form-7 id="7" title="Contact form 1"]' ); ?>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="copyright">
      &copy; 2019. <a href="">Unilag Consult</a>
    </div>
	<?php
	wp_footer(); //* we need this for plugins
	?>
</body>
</html>
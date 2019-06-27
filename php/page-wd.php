<?php
/*
	Template Name: Web Development Template
*/
do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
// do_action( 'genesis_meta' ); //* Uncomment this if you want child theme's style.css to load
wp_head(); //* we need this for plugins
?>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://unilagconsult.com.ng/cybercamp19/wp/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cyber Camp | Showcase</title>
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
        <li><a href="https://paystack.com/pay/cybercamp" class="call-to-action">Register</a></li>
      </ul>
    </nav>
    <div class="header-image">
      
    </div>
  </header>

  <main>
    <section id="curriculum">
      <h1 class="section-title">Web <b>Development Curriculum</b></h1>
      <div class="main-content">
        <div class="curriculum-content">
            <h2>Summary</h2>
            <p>This course is intended to provide beginners with the basic knowledge of website design and development. It will start out with a proper introduction to the necessary languages needed for designing websites and there will also be an accessibility (a11y) and semantic element training. There will also be a thinking workshop which shows the students the best way to find out solutions to problems their trying to fix online.</p>
            <p>Over the duration of the week, the students will apply the knowledge they were taught in class towards developing a fully functional, responsive and aesthetically pleasing portfolio page which will display their projects from the other workshops.
            The students will also be given an introductory course to working with version control using
            Git and Github and they will be taught how to deploy static websites to Git Pages.</p>
            <article>
              <b>What the students gain through this course:</b>
              <ul>
                <li>Learn how to build websites</li>
                <li>Understand the need for accessibility in websites</li>
                <li>Learn how to make websites responsive</li>
                <li>Learn how to use semantic elements</li>
                <li>Learn about version control</li>
                <li>Learn how to translate design to code</li>
                <li>Improve their eye for design by recreating projects from Dribbble</li>
                <li>Learn how to find answers to errors using Google and StackOverflow</li>
                <li>Practice manipulating existing websites using browser developer tools</li> 
              </ul>
            </article>
            <article>
              <b>Technical Takeaways:</b>
              <ul>
                <li>Semantic HTML Elements</li>
                <li>Styling with CSS</li>
                <li>Responsiveness using CSS Media Queries</li>
                <li>Manipulating DOM elements using Javascript</li>
                <li>Javascript Logic and Conditional statements</li>
                <li>Working with Git in the command console</li>
                <li>Navigating through Github</li>
                <li>Deploying static web pages</li>
              </ul>
            </article>
        </div>
        <aside class="curriculum-sidebar">
          <div class="aside-title">
            Curriculum
          </div>
          <a href="web-development.html#curriculum" class="curriculum-item active">Web Development</a>
          <a href="app-development.html#curriculum" class="curriculum-item">Mobile Application Development</a>
          <a href="digital-illustration.html#curriculum" class="curriculum-item">Digital Illustration & Animation</a>
          <a href="robotics-engineering.html#curriculum" class="curriculum-item">Robotics Engineering</a>
          <a href="game-development.html#curriculum" class="curriculum-item">Game Design & Development</a>
        </aside>
      </div>
      <div class="curriculum-schedule">
        <table>
          <tr>
            <th>Schedule</th>
            <th>Exercises</th>
          </tr>
          <tr>
            <td><b>Day 1:</b><br>Introduction to Website Design
            </td>
            <td>
              <b>Basics of HTML and CSS:</b><br>
              The students will learn all about the basics of building websites using <a href="https://en.wikipedia.org/wiki/HTML" target="_blank" rel="noopener noreferrer">HTML</a> and <a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank" rel="noopener noreferrer">CSS</a>. The following topics will be covered: semantic HTML elements, developing for accessibility, styling with CSS and building responsive websites.<br> There will also be a mini workshop that teaches students the best way to navigate the internet to find answers to any challenges they may occur while building their website. 
            </td>
          </tr>
          <tr>
            <td><b>Day 2:</b><br> Practical Web Development
            </td>
            <td>
              <b>Website Layout Design:</b><br>
              Students will start working on their portfolio.
              They will come up with a design of their own choosing or find one online to work on.
              They will be taught how to translate design to code and apply this knowledge practically.<br>
              The instructors will provide hands-on assistance to help each student get started on their chosen portfolio design.
              Students will be required to finish the basic layout for the portfolio page at home.
            </td>
          </tr>
          <tr>
            <td>
              <b>Day 3:</b><br>Version Control
            </td>
            <td>
              <b>Introduction to Git and Github:</b><br>
              Students will create <a href="https://github.com/" target="_blank" rel="noopener noreferrer">Github</a> accounts and learn how to push and pull repositories using the Git command line and the Github visual interface.
              They will push the code for their portfolio pages to a Git repository.<br>
              The instructors will help sort out errors, if any, the students may have encountered while building their portfolio pages. The students will continue working on their portfolio pages at home, and they should have a suitably complete version of the page.
            </td>
          </tr>
          <tr>
            <td><b>Day 4:</b><br>Programming
            </td>
            <td>
              <b>Working with Javascript:</b><br>
              The students will start working with the <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noopener noreferrer">Javascript</a> programming language. They’ll learn how to manipulate elements in the DOM using JavaScript. They will add functionality and transitions to their webpages using Javascript. They will also learn some programming fundamentals.
            </td>
          </tr>
          <tr>
            <td><b>Day 5:</b><br>Deploying
            </td>
            <td>
              <b>Deploying a static webpage:</b><br>
              The students will deploy their finished portfolio pages to a static website using <a href="https://pages.github.com/" target="_blank" rel="noopener noreferrer">GitHub Pages</a>.
              The instructor will help students finalize their portfolios.   
            </td>
          </tr>
        </table>
      </div>
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
        <a href="https://paystack.com/pay/cybercamp" class="call-to-action register">Register</a>
        <a href="http://unilagconsult.com.ng/cybercamp19/contact#contact" class="call-to-action contact">Not Convinced?</a>
      </div>
    </div>
    <div class="copyright">
      &copy; 2019. <a href="http://unilagconsult.com.ng/" target="_blank">Unilag Consult</a>
    </div>
  </footer>
  <?php
	wp_footer(); //* we need this for plugins
	?>
</body>
<script src="https://unilagconsult.com.ng/cybercamp19/wp/js/index.js"></script>
</html>
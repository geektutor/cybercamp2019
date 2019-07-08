<?php
/*
	Template Name: App Page Template
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
        <li><a href="https://unilagconsult.com.ng/cybercamp19/pay" class="call-to-action">Register</a></li>
      </ul>
    </nav>
    <div class="header-image">
      
    </div>
  </header>

  <main>
    <section id="curriculum">
      <h1 class="section-title">Mobile <b>Application Development Curriculum</b></h1>
      <div class="main-content">
        <div class="curriculum-content">
            <h2>Summary</h2>
            <p>Build an original app for Android or iOS by learning the fundamentals of app development; programming, event handling, debugging, design and prototyping. Create simple interfaces, manage multiple views and learn to code in Swift, Python, Java, Scratch and more.</p>
        </div>
        <aside class="curriculum-sidebar">
          <div class="aside-title">
            Curriculum
          </div>
          <a href="https://unilagconsult.com.ng/cybercamp19/web-development#curriculum" class="curriculum-item">Web Development</a>
          <a href="https://unilagconsult.com.ng/cybercamp19/app-development#curriculum" class="curriculum-item active">Mobile Application Development</a>
          <a href="https://unilagconsult.com.ng/cybercamp19/digital-illustration#curriculum" class="curriculum-item">Digital Illustration & Animation</a>
          <a href="https://unilagconsult.com.ng/cybercamp19/robotics-engineering#curriculum" class="curriculum-item">Robotics Engineering</a>
          <a href="https://unilagconsult.com.ng/cybercamp19/game-development#curriculum" class="curriculum-item">Game Design & Development</a>
        </aside>
      </div>
      <div class="curriculum-schedule">
          <table>
            <tr>
              <th>Schedule</th>
              <th>Exercises</th>
            </tr>
            <tr>
              <td>
                <b>Day 1:</b><br>Introduction to Android Mobile Application Development
              </td>
              <td class="nested-table">
                <table>
                  <tr>
                    <td>
                      <b>Introduction:</b><br>Introduction of tutors and introduction to mobile
                      application development
                    </td>
                    <td>
                      <b>Overview of mobile development:</b><br>Introduction to applications that will be built during the specialisation phase and tools to be used
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td><b>Day 1:</b><br>
                Specialisation in mobile application development
              </td>
              <td>
                Introduction to Java, printing text, variables, operators, classes and objects, data types, loops and arrays
              </td>
            </tr>
            <tr>
              <td><b>Day 2:</b><br>
                Specialisation in mobile application development
              </td>
              <td>
                Introduction to Android studio, Layouts Editing with XML, Application logic control flow with Java
              </td>
            </tr>
            <tr>
              <td><b>Day 3-5:</b><br>
                Specialisation in mobile application development
              </td>
              <td>
                Application of concepts learned and Project implementation.
                Calculator application
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
        <a href="https://unilagconsult.com.ng/cybercamp19/pay" class="call-to-action register">Register</a>
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
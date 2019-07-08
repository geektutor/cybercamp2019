<?php
/*
	Template Name: Robotics Template
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
      <h1 class="section-title">Robotics <b>Engineering Curriculum</b></h1>
      <div class="main-content">
        <div class="curriculum-content">
            <h2>Summary</h2>
            <p>This course introduces beginners to the field of Robotics; the students are progressively led from basic concepts to actual work with robots; students learn the history of robots; the work of early pioneers; the development of robots; the distinguishing features of robots such as an electronic brain, electronic sensors and mechanical extensors or arms; they get to create a mission algorithm for an actual robot and convert that to an actual program.</p>
            <p>There are video sessions and discussion sessions to engage the students; there are personal assignments to students to come up with innovative ideas and areas of application for robots; there are also class activities when students interact with the  real parts of a robot; students learn to assemble a simple robot and then send it on short missions; the emphasis is on doing; the class motto is “DO IT”.</p>
            <article>
              <b>What the students gain through this course:</b>
              <ul>
                <li>Learn the difference between Robots and other Machines</li>
                <li>Learn the History of robots: how humans fulfilled the dream for a Mechanical Man </li>
                <li>Get to know the parts that make up a Robot: Robot brain, sensors, and extensors</li>
                <li>Learn the Languages used to Program a Robot</li>
                <li>Learn Basic commands for controlling a Robot</li>
                <li>Get to work with an actual Robot</li>
                <li>Learn how to convert a Mission Algorithm to an actual Program</li>
              </ul>
            </article>
            <article>
              <b>Technical Takeaways:</b>
              <ul>
                <li>Microcontrollers</li>
                <li>Sensors</li>
                <li>Actuators and Extensors</li>
                <li>Arduino Programming Environment</li>
                <li>Basic electronic Components</li>
                <li>Simplified C Programming</li>
              </ul>
            </article>
        </div>
        <aside class="curriculum-sidebar">
          <div class="aside-title">
            Curriculum
          </div>
          <a href="https://unilagconsult.com.ng/cybercamp19/web-development#curriculum" class="curriculum-item">Web Development</a>
          <a href="https://unilagconsult.com.ng/cybercamp19/app-development#curriculum" class="curriculum-item">Mobile Application Development</a>
          <a href="https://unilagconsult.com.ng/cybercamp19/digital-illustration#curriculum" class="curriculum-item">Digital Illustration & Animation</a>
          <a href="https://unilagconsult.com.ng/cybercamp19/robotics-engineering#curriculum" class="curriculum-item active">Robotics Engineering</a>
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
              <td><b>Day 1:</b><br> History and Uses of Robots
              </td>
              <td>
                Origin of the word “Robot” and the term  “Robotics”<br>
                Human dreams of a Mechanical Man<br>
                First steps to realizing the dream<br>
                Early contributors to Robotics<br>
                Modern Robots: Fanuc, Unimate, Kuka, and other Industrial Robots<br>
                Modern Robots: Domestic Robots, Roomba and others<br>
                Exploratory Robots: Robots in Space- The Mars Rovers<br>
                Future of Robots and Robotics: Deep Learning and Artificial Intelligence<br><br>
                <b>ACTIVITY 1:</b> Watch videos of various Robots in Action<br>
                <b>ACTIVITY 2:</b> Class discussion of human activities that Robots can handle in our Environment
              </td>
            </tr>
            <tr>
              <td><b>Day 2:</b><br>Definitions of a Robot
              </td>
              <td>
                What is a Robot?<br>
                What differentiates a Robot from other Automatic Machines<br>
                Robot Brain: Microprocessors and Microcontrollers<br>
                Robot Senses: Sensors- Visual, Aural, Position, and other sensors<br>
                Robot Arms and Legs: Actuators, Extensors and Grippers<br>
                Robot Power Sources: Batteries, Mains and Solar Power<br><br>
                <b>ACTIVITY 1:</b> Hand out sample components of each part of a Robot; help class to identify, differentiate and define each component<br>
                <b>ACTIVITY 2:</b> Show use of each component in demonstrations<br>
                <b>ACTIVITY 3:</b> Class discussion of the parts and what has been learned; then a preview of next lesson<br>
              </td>
            </tr>
            <tr>
              <td>
                <b>Day 3:</b><br>Robot Brains
              </td>
              <td>
                Definition of Microprocessors and Microcontrollers<br>
                Languages of Microcontrollers<br>
                Programming a Microcontroller<br>
                The Arduino IDE: Setup and Use<br>
                The Arduino Nano: A capable Robot “Brain”<br>
                Arduino Libraries: A Leg-up in programming your Robot<br><br>
                <b>ACTIVITY 1:</b> Show students how to control the Drive Motors with simple commands<br>
                <b>ACTIVITY 2:</b> Class discussion on what has been learned and a preview of next lesson<br>
              </td>
            </tr>
            <tr>
              <td><b>Day 4:</b><br>Robot Senses and Limbs: Sensors and Actuators
              </td>
              <td>
                Definition of Sensors<br>
                Human Proximity Sensor: The PIR<br>
                Distance Sensor: The Ultrasonic Sensor<br>
                Light Sensor: The LDR(Light Dependent Resistor)<br>
                The Tilt Sensor<br><br>
                <b>ACTIVITY 1:</b> Extracting Distance Information from the Ultrasonic Sensor<br>
                <b>ACTIVITY 2:</b> Determining Human Presence from the PIR
              </td>
            </tr>
            <tr>
              <td><b>Day 5:</b><br>Putting it all together: Mission for our Robot
              </td>
              <td>
                <b>ACTIVITY 1:</b> Class Discussion to define a mission for the Robot based on its capabilities<br>
                <b>ACTIVITY 2:</b> Class writes an Algorithm for the Robot<br>
                <b>ACTIVITY 3:</b> Instructor converts Algorithm into a working code for the Robot<br>
                <b>ACTIVITY 4:</b> Field Testing the Robot and adjusting the Code<br> 
                <b>ACTIVITY 5:</b> Class defines a New Mission for Robot
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
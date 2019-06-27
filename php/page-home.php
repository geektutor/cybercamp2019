<?php
/*
	Template Name: Home Template
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
    <title>Cyber Camp</title>
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
    <div class="main-content">
      <section id="about">
        <h1 class="section-title">About <b>Unilag Consult Cyber Camp</b></h1>
        <div class="about-content">
          <p>Most Nigerian kids look forward to their long vacation from July – September of every year, it is usually a period to get away from the rigors of academics and to have lots of fun. However, this period can be optimized by ensuring that the young ones have fun while learning new skills.</p>
          <p>Unilag Consult’s Cyber Camp 2019 for teenagers is the second edition of the programme, the initiative was born on the premise and need to capacitate young Nigerians with modern technological skill-sets in selected specializations.</p>
          <p>The world as we know it today has evolved exponentially and continues to do so, especially in the area of Information Technology. A report from the United States Bureau of Statistics showed that Computer occupations made up nearly 45 percent of Science, Technology, and Engineering and Mathematics (STEM) employments in the United States in 2015. <br>While it projects employment in computer occupations to increase by 12.5 percent from 2014 to 2024, and due to its large employment size, this growth is expected to result in nearly half a million new jobs, far more than any other STEM group.</p>
          <p>We intend to adopt a project based (practical) delivery model at impacting the participants with hands-on skills.</p>
        </div>
        <h2 class="curriculum-title">
          Our <b>Curriculum</b>
        </h2>
        <section class="curriculum-container">
          <div class="curriculum-topics" id="curriculum-topics">
            <p class="tablink active" onclick="openTab(event,'wd')">Web Development</p>
            <p onclick="openTab(event, 'mad')" class="tablink">Mobile Application Development</p>
            <p onclick="openTab(event, 'dia')" class="tablink">Digital Illustration & Animation</p>
            <p onclick="openTab(event, 're')" class="tablink">Robotics Engineering</p>
            <p onclick="openTab(event,'gd')" class="tablink">Game Design & Development</p>
          </div>
          <!--Tab Content-->
          <div class="curriculum-details">
            <p class="curriculumd active" id="wd">This course is intended to provide beginners with the basic knowledge of website design and development. It will start out with a proper introduction to the necessary languages needed for designing websites and there will also be an accessibility (a11y) and semantic element training. There will also be a thinking workshop which shows the students the best way to find out solutions to problems their trying to fix online.<br>
            Over the duration of the week, the students will apply the knowledge they were taught in class towards developing a fully functional, responsive and aesthetically pleasing portfolio page which will display their projects from the other workshops.
            The students will also be given an introductory course to working with version control using
            Git and Github and they will be taught how to deploy static websites to Git Pages.</p>
            <p class="curriculumd" id="mad">Build an original app for Android or iOS by learning the fundamentals of app development; programming, event handling, debugging, design and prototyping. Create simple interfaces, manage multiple views and learn to code in Swift, Python, Java, Scratch and more.</p>
            <p class="curriculumd" id="dia">Digital illustration students build upon foundation skills in drawing, color theory, perspective, and composition to create original, effective, and audience-appropriate illustrations using various digital techniques. Assignments are based on jobs typical of those given in the professional arena such as advertising, user interface design, publishing, concept, and editorial illustration.<br>
            Digital illustration students are required to develop skills with both raster and vector based illustration software, as w   ell as computer hardware, including scanners and tablets. </p>
            <p class="curriculumd" id="re">This course introduces students to practical aspects of modern robotics. 
            The students will gain an overview of the history and development of robots; they review the work of early contributors to the field; they view videos and have class discussions about what they’ve seen. They learn about the features that differentiate a robot from other machines; these features include the “brains”, “senses” and “arms” of a robot.<br>
            They learn about how a robot “thinks”; they get to learn of the role of computers in robots and the language used to communicate with computers they get to learn how to use the Arduino programming platform and the Arduino Nano controller board.<br>
            They learn about robot arms and extensors; they learn about electric motors that allow robots to interact with their environment, to move, to carry objects; they learn to write simple commands to control the motors in the class robot.</p>
            <p class="curriculumd" id="gd">This course introduces students with no knowledge of coding or game development how games work under the hood.<br> On the first day (introductory day), the students will gain the basics of game design and discover how to make a game with no prior experience at all. The students will also learn how to use the digital creation tool ready.io to create their very first game.<br> At the end of the introductory day, the students who decide to specialise in game design and development will then get exposed to the tools professionals use in the real world to make video games. </p>
          </div>
        </section>
      </section>
      <aside>
        <div class="aside-container">
          <div class="aside-title">
            Details
          </div>
          <div class="aside-body">
            <p><b>Duration: </b>The camp will last for 6 weeks from Monday July 29 to Friday September 6, 2019, i.</p>
            <p><b>Time: </b>Training sessions will hold from 9am to 2pm on weekdays.</p>
            <p><b>Certification: </b>Participants will get a certificate of technical proficiency.</p>
            <p><b>Fee: </b>The total cost of the packa.</p>
          </div>
        </div>
        <div class="aside-container showcase">
            <div class="aside-title">
              <a href="showcase.html#showcase">Showcase</a>
            </div>
            <iframe src="https://www.youtube.com/embed/3c_EA6z4GQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </aside>
    </div>
    <section class="divider">
    </section>
    <section class="testimonials">
      <h1 class="section-title">Student <b>Testimonials</b></h1>
      <div class="testimonial_slider_2">
          <input type="radio" name="slider_2" id="slide_2_1" checked />
          <input type="radio" name="slider_2" id="slide_2_2" />
          <input type="radio" name="slider_2" id="slide_2_3" />
          <input type="radio" name="slider_2" id="slide_2_4" />
          <input type="radio" name="slider_2" id="slide_2_5" />
          <div class="boo_inner clearfix">
            <div class="slide_content">
              <div class="testimonial_2">
                <blockquote class="content_2">
                  <q>Cyber camp was a fun, enjoyable and unforgettable experience. The most unforgettable moment for me during the program was the game creation with Unity software. 
  I would like to tell other kids that Cyber Camp is a good way of learning Information Technology and it is the fastest way to get Tech knowledge. 
  I see myself specializing in Web design and development and game design and development in the future.</q>
                </blockquote>
                <div class="author_2">
                  <p class="testimonial-name">Emmanuel Dare</p><br>
                  <small>Somerset College</small>
                </div>
              </div>
            </div>
            <div class="slide_content">
              <div class="testimonial_2">
                <blockquote class="content_2">
                  <q>Cyber Camp was a very interesting experience, kids are guaranteed to enjoy themselves if they come for the training. Parents should endeavor to enroll their wards for Cyber Camp because it is a very educational program and their wards will enjoy it and learn a lot of new stuff. I enjoyed the Web design and development project most and I now know how to code. I am also getting better at Game development.</q>
                </blockquote>
                <div class="author_2">
                  <p class="testimonial-name">Oyindamola Apampa</p><br>
                  <small> Grace High School</small>
                </div>
              </div>
            </div>
            <div class="slide_content">
              <div class="testimonial_2">
                <blockquote class="content_2">
                  <q>My Cyber Camp experience was wonderful and it is unforgettable. Cyber Camp is a very interesting and useful learning initiative. The program is very good for kids and parents need to get their children involved. I had the most fun with the Web design and development module and I think I will be specializing in that area of Information Technology.</q>
                  </blockquote>
                <div class="author_2">
                    <p class="testimonial-name">Rodeeyah Falade</p><br>
                  <small>Inaayatullah International Academy</small>
                </div>
              </div>
            </div>
            <div class="slide_content">
              <div class="testimonial_2">
                <blockquote class="content_2">
                  <q>I can never forget the moment I built my first game in Cyber Camp, it was a great experience for me. I want my friends and all other kids out there to know that Cyber Camp is a very good program, it will give them ideas and broaden their knowledge about Information Technology. Because of Cyber Camp, I see myself specializing in Game design and development in the future.</q>
                </blockquote>
                <div class="author_2">
                    <p class="testimonial-name">Ebube Odunukwe</p><br>
                    <small>Igbobi College</small>
                </div>
              </div>
            </div>
            <div class="slide_content">
              <div class="testimonial_2">
                <blockquote class="content_2">
                  <q>I can never forget the moment I built my first game in Cyber Camp, it was a great experience for me. I want my friends and all other kids out there to know that Cyber Camp is a very good program, it will give them ideas and broaden their knowledge about Information Technology. Because of Cyber Camp, I see myself specializing in Game design and development in the future.</q>
                </blockquote>
                <div class="author_2">
                    <p class="testimonial-name">Ebube Odunukwe</p><br>
                    <small>Igbobi College</small>
                </div>
              </div>
            </div>
          </div>
          <div id="controls">
            <label for="slide_2_1"></label>
            <label for="slide_2_2"></label>
            <label for="slide_2_3"></label>
            <label for="slide_2_4"></label>
            <label for="slide_2_5"></label>
          </div>
      </div>
    </section>
    <section class="sponsors">
      <h1 class="section-title">Our <b>Partners</b></h1>
      <div class="sponsor-container">
        <img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/Shuttlers-1.jpeg" alt="Shuttlers" width="140px" height="100px">
        <img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/Andelas-Teen.Code-1.jpg" alt="Andela" width="140px" height="100px">
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
          <a href="https://www.youtube.com/channel/UCsfXUlZkhFQee9pyQV7NdjA" target="_blank" title="Youtube"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/youtube-logo.png" alt="Youtube"></a>
        </div>
      </div>
      <div class="cyber-gif">
        <img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/ccamp19_gf_Green-min.gif" alt="Cyber Camp">
      </div>
      <div class="action-buttons">
        <a class="call-to-action register">Register</a>
        <a href="contact.html#contact" class="call-to-action contact">Not Convinced?</a>
      </div>
    </div>
    <div class="copyright">
      &copy; 2019. <a href="http://unilagconsult.com.ng/" target="_blank">Unilag Consult</a>
    </div>
  </footer>
</body>
<script src="https://unilagconsult.com.ng/cybercamp19/wp/js/index.js"></script>
</html>
<?php
/*
	Template Name: Team Template
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
    <title>Cyber Camp | Team</title>
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
        <li><a href="index#about">About Us</a></li>
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
    <section class="team-section" id="team">
      <h1 class="section-title">Meet <b>The Team</b></h1>
      <div class="team-container">
        <div class="team-member" onclick="displayProfile(1);" id="member-1">
          <div class="team-member-image">
            <img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/JosephAvell.jpg"
              alt="Joseph Avell">
            <p class="team-member-name">Joseph Avell</p>
            <p class="team-member-role">Robotics Instructor</p>
          </div>
          <div class="team-member-profile" id="profile-1">
            <div class="social-media">
              <a href="https://www.linkedin.com/in/joseph-avell-877677131/" target="_blank" title="LinkedIn"><img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/linkedin.png" alt="LinkedIn"></a>
              <a href="https://twitter.com/joseph_lviv" target="_blank" title="Twitter"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/twitter-logo.png" alt="Twitter"></a>
              <a href="https://www.facebook.com/pg/MicrocontrollerTutorialsAndProjects" target="_blank" title="Facebook"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/facebook-logo.png" alt="Facebook"></a>
            </div>
            <p>Joseph O. Avell is a Mechatronics Innovator. Although he won a Scholarship from the Ukrainian Government for a MSc Degree in Geographical Sciences at Lviv National University, Lviv, Ukraine, his first love has always been Electronics Engineering. He also has professional E.Tech qualifications from City and Guilds of London Institute, UK.</p>
            <p>He is best known for his innovations in Electronic Security Systems Installations for various Banks in Nigeria. He is responsible for the systems setup of Alarmnet, a joint project of Innovations Nigeria Limited and Lagos State Government.</p>
            <p>Mr. Avell has more than 20 years experience in the field of automation, prototype development, security installation, solar PV Installation, equipment modification, customization and hardware prototype and embedded systems development and hardware programming. Working with Center 4Tech, a pan-African award-winning technology center based in Lagos, he has been working in the field of educational robotics and
            embedded systems; under the auspices of CKF, a Not-for-Profit NGO, he has also been mentoring teenage girls from public schools in Lagos State in the field of Science, Technology, Engineering and Mathematics (STEM) since 2016.</p>
            <p>Mr. Avell seeks to pass on his enthusiasm, his passion, for practical electronics, mechatronics, automation and robotics to the people around him. He built his first remote control device when he was still in his mid-teens and his first radio receiver about the same time.</p>
          </div>
        </div>
        <div class="team-member" onclick="displayProfile(2);" id="member-2">
          <div class="team-member-image">
            <img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/SeyeAyinla.jpg"
              alt="Seye Ayinla">
            <p class="team-member-name">Seye Ayinla</p>
            <p class="team-member-role">Game Design & Development Instructor</p>
          </div>
          <div class="team-member-profile" id="profile-2">
            <div class="social-media">
              <a href="https://www.linkedin.com/in/oluwaseye-ayinla/" target="_blank" title="LinkedIn"><img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/linkedin.png" alt="LinkedIn"></a>
              <a href="https://www.facebook.com/oluwaseyeayinla" target="_blank" title="Facebook"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/facebook-logo.png" alt="Facebook"></a>
              <a href="https://michealart3937.blogspot.com/p/homje.html" target="_blank" title="Blogspot"><img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/blogger.png" alt="Blogspot"></a>
            </div>
            <p>Oluwaseye Ayinla is a video game developer with over 5 years of experience. He holds a Masters in Games Software Development from Sheffield Hallam University, Sheffield, U.K. and is best known for developing locally relevant games (like Gidi Run, Anointed and Naija Defense) that tell the African narrative.</p>
            <p>As a video game developer, Seye has worked for two pioneer gaming studios in Nigeria (Kuluya and Gamsole) and also assisted a few indie studios and startups ship their first video game. Seye has also locally and internationally (at the game Britannia festival) trained, mentored and motivated future gaming enthusiasts wanting to break into the games industry.</p>
            <p>Aside from development, Seye runs Game Development Nigeria, a gaming website that provides news, updates and information about video games, tabletop games and esports gaming in Nigeria.</p>
            <p>Currently, Seye works as a freelance video game expert specialising in the Unity game engine with C#</p>
          </div>
        </div>
        <div class="team-member" onclick="displayProfile(3);" id="member-3">
          <div class="team-member-image">
            <img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/pp-removebg-preview.png"
              alt="Sodiq Akinjobi">
            <p class="team-member-name">Sodiq Akinjobi</p>
            <p class="team-member-role">Web Design & Development Instructor</p>
          </div>
          <div class="team-member-profile" id="profile-3">
            <div class="social-media">
              <a href="https://twitter.com/geektutor" target="_blank" title="Twitter"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/twitter-logo.png" alt="Twitter"></a>
              <a href="https://www.facebook.com/sodson11" target="_blank" title="Facebook"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/facebook-logo.png" alt="Facebook"></a>
              <a href="https://www.instagram.com/geektutor/" target="_blank" title="Instagram"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/instagram.png" alt="Instagram"></a>
            </div>
            <p>Akinjobi Sodiq is a WordPress evangelist, a software developer and a seasoned speaker, who is also a trainer
            at various tech events. He is a graduate of Mechanical Engineering from Yaba College of Technology and has a
            Systems Engineering training background from the prestigious University of Lagos.</p>
            <p>He is the Chief Geek at Peths Digital where he and his team create solutions using WordPress to
            build solutions for clients and map out strategies to win online. He is also the COO at CodeLegion, an
            initiative that teaches coding to kids, teenagers and girls.</p>
            <p>He has over seven (7) years of experience working with WordPress and has developed several websites that
            encompasses e-commerce websites, professional websites, business websites and personal websites.</p>
            <p>He is a renowned figure in the tech community and in the WordPress community, he is a community
            manager and one of the hosts of the Lagos WordPress meetup where justice is being done to anything related
            to WordPress. In the WordPress community as well, he is part of the organizers of the DoAction Hackathon
            where websites are built for deserving NGOs for free, and WordCamp Lagos, a yearly conference for bringing
            together WordPress lovers to collaborate and share knowledge.</p>
            <p>In 2018, he was nominated for the Lagos Young Entrepreneur Award where he won the award for Online
            Entrepreneur of the Year. Currently at the University of Lagos, particularly in the Faculty of Engineering,
            he is on a mission with his team to empower 700 students with skills in software development.</p>
          </div>
        </div>
        <div class="team-member" onclick="displayProfile(4);" id="member-4">
          <div class="team-member-image">
            <img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/JemimaAbu.jpg"
              alt="Jemima Abu">
            <p class="team-member-name">Jemima Abu</p>
            <p class="team-member-role">Web Design & Development Instructor</p>
          </div>
          <div class="team-member-profile" id="profile-4">
            <div class="social-media">
              <a href="https://www.linkedin.com/in/jemimaabu/" target="_blank" title="LinkedIn"><img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/linkedin.png" alt="LinkedIn"></a>
              <a href="https://medium.com/@jemimaabu" target="_blank" title="Medium"><img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/medium.png" alt="Medium"></a>
              <a href="https://github.com/jemimaabu" target="_blank" title="Github"><img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/github-logo.png" alt="Github"></a>
            </div>
            <p>Jemima Abu is a Front End Developer, who started on this particular career path three years ago. She develops interesting websites using HTML and CSS or whatever strikes her fancy in that moment. You can view some of her projects at her website <a href="http://www.jemimaabu.com" target="_blank">jemimaabu.com</a></p>
            <p>She is an avid advocate for intersectionality in technology and she regularly volunteers at organizations directed towards the increment of Women In Tech, namely GirlCode Academy and PearlsAfrica. She strongly believes women should be as prominent and recognized in the tech world as everyone else.</p>
            <p>She's well versed in the area of web development teaching and has worked at a number of organizations and bootcamps. She's an active member of the tech community and she spends most of her weekends attending meetups (a good portion of her wardrobe is made up of branded t-shirts for this very reason).</p>
            <p>She is currently pursuing a Bachelor's degree in Systems Engineering from the University of Lagos and she works remotely as a Front End Developer at Sumosoft, UK.</p>
            <p>Her previous job experiences include art teacher, yoga instructor, ballet teacher, furniture salesperson and a few odd jobs. She's also a huge nerd, slightly obsessed with cats and she can usually be found on her laptop coding or watching slice-of-life anime.</p> 
          </div>
        </div>
        <div class="team-member" onclick="displayProfile(5);" id="member-5">
          <div class="team-member-image">
            <img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/AbiodunOgunyemi.jpg"
              alt="Abiodun Ogunyemi">
            <p class="team-member-name">Abiodun Ogunyemi</p>
            <p class="team-member-role">Digital Illustration Instructor</p>
          </div>
          <div class="team-member-profile" id="profile-5">
            <div class="social-media">
              <a href="https://twitter.com/uccybercamp" target="_blank" title="Twitter"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/twitter-logo.png" alt="Twitter"></a>
              <a href="https://www.facebook.com/uccybercamp" target="_blank" title="Facebook"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/facebook-logo.png" alt="Facebook"></a>
              <a href="https://www.instagram.com/uccybercamp/" target="_blank" title="Instagram"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/instagram.png" alt="Instagram"></a>
            </div>
            <p>Ogunyemi Abiodun is an art director. He holds a Bachelor of Visual Art (Graphic Design Major) from The
            University of Lagos, Nigeria. Best known for his logo design, corporate branding and digital illustrations, with over 7 years of experience in the Advertising world.</p>
            <p>As an art director, he has worked on some big brands like: FirstBank Domestic (domestic money
            transfer campaign), 33 Lager Beer, Hi-malt drink, Ikeja Electricity Distribution and some world winning ads.</p>
            <p>Abiodun never stops searching for new styles and forms of self-expression to improve his skills. He
            believes that graphic design exists to make people’s life better or more interesting. Better, in order to
            bring more clarity, more objectivity and more meaning to all kinds of visual information. And interesting
            since it can cause enchantment, awake feelings and catch someone’s eye through a color, a shape or a
            form.</p>
            <p>He is currently with an advertising agency in Lagos, Nigeria.</p>
          </div>
        </div>
        <div class="team-member" onclick="displayProfile(6);" id="member-6">
          <div class="team-member-image">
            <img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/DapoAdesugba.jpg"
              alt="Dapo Adesugba">
            <p class="team-member-name">Dapo Adesugba</p>
            <p class="team-member-role">Digital Illustration Instructor</p>
          </div>
          <div class="team-member-profile" id="profile-6">
            <div class="social-media">
              <a href="https://www.linkedin.com/in/adesugba-adedapo-9b270a43" target="_blank" title="LinkedIn"><img src="https://unilagconsult.com.ng/cybercamp19/wp-content/uploads/2019/06/linkedin.png" alt="LinkedIn"></a>
              <a href="https://twitter.com/Collydeprime" target="_blank" title="Twitter"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/twitter-logo.png" alt="Twitter"></a>
              <a href="https://www.instagram.com/Collydeprime/" target="_blank" title="Instagram"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/instagram.png" alt="Instagram"></a>
            </div>
            <p>Adesugba Adedapo was born in the city of Lagos. He attended Bellina Nursery and Primary
            school Akoka, Parker International High School and Distinct Medal College.</p>
            <p> Dapo as a kid was heavily influenced by watching cartoons and drawing action figures with childhood friends.<br>
            Reading comics and drawing on everything including school walls was a constant habit. Later on,
            he proceeded to the University of Lagos to study creative arts on the same path to build his
            creativity.</p>
            <p>He’s an addict for hiphop music which influences his art as he currently works for
            one of Nigeria’s prestigious creative agencies.</p>
          </div>
        </div>
        <div class="team-member" onclick="displayProfile(7);" id="member-7">
          <div class="team-member-image">
            <img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/OluwaferanmiAdebayo.jpg"
              alt="Oluwaferanmi Adebayo">
            <p class="team-member-name">Oluwaferanmi Adebayo </p>
            <p class="team-member-role">Program Officer</p>
          </div>
          <div class="team-member-profile" id="profile-7">
            <div class="social-media">
              <a href="https://twitter.com/uccybercamp" target="_blank" title="Twitter"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/twitter-logo.png" alt="Twitter"></a>
              <a href="https://www.facebook.com/uccybercamp" target="_blank" title="Facebook"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/facebook-logo.png" alt="Facebook"></a>
              <a href="https://www.instagram.com/uccybercamp/" target="_blank" title="Instagram"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/instagram.png" alt="Instagram"></a>
            </div>
            <p>Oluwaferanmi completed her Bachelor and Masters degree in Media and Communication studies at
            Babcock University in 2016 and 2019 respectively.</p> 
            <p>Currently, she is a doctoral student in the same institution and has published two articles on development communication as well as lectured undergraduates of different levels.</p>
            <p>She desires to accquire and share knowledge with the next generation of scholars.</p>
          </div>
        </div>
        <div class="team-member" onclick="displayProfile(8);" id="member-8">
          <div class="team-member-image">
            <img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/GilbertOkiya-1.jpg"
              alt="Gilbert Okiya">
            <p class="team-member-name">Gilbert Okiya</p>
            <p class="team-member-role">Game Design & Development Instructor</p>
          </div>
          <div class="team-member-profile" id="profile-8">
            <div class="social-media">
              <a href="https://twitter.com/uccybercamp" target="_blank" title="Twitter"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/twitter-logo.png" alt="Twitter"></a>
              <a href="https://www.facebook.com/uccybercamp" target="_blank" title="Facebook"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/facebook-logo.png" alt="Facebook"></a>
              <a href="https://www.instagram.com/uccybercamp/" target="_blank" title="Instagram"><img src="https://unilagconsult.com.ng/cybercamp19/wp/wp-content/uploads/2019/06/instagram.png" alt="Instagram"></a>
            </div>
            <p>Gilbert is a game designer, Product Experience enhancer via Augmented Reality and founder of <a href="http://www.seesomthing.com" target="_blank">seesomthing.com</a>; a 3d printing company in a small town called Festac town, Lagos, Nigeria.</p>
            <p>He leverages on my past experiences in the graphics design, photography and cinematography industry to
            enable him bring ideas to reality or share stories that showcase and celebrates the African
            narrative.</p>
          </div>
        </div>
    </section>
    </div>
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
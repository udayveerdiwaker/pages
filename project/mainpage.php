<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sql = "INSERT INTO `subdata`(`name`, `email`, `contact`,`subject`,`message`)VALUE('$name','$email','$contact','$subject','$message')";
  mysqli_query($con, $sql);
  header("location:http://localhost/project/mainpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>My Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <meta name="robots" content="noindex, nofollow">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="icon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="web.css">
</head>

<body>

  <main class="main" class="position-relative">
    <section id="home" class="home section dark-background">
      <nav id="navbar" class="navbar navbar-default navbar-expand-lg navbar-fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler bg-info text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <div class="logo">
    <img src="logo.png" style="width: 60px; border-radius: 5px;" >
    </div> -->
          <a class="navbar-brand text-white fs-1" href="#home"><span>Shiva</span>&nbsp;<span class="text-info">Diwaker</span></a>
          <div class="collapse navbar-collapse text-secondary-emphasis justify-content-end " id="navbarTogglerDemo03">
            <ul class="navbar-nav">
              <li>
                <a class="nav active" href="#home">Home</a>
              </li>
              <li>
                <a class="nav active" href="#about">About</a>
              </li>
              <li>
                <a class="nav active" href="#skills">Skills</a>
              </li>
              <li>
                <a class="nav active" href="#resume">Resume</a>
              </li>
              <li>
                <a class="nav active" href="#contact">Contact us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container main1">
        <h2>Hi,it's<p class="text-info">Shiva</p>
        </h2>
        <!-- <div class="static-txt">I'am a
        <div class="loader"></div>

        </div> -->
        <div class="wrapper">
          <div class="static-txt">I'am </div>
          <ul class="dynamic-txts">
            <li><span>Student</span></li>
            <li><span>Developer</span></li>
            <li><span>Designer</span></li>
            <li><span>Employee</span></li>
          </ul>
        </div>
      </div>
      <div class="profile-img">
        <img src="bk.jpeg" class="img-fluid  rounded-circle">
      </div>
    </section><!--Hero section and -->
    <!--about section start-->
    <section id="about" class="about section ">
      <div class="container section-title">
        <h2 class="abo">About</h2>
        <p>My name is Shiva Diwaker, I am from Rishikesh, and I am Learning Web development Course,
          My hobbies is play Cricket Football and Swimming, and I am enjoy doing in my free time songs and, and My short-term or long-term goals My working towards in Web development.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="bk.jpeg" class="fluid" width="100%" height="100%">
          </div>
          <div class="col-lg-8 content">
            <h2> 12 th pass out &amp; Web Developer Learning.</h2>
            <p class="fst-italic py-3">
              I am 12th pass Student and i learn web development.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Name: </strong> <span> Shiva Diwaker</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday: </strong> <span> 8 jan 2005</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone: </strong> <span> +19 9720067044</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City: </strong> <span> Rishikesh Uttarakhand BHARAT</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age: </strong> <span> 18</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Study: </strong> <span> 12th Pass</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email: </strong> <span><a href="" data-cfemail="640109050d0824011c05091408014a070b09"> udayveersiwaker@2gmail.com</a></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--About section and -->

    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Skills</h2>
        <p>My Skills is HTML, Css, Bootstrap, JavaScript, PHP, and Photoshop.</p>
      </div><!-- End Section Title -->

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <div class="row skills-content skills-animation">
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill"><span>HTML</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
              </div>
            </div><!-- End Skills Item -->
            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
              </div>
            </div><!-- End Skills Item -->
            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
              </div>
            </div><!-- End Skills Item -->
          </div>
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
              </div>
            </div><!-- End Skills Item -->
            <div class="progress">
              <span class="skill"><span>Photoshop</span> <i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
              </div>
            </div><!-- End Skills Item -->
          </div>
        </div>
      </div>
    </section>
    <!--Resume Section -->
    <section id="resume" class="resume section ">
      <div class="container section-title">
        <h1><b>Resume </b></h1>
        <h3>Introduction</h3>
        <p>My name is Shiva Diwaker and I am Leaving from Rishikesh Uttarakhand and My birth is uttar pardesh 38 the district is shambhal My village is Raja ka majhola and My Education is 1 to 5 class primary school hindi medium and 6 to 8 class junior school hindi medium and 10th and 12th school punjab shing kshetra inter college rishikesh Dehradun and my school srtudy is complete in 2024-2025 and I am preparastion for BCA.</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="resume-item pb-0">
              <h4><b>Shiva Diwaker</b></h4>
              <ul>
                <li><b>Email id: </b><a href="">udayveerdiwaker@gmail.com</a></li>
                <li><b>Mobile no. :</b>+19 972067044</li>
                <li><b>Address: </b>House No. 507 Awas Vikas Colony Rishikesh (Dehradun) Uttarakhand</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4><b>Acedemic Qualification</b></h4>
              <h5>2021 - 2022</h5>
              <p>10th from Morden school Rishikesh Dehradun.</p>
              <h5>2024 - 2025</h5>
              <p>12th from Punjab shing kshetra inter college Rishikesh Dehradun.</p>
            </div>
            <div class="resume-item">
              <h4><b>My Skills</b></h4>
              <ul>
                <li>Basic knowledge of computer.</li>
                <li>Advance computer.</li>
                <li>Web Development in HTML, CSS, Bootstrap, Javascript, PHP.</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="resume item">
              <h4><b>Work Exprience</b></h4>
              <ul>
                <li>Data Entry</li>
                <li>Windows and Softwares install</li>
              </ul>
            </div>
            <div class="resume item">
              <h4><b>Personal Details</b></h4>
              <ul>
                <li><b>Father name: </b>Mr. Omveer</li>
                <li><b>Mother name: </b>Mrs. Rani</li>
                <li><b>Date of birth: </b>08-01-2005</li>
                <li><b>Gender: </b>Male</li>
                <li><b>Nationality: </b>Bhartiye</li>
                <li><b>Marital Status: </b>Unnarried</li>
                <li><b>Languages knowledge : </b>Hindi</li>
                <li><b>Hobbies : </b>Playing Cricket Football and Swimming</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> <!--Resume Section and -->

    <!--contact section start -->
    <section id="contact" class="contact section ">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact us</h2>
        <p>Contact me and I help you.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>House no.507 Awas Vikas Colony rishikesh Dehradun Uttarakhand </p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+19 9720067044</p>
                </div>
              </div>

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p><a href="#">udayveerdiwaker@gmail.com</a></p>
                </div>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.280109696426!2d78.28416936955642!3d30.090079658806705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39093e06f6a6281d%3A0x76564b96e2aa96f1!2sAvas%20Vikas%20Colony%2C%20Rishikesh%2C%20Uttarakhand%20249201!5e1!3m2!1sen!2sin!4v1724390545146!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 280px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="mainpage.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="number-field" class="pb-2">Contact</label>
                  <input type="text" minlength="0" maxlength="10" class="form-control" name="contact" id="number-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="9" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message">Something error</div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit" class="btn  " value="uploads" name="submit">Send message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact section end -->
  </main>
  <footer id="footer" class="footer position-relative">
    <a href="#home" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center active ">
      <i class="bi bi-arrow-up-short"></i></a>
    <div class="container">

    </div>
    <div class="social-links text-center">
      <a href="#" class="twitter active"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="facebook active"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/shiva__diwaker" class="instagram active"><i class="bi bi-instagram"></i></a>
      <a href="https://join.skype.com/invite/vQ7F4VgISL5h" class="google-plus active"><i class="bi bi-skype"></i></a>
    </div>
  </footer>
  <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../../assets/vendor/aos/aos.js"></script>
  <script src="../../../assets/vendor/typed.js/typed.umd.js"></script>
  <script src="../../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/js/main.js"></script>
  <style data-typed-js-cursor-css="true">
    .typed-cursor {
      opacity: 1;
    }

    .typed-cursor.typed-cursor--blink {
      animation: typedjsBlink 0.7s infinite;
      -webkit-animation: typedjsBlink 0.7s infinite;
      animation: typedjsBlink 0.7s infinite;
    }

    @keyframes typedjsBlink {
      50% {
        opacity: 0.0;
      }
    }

    @-webkit-keyframes typedjsBlink {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0.0;
      }

      100% {
        opacity: 1;
      }
    }
  </style>

  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;rayId&quot;:&quot;8b78d6e459cb54f8&quot;,&quot;serverTiming&quot;:{&quot;name&quot;:{&quot;cfL4&quot;:true}},&quot;version&quot;:&quot;2024.8.0&quot;,&quot;token&quot;:&quot;68c5ca450bae485a842ff76066d69420&quot;}" crossorigin="anonymous"></script>


</body>

</html>
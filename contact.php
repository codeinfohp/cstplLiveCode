<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
      <title>CAE Simulation Training Private Limited</title>
      <meta
         content="CAE is a global leader in training for the civil aviation, defence and security, and healthcare markets. Backed by a 70-year record of industry firsts, we continue to help define global training standards with our innovative virtual-to-live training solutions to make flying safer, maintain defence force readiness and enhance patient safety."
         name="description">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link
         href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
         rel="stylesheet">
      <link rel="stylesheet" href="css/swiper-bundle.min.css">
      <link rel="stylesheet" href="css/lightbox.min.css">
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <?php include("widgets/header.php"); ?>
      <section class="inner_banner">
         <div class="banner_wrapper">
            <div class="image_layer" style="background-image: url(images/contact_banner.jpg);"></div>
            <div class="container">
               <div class="banner_text">
                  <h2 class="banner-title">Get in Touch</h2>
               </div>
            </div>
         </div>
      </section>
      <section class="contact">
         <div class="container" data-aos="fade-up">
            <div class="address_details">
               <div class="cont-text" data-aos="fade-right">
                  <div class="heading">
                     <h2 class="h2">Noida <br> Corporate Office</h2>
                  </div>
                  <span>CAE Simulation Training Private Limited :</span>
                  <span>Plot No. 25/3, Knowledge Park - III, Gautam Buddha Nagar,</span>
                  <span> Greater Noida, U.P. 201306</span>
                  <span>cstplsales@cae.com </span>
                  <span>0120 – 6777121</span>
                  <span><strong>GSTIN:</strong> 09AAECC7113K1ZL</span>
                  <span><strong>Google Map Link:</strong> <a href="https://maps.app.goo.gl/ZFNsHdcLhKF7VZ1j7">Click Here</a> </span>
               </div>
               <div class="cont-text" data-aos="fade-right">
                  <div class="heading">
                     <h2 class="h2">Bengaluru <br> Branch Office</h2>
                  </div>
                  <span>CAE Simulation Training Private Limited :</span>
                  <span>IVC Road, Survey No. 26,27, Bandaramanahalli Village</span>
                  <span>Anneshwara Panchayat, Kasaba Hobli, Devanahalli Taluk</span>
                  <span>Bengaluru, Karnataka – 562110;</span>
                  <span>cstplsales@cae.com</span>
                  <span>080 - 42854005</span>
                  <span><strong>GSTIN:</strong> 29AAECC7113K1ZJ</span>
                  <span><strong>Google Map Link:</strong> <a href="https://maps.app.goo.gl/GpBTJfU2t1N7e6MB8">Click Here</a> </span>
               </div>
               <div class="cont-text" data-aos="fade-right">
                  <div class="heading">
                     <h2 class="h2">Gurugram <br> Branch Office</h2>
                  </div>
                  <span>CAE Simulation Training Private Limited :</span>
                  <span>Plot No. 374, Udyog Vihar, Phase -4, Gurugram,</span>
                  <span>Haryana - 122015</span>
                  <span>cstplsales@cae.com </span>
                  <span>0124 - 6137000</span>
                  <span><strong>GSTIN:</strong> 06AAECC7113K2ZQ</span>
                  <span><strong>Google Map Link:</strong> <a href="https://maps.app.goo.gl/ZcufuWNXiJ5FeY1Q8">Click Here</a> </span>
               </div>
            </div>
            
         </div>
      </section>
      <?php include("widgets/footer.php"); ?>
      <span class="scrolltop" style="display: inline;"></span>
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
      <script src="js/jquery.min.js"></script>
      <script src="js/swiper-bundle.min.js"></script>
      <script>
         var body = document.body;
         var container = document.getElementById('navBar');
         document.getElementById('toggleDiv').addEventListener('click', function (event) {
           event.preventDefault();
           if (!container.classList.contains('active')) {
             container.classList.add('active');
             body.classList.add('openMenu');
             setTimeout(function () {
               container.style.height = '100vh';
             }, 0);
           } else {
             container.style.height = '0px';
             container.addEventListener('transitionend', function () {
               container.classList.remove('active');
               body.classList.remove('openMenu')
             }, {
               once: true
             });
           }
         });
      </script>
      <script>
         if (screen.width < 960) {
           var submenus = document.querySelectorAll(".drop-down");
           for (var i = 0; i < submenus.length; i++) {
             submenus[i].addEventListener("click", function (e) {
               var last = this.closest('ul').querySelector('.active');
               if (last && last !== this) last.classList.remove("active");
               this.classList.toggle("active");
             });
           }
         }
      </script>
      <script>
         document.addEventListener('scroll', function () {
           var scrollTop = window.scrollY;
           var toggleClass = document.getElementsByTagName("body")[0];
         
           if (scrollTop >= 100) {
             toggleClass.classList.add('sticky');
           } else {
             toggleClass.classList.remove('sticky');
           }
         });
      </script>
      <script>
         $(document).ready(function () {
           $(window).scroll(function () {
             if ($(this).scrollTop() > 100) {
               $(".scrolltop").fadeIn();
             } else {
               $(".scrolltop").fadeOut();
             }
           });
           $(".scrolltop").click(function () {
             $("html, body").animate({
               scrollTop: 0
             }, 600);
             return false;
           });
         });
      </script>
   </body>
</html>
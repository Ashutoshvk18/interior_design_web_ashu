<?php
  
   include("dbconnect.php");
?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> MyInterior.com</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">



</head>

<body>
  <nav id="navbar">
    <div id="logo">
      <img src="img/logo1.png" alt="MyInterior.com">
    </div>
    <ul>
      <li class="item"><a href="#home">Home</a></li>
      <li class="item"><a href="#product-container">Our Work </a></li>
      <li class="item"><a href="#product1-container">Our Products</a></li>
      <li class="item"><a href="#why-container">Why We</a></li>
      <li class="item"><a href="#services-container">Reviews</a></li>
      <li class="item"><a href="#about-container">About Us</a></li>
      
      
      <li class="item"><a href="#contact">Contact Us</a></li>
    </ul>
  </nav>

  <section id="home">

  </section>
  <section id="quote-container">
    <h1 class="h-primary center">Which one are you? We’ll help you find your style!</h1>
    <div id="quote">
      <div class="box">
        <img src="img/quote.png" alt="">
        <h2 class="h-secondary center">Let us do what we do best – get to know you and your unique style.</h2>
        <p class="center">If you’re not happy, we’re not happy. We work tirelessly to make sure your Havenly experience
          is delightful. That’s why we offer the Havenly Happiness Guarantee.You deserve a home that is functional and
          stylish, today. Don’t put it off until the kids are older or you have more time. We can create a beautiful
          space that fits your needs so you don’t have to be embarrassed to host book club next month.We believe that
          interior design should be accessible to everyone. That’s why Havenly packages are designed to be affordable,
          and our designers are trained to work within your budget.</p>
      </div>


    </div>
  </section>


  <section id="product-container">
    <h1 class="h-primary center">Mind if we show off?</h1>
    <style>
      body {
        font-family: Arial;
        margin: 0;
      }

      * {
        box-sizing: border-box;
      }

      img {
        vertical-align: middle;
      }

      /* Position the image container (needed to position the left and right arrows) */
      .container {
        position: relative;
      }

      /* Hide the images by default */
      .mySlides {
        display: none;
      }

      /* Add a pointer when hovering over the thumbnail images */
      .cursor {
        cursor: pointer;
      }

      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      /* Container for image text */
      .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
      }

      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Six columns side by side */
      .column {
        float: left;
        width: 16.66%;
      }

      /* Add a transparency effect for thumnbail images */
      .demo {
        opacity: 0.6;
      }

      .active,
      .demo:hover {
        opacity: 1;
      }
    </style>

    <body>

      <h4 style="text-align:center">We bring you creative home design products that work together beautifully to form
        inspired living spaces. Get thoughtful home interior design elements that add real and lasting value to your
        interiors!</h4>

      <div class="container">
        <div class="mySlides">
          <div class="numbertext">1 / 6</div>
          <img src="img/img1.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 6</div>
          <img src="img/img2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 6</div>
          <img src="img/img3.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 6</div>
          <img src="img/img4.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">5 / 6</div>
          <img src="img/img5.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">6 / 6</div>
          <img src="img/img6.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <!-- <div class="caption-container">
          <p id="caption"></p>
        </div> -->

        <div class="row">

          <div class="column">
            <img class="demo cursor" src="img/img2.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor" src="img/img3.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor" src="img/img4.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
          </div>

          <div class="column">
            <img class="demo cursor" src="img/img6.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
          </div>
        </div>
      </div>

      <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) { slideIndex = 1 }
          if (n < 1) { slideIndex = slides.length }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
          captionText.innerHTML = dots[slideIndex - 1].alt;
        }
      </script>
  </section>


 

  <section id="product1-container">
    <h3 class="h-primary1 center">Just have a quick look at designs 

    </h3>
    <style>
      body {
        font-family: Verdana, sans-serif;
        margin: 0;
      }

      * {
        box-sizing: border-box;
      }

      .row>.column {
        padding: 0 8px;
      }

      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      .column {
        float: left;
        width: 25%;
      }

      /* The Modal (background) */
      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
      }

      /* Modal Content */
      .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 1200px;
      }

      /* The Close Button */
      .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
      }

      .mySlides {
        display: none;
      }

      .cursor {
        cursor: pointer;
      }

      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      img {
        margin-bottom: -4px;
      }

      .caption-container {
        text-align: center;
        background-color: black;
        padding: 2px 16px;
        color: white;
      }

      .demo {
        opacity: 0.6;
      }

      .active,
      .demo:hover {
        opacity: 1;
      }

      img.hover-shadow {
        transition: 0.3s;
      }

      .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
    </style>

    <body>

      <h2 style="text-align:center"> Welcome to our compendium of cleverly designed spaces, an insight into the latest
        trends, designers and brands <u><i>click image to know more...</i></u> </h2>

      <div class="row">
        <div class="column">
          <img src="img/homed1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="img/homed11.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="img/homed111.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="img/homed1111.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
        </div>
      </div>

      <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

          <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="img/interior1.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="img/interior2.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="img/interior3.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="img/interior4.jpg" style="width:100%">
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

          <div class="caption-container">
            <p id="caption"></p>
          </div>


          <div class="column">
            <img class="demo cursor" src="img/interior1.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor" src="img/interior2.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor" src="img/interior3.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor" src="img/interior4.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
          </div>
        </div>
      </div>

      <script>
        function openModal() {
          document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
          document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) { slideIndex = 1 }
          if (n < 1) { slideIndex = slides.length }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
          captionText.innerHTML = dots[slideIndex - 1].alt;
        }
      </script>

  </section>

  <section id="image-grid">
    <style>
      * {
        box-sizing: border-box;
      }
      
      body {
        margin: 0;
        font-family: Arial;
      }
      
      .header {
        text-align: center;
        padding: 32px;
      }
      
      .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        padding: 0 4px;
      }
      
      /* Create four equal columns that sits next to each other */
      .column {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
      }
      
      .column img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
      }
      
      /* Responsive layout - makes a two column-layout instead of four columns */
      @media screen and (max-width: 800px) {
        .column {
          -ms-flex: 50%;
          flex: 50%;
          max-width: 50%;
        }
      }
      
      /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 600px) {
        .column {
          -ms-flex: 100%;
          flex: 100%;
          max-width: 100%;
        }
      }
      </style>
      <body>
      
      <!-- Header -->
      <div class="header">
        <h2 style="text-align:center"> Find design ideas from our design gallery </h2>
        
      
      </div>
      
      <!-- Photo Grid -->
      <div class="row"> 
        <div class="column">
          <img src="img/G1.jpg" style="width:100%">
          <img src="img/G2.jpg" style="width:100%">
        
          
          
        </div>
        <div class="column">
          <img src="img/G3.jpg" style="width:100%">
          <img src="img/G4.jpg" style="width:100%">
         
          
        </div>  
        <div class="column">
          <img src="img/G5.jpg" style="width:100%">
          <img src="img/G6.jpg" style="width:100%">
        
         
        </div>
        <div class="column">
          <img src="img/G7.jpg" style="width:100%">
          <img src="img/G8.jpg" style="width:100%">
         
          
        </div>
      </div>
  </section>

  


  <section id="why-container">
    <h1 class="h-primary center">why we?</h1>
    <div id="why">
      <div class="box">
        <img src="img/w1.jpg" alt="">
        <h2 class="h-secondary center">MATERIAL WARRANTY</h2>
        <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam,
          recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
          .</p>
      </div>
      <div class="box">
        <img src="img/W3.png" alt="">
        <h2 class="h-secondary center">900+ DESIGN EXPERTS</h2>
        <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab
          dignissimos vero? </p>
      </div>
      <div class="box">
        <img src="img/w2.png" alt="">
        <h2 class="h-secondary center">6500+ HOMES COMPLETED</h2>
        <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam</p>
      </div>
    </div>
  </section>



  <section id="thought-container">
    <div id="thoughtoftheday">
      <div class="box">
        <img src="img/thought.png" alt="">
        <h2 class="h-secondary center">Get in touch with us to design your dream home</h2>
        <h5 class="h-primary1 center">Talk to our design expert and get your designs</h5>
        <p class="center">Our designers thoughtfully source a selection of products, just for you. We partner with an
          extensive list of sought-after brands, up-and-coming retailers, and local artisans to ensure that every design
          is uniquely tailored to your style, your needs and your budget.</p>
      </div>


    </div>
  </section>


  <section id="people">

    <style>
      .responsive {
        width: 100%;
        max-width: 100%;
        height: auto;
      }
    </style>

    <img src="img/people.jpg" alt="Nature" class="responsive" width="600" height="400">


  </section>










  <section id="services-container">
    <h1 class="h-primary center">Our Happy Customers </h1>
    <h2 class="h-primary1 center">HAVE A LOOK AT WHAT OUR RAVING FANS HAVE TO SAY </h2>


    <div id="services">
      <div class="box">
        <img src="img/customer1.png" alt="">
        <h2 class="h-secondary center">Got my style</h2>
        <p class="center">I worked with Casey from HCC designs and the entire process was actually enjoyable. She
          immediately "got" my style and knew what would work with my lifestyle and budget. She responded back to my
          questions and concerns
          immediately and made appropriate adjustments when necessary. I look forward to using her services in the
          future and am thrilled about my new space!”

          Erin Y.</p>
      </div>
      <div class="box">
        <img src="img/customer2.png" alt="">
        <h2 class="h-secondary center">Wonderful experience</h2>
        <p class="center">"It was a wonderful experience. Jessica, my designer, asked me questions that I would never
          ask myself ... It's such an inspiring and enjoyable space that I can't stay away from it. it was a great
          experience for me .It really has showed me what good design can do for a space.. I highly recommend this
          service to people who want a beautiful, comfortable space,</p>
      </div>
      <div class="box">
        <img src="img/customer3.png" alt="">
        <h2 class="h-secondary center">Could not have been easier</h2>
        <p class="center">“I worked with Mikayla Keating to do my living room and bedroom. The process could not have
          been easier.It was a really great experience for me and my family Mikayla was an absolute dream to work
          with—she clearly took into account my feedback throughout
          the entire process, and perfectly captured my vision for my space. . Decorist's reasonable pricing was worth
          every single
          penny.”</p>
      </div>
    </div>
  </section>


  <section id="advertisement">

    <style>
      .responsive {
        width: 100%;
        max-width: 100%;
        height: auto;
      }
    </style>

    <img src="img/advertisement.webp" alt="Nature" class="responsive" width="600" height="400">


  </section>


  <section id="uniquecontainer">
    <h1 class="h-primary center">Even Simpler Than You Think </h1>
    <h1 class="h-primary1 center">How It works? </h1>


    <div id="unique">
      <div class="box">
        <img src="img/u1.png" alt="">
        <h2 class="h-secondary center">Tell us what you need</h2>
        <p class="center">Pick a room, set your budget and tell us about your Pinterest worthy dreams – whether a full
          overhaul, or just some ideas to pull it together.</p>
      </div>
      <div class="box">
        <img src="img/u2.png" alt="">
        <h2 class="h-secondary center"> We start Kicking Off Your Project</h2>
        <p class="center">After getting matched, your designer will message you and to work on ideas before
          sending your initial concepts to rate and review.</p>
      </div>
      <div class="box">
        <img src="img/u3.png" alt="">
        <h2 class="h-secondary center">Visualize Your New Room And Shop</h2>
        <p class="center">Your designer incorporates feedback into the final room design and layout with a personalized
          list of furniture and accessories to shop all online.</p>
      </div>
    </div>
  </section>



  <section id="about-container">
    <div id="about">
      <div class="box">
        <!-- <img src="thought.webp" alt=""> -->
        <h2 class="h-secondary center"> About Us</h2>
        <p class="center"> Welcome to our compendium of cleverly designed spaces, an insight into the latest trends,
          designers and brands that are shaping the global interiors scene, and giving us a taster of things to come for
          the modern and contemporary home. Take a peek inside private residential boltholes, explore sublime showrooms
          and choose your next elegant co-working space or eatery to visit. Whether it’s mid-century modern,
          Scandinavian minimalism, or opulent Italian styles that tickle your design taste, we have scoured the globe to
          bring you contemporary ideas on to how to design the perfect modern home. we bring together functionality and
          aesthetics to provide homeowners with customised and
          efficient home designs. Our designers specialise in home interior designs and home décor, and help you create
          a personalised home to suit your lifestyle. From sophisticated living room designs to space-saving and
          clutter-free interior designs, we are here to help you find the best home decor and home design to match your
          needs and style. All our products come with a 5-year warranty along with unwavering support and maintenance
          services. Explore thousands of inspiring interior designs or get a free estimate – it's all here on
          HomeLane.com, your one stop for complete home interiors.</p>
      </div>


    </div>
  </section>



  <section id="appeal">

    <style>
      .responsive {
        width: 100%;
        max-width: 100%;
        height: auto;
      }
    </style>

    <img src="img/appeal1.PNG" alt="Nature" class="responsive" width="600" height="400">


  </section>

  <section id="startwork">

    <style>
      .responsive {
        width: 100%;
        max-width: 100%;
        height: auto;
      }
    </style>

    <img src="img/download.png" alt="Nature" class="responsive" width="600" height="400">


  </section>

  <section id="contact">
    <h1 class="h-primary center">Contact Us</h1>
    <div id="contact-box">
      <form action="action_page.php" method="post" name="user" class="container">
        <div class="form-group">
          <label for="name">Name: </label>
          <input type="text" name="name" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="email" name="mail" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="phone">Phone Number: </label>
          <input type="number" name="phoneno" id="phone" placeholder="Enter your phone">
        </div>
        <div class="form-group">
          <label for="message">Message: </label>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <button class="btn">Submit</button>
      </form>
    </div>
  </section>









  <footer>
    <div class="center">
      Copyright &copy; www.MyInerior.com. All rights reserved! Ashutosh Suryawanshi
    </div>
    
  </footer>
</body>

</html>
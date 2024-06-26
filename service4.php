<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Malaysian Sign Language</title>
    <meta charset="utf-8">
    <meta name="description" content="service4">
    <meta name="keywords" content="service4">
    <meta name="author" content="Daniel Sie, Zwe Htet Zaw, Paing Chan, Sherlyn Kok, Michael Wong">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
      rel="icon"
      href="images/love-you-gesture-svgrepo-com.svg"
      type="images/svg"
    >
    <link rel="stylesheet" href="styles/style.css" >
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    >
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    >
  </head>

  <body>
    <header>
      <?php
        include "header.php"
      ?>
    </header>

    <div class="space">
      <section>
        <!-- Section dedicated to displaying images in a slider -->
        <div id="slideshow-wrap">
          <input type="radio" id="button-1" name="controls" checked="checked" />
          <label for="button-1"></label>
          <input type="radio" id="button-2" name="controls" />
          <label for="button-2"></label>
          <input type="radio" id="button-3" name="controls" />
          <label for="button-3"></label>

          <label for="button-1" class="arrows" id="arrow-1">></label>
          <label for="button-2" class="arrows" id="arrow-2">></label>
          <label for="button-3" class="arrows" id="arrow-3">></label>
          <div id="slideshow-inner">
            <ul>
              <li id="slide1">
                <figure>
                  <img
                    src="images/st1.jpg"
                    width="650"
                    alt="sewing and alteration 1"
                    title="Alteration Services at SSD"
                  />
                  <figcaption>Sewing and Alteration 1</figcaption>
                </figure>
              </li>
              <li id="slide2">
                <figure>
                  <img
                    src="images/st2.jpg"
                    width="650"
                    alt="sewing and alteration 2"
                    title="Tailoring Services at SSD"
                  />
                  <figcaption>Sewing and Alteration 2</figcaption>
                </figure>
              </li>
              <li id="slide3">
                <figure>
                  <img
                    src="images/st3.jpg"
                    width="650"
                    alt="sewing and alteration 3"
                    title="Sewing Services at SSD"
                  />
                  <figcaption>Sewing and Alteration 3</figcaption>
                </figure>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="services_section">
        <!-- Content Section -->
        <div class="services">
          <h2 class="servicesh2">Sewing and Alteration</h2>
          <dl>
            <dt><strong> -- Sewing &amp; Alteration -- </strong></dt>
            <dd>
              As the name suggests, Sarawak Society for the Deaf provides the
              public with sewing and alteration for any fabric or garments.
            </dd>
          </dl>
        </div>
        <hr class="serviceshr" />
        <div class="service_content_1">
          <aside class="servicesaside">
            Besides the alteration services, members of SSD also handcraft
            various items such as baskets made out of <em>rattan</em>, drawings,
            postcards, keychains, cakes, cookies etc.
          </aside>

          <h3 class="servicesh3">About the Service</h3>
          <p>
            This particular service offered by SSD is also one of the favourites
            besides the BIM classes and Charity Car Wash. Most revies online
            have recommend this service to others as they mentioned that people
            can take their clothes here to be altered while waiting for their
            car to be cleaned.
          </p>

          <h3 class="servicesh3">Sewing, Alteration and Tailoring</h3>
          <p>
            &nbsp; Alteration and tailoring services here are provided by the
            experienced deaf tailors at low charges. They have been practicing
            and honing their skills for years and becoming experts in their
            field, thus meeting the different needs of society. Do drop by if
            you have any torn, undersized or oversized garments and let the
            experts do their magic!
          </p>
        </div>
      </section>
    </div>
    <a href="#" class="top">Back To Top</a>
    <footer>
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4 class="foot-h4-oh">operating hours</h4>
            <ul>
              <li>Monday to Friday 8am- 5pm</li>
              <li>Saturday 9am- 5pm</li>
              <li>Sunday Closed</li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>organization</h4>
            <ul>
              <li><a href="activities.html">activities</a></li>
              <li><a href="enquiry-service.html">enquiry</a></li>
              <li><a href="join-volunteer.html">join us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>profiles</h4>
            <ul>
              <li><a href="daniel.html">Daniel Sie</a></li>
              <li><a href="michael.html">Michael Wong</a></li>
              <li><a href="paing.html">Paing Chan</a></li>
              <li><a href="sherlyn.html">Sherlyn Kok</a></li>
              <li><a href="zwe.html">Zwe Htet Zaw</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>contact us</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/sarawaksocietyforthedeaf"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="https://www.sarawaksocietyforthedeaf.org/"
                ><i class="fa-solid fa-globe"></i
              ></a>
              <a href="https://wa.me/+6012-8118260"
                ><i class="fa-brands fa-whatsapp"></i
              ></a>
              <a href="mailto:102783895@students.swinburne.edu.my"
                ><i class="fa-solid fa-envelope"></i
              ></a>
              <br />
            </div>
            <a class="footer-essentials" href="acknowledgement.html"
              >Acknowledgements</a
            >
            <a class="footer-essentials" href="enhancement1.html"
              >Enhancements</a
            >
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>

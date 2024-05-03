<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Malaysian Sign Language</title>
    <meta charset="utf-8">
    <meta name="description" content="activities">
    <meta name="keywords" content="activities">
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

    <article id="profile_article">
      <h1>Student Profile Page</h1>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img id="profile_img" src="images/zweiscool.jpg" alt="Avatar" />
          </div>
          <div class="flip-card-back">
            <p>
              Live with intention, love with passion, lead with integrity, and
              inspire with authenticity.
            </p>
          </div>
        </div>
      </div>

      <h2>Zwe Htet Zaw</h2>
      <h3>102883659</h3>
      <h3>Computer Science</h3>

      <table id="profile_table">
        <tr>
          <th>Age</th>
          <td class="profile_tab_dash">-</td>
          <td>21</td>
        </tr>
        <tr>
          <th>Gender</th>
          <td class="profile_tab_dash">-</td>
          <td>Male</td>
        </tr>
        <tr>
          <th>Nationality</th>
          <td class="profile_tab_dash">-</td>
          <td>Myanmar</td>
        </tr>
        <tr>
          <th>Description of Hometwon</th>
          <td class="profile_tab_dash">-</td>
          <td>
            Monywa, located in Myanmar's Sagaing Region, is known for its
            cultural landmarks, including Thanboddhay Pagoda and Bodhi Tahtaung
            Pagoda. It's a serene destination rich in history, drawing visitors
            for its cultural significance.
          </td>
        </tr>
        <tr>
          <th>Great Achievement of Life</th>
          <td class="profile_tab_dash">-</td>
          <td></td>
        </tr>
        <tr>
          <th>Hobby</th>
          <td class="profile_tab_dash">-</td>
          <td>I love playing MOBA games especially Dota2</td>
        </tr>
        <tr>
          <th>Favourite Movie</th>
          <td class="profile_tab_dash">-</td>
          <td>Schindler's List</td>
        </tr>
        <tr>
          <th>Favourite Song</th>
          <td class="profile_tab_dash">-</td>
          <td>Till Kingdom Come by Coldplay</td>
        </tr>
        <tr>
          <th>Favourite Book</th>
          <td class="profile_tab_dash">-</td>
          <td></td>
        </tr>
        <tr>
          <th>Favourite Sport</th>
          <td class="profile_tab_dash">-</td>
          <td>Badminton and Soccer</td>
        </tr>
      </table>
      <div id="profile_icons">
        <a href="https://wa.me/qr/7OBO3IQIVW45L1"
          ><i class="fa-brands fa-whatsapp"></i
        ></a>
        <a href="mailto:102783659@students.swinburne.edu.my"
          ><i class="fa-solid fa-envelope"></i
        ></a>
        <a href="https://www.instagram.com/zwe_hyhy/">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>
    </article>

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
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
              <span id="youtube-link">Link to YouTube</span>
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

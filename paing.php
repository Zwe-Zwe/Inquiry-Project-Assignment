<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Malaysian Sign Language</title>
    <meta charset="utf-8">
    <meta name="description" content="paing">
    <meta name="keywords" content="paing">
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

    <article id="profile-page">
      <!--Picture and credentials section-->
      <section>
        <div id="title">Student Profile Page</div>

        <br />

        <!--padding in between sections-->
        <div id="pic">
          <span id="cpt">
            <span
              ><p>
                Hi! I'm William and currently a first-year Computer Science
                Degree student in Swinburne, Sarawak.
              </p></span
            >
          </span>
          <img src="images/paing.jpg" alt="Picture of Paing" id="pfp" />
        </div>

        <div id="credentials">
          <p id="name">Paing Chan</p>
          <p id="student_id">102783895</p>
          <p id="course">Bachelor of Computer Science</p>
        </div>
      </section>

      <br />

      <!--Information section-->
      <section>
        <div id="table">
          <table id="info_t">
            <tr class="odd paing">
              <th>Age</th>
              <td>23</td>
            </tr>

            <tr class="even">
              <th>Gender</th>
              <td>Male</td>
            </tr>

            <tr class="odd paing">
              <th>Nationality</th>
              <td>Myanmar</td>
            </tr>

            <tr class="even">
              <th>Description of Hometown</th>
              <td>
                I am from Mandalay, which is a former royal capital in Northern
                Myanmar on the Irrawaddy River.
              </td>
            </tr>

            <tr class="odd paing">
              <th>A Great Achievement</th>
              <td>
                I'm proud of my dedication to continual growth and improvement
                when faced with challenges and difficulties
              </td>
            </tr>

            <tr class="even">
              <th>Some things I enjoy!</th>
              <td>
                I enjoy watching English movies and series especially sci-fi and
                mystery genres
              </td>
            </tr>
          </table>
        </div>
      </section>

      <br /><br />

      <!--Email section-->
      <section>
        <div id="email">
          <button>
            <a href="mailto:102783895@students.swinburne.edu.my">
              Contact Me
            </a>
          </button>
        </div>
      </section>
    </article>

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

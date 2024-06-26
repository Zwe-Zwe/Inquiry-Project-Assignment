<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Malaysian Sign Language</title>
    <meta charset="utf-8">
    <meta name="description" content="volunteer">
    <meta name="keywords" content="volunteer">
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

    <section class="volunteer-body">
      <div class="volunteer-container">
        <h1>Registration for Volunteering</h1>
        <form
          class="volunteer-form"
          action="mailto:102783895@students.swinburne.edu.my"
          method="post"
        >
          <div class="user-details">
            <div class="input-box">
              <label for="first-name">First Name</label>
              <input
                id="first-name"
                name="first-name"
                type="text"
                placeholder="Enter your first name"
                maxlength="25"
                pattern="[A-Za-z]+"
                required
              />
            </div>
            <div class="input-box">
              <label for="last-name">Last Name</label>
              <input
                id="last-name"
                name="last-name"
                type="text"
                placeholder="Enter your last name"
                maxlength="25"
                pattern="[A-Za-z]+"
                required
              />
            </div>
            <div class="input-box">
              <label for="volunteer-email">Email</label>
              <input
                id="volunteer-email"
                name="email"
                type="email"
                placeholder="name@gmail.com"
                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}"
                required
              />
            </div>

            <fieldset class="address-field">
              <legend>Address Information</legend>
              <div class="input-box">
                <label for="address">Street Address</label>
                <input
                  id="address"
                  name="address"
                  type="text"
                  placeholder="Enter your street"
                  maxlength="40"
                  required
                />
              </div>
              <div class="input-box">
                <label for="city-town">City / Town</label>
                <input
                  id="city-town"
                  name="city-town"
                  type="text"
                  placeholder="Enter your city / town"
                  maxlength="20"
                  required
                />
              </div>
              <div class="input-box">
                <label for="state">State</label>
                <select id="state" name="state" required>
                  <option value="" disabled selected>Select your state</option>
                  <option value="Johor">Johor</option>
                  <option value="Kedah">Kedah</option>
                  <option value="Kelantan">Kelantan</option>
                  <option value="Melaka">Melaka</option>
                  <option value="Negeri Sembilan">Negeri Sembilan</option>
                  <option value="Pahang">Pahang</option>
                  <option value="Perak">Perak</option>
                  <option value="Perlis">Perlis</option>
                  <option value="Pulau Pinang">Pulau Pinang</option>
                  <option value="Sabah">Sabah</option>
                  <option value="Sarawak">Sarawak</option>
                  <option value="Selangor">Selangor</option>
                  <option value="Terengganu">Terengganu</option>
                  <option value="Federal Territory of Kuala Lumpur">
                    Federal Territory of Kuala Lumpur
                  </option>
                  <option value="Federal Territory of Labuan">
                    Federal Territory of Labuan
                  </option>
                  <option value="Federal Territory of Putrajaya">
                    Federal Territory of Putrajaya
                  </option>
                </select>
              </div>
              <div class="input-box">
                <label for="postal-code">Postcode</label>
                <input
                  id="postal-code"
                  name="postal-code"
                  type="text"
                  placeholder="Enter your postal-code"
                  pattern="[0-9]*"
                  required
                />
              </div>
            </fieldset>

            <div class="input-box">
              <label for="phone-number">Phone Number</label>
              <input
                id="phone-number"
                name="phone-number"
                type="tel"
                placeholder="+## ##### #####"
                pattern="\+\d{2}\d{10}"
                required
              />
            </div>
          </div>

          <div class="volunteer-details">
            <!--Default radio which will be later hidden by CSS-->
            <input type="radio" name="volunteer" id="dot-1" value="Full-time" />
            <input type="radio" name="volunteer" id="dot-2" value="Part-time" />
            <label for="volunteer-options" class="volunteer-title"
              >Which organization you wish to join as a Volunteer ?</label
            >
            <select id="volunteer-options" name="volunteer-options" required>
              <option value="" selected disabled>Select an Organization</option>
              <option value="MSL">Malaysian Sign Language (MSL)</option>
              <option value="Sarawak Society for the Deaf">
                Sarawak Society for the Deaf
              </option>
            </select>
            <div class="category">
              <label for="dot-1">
                <!--Custom Radio Buttons-->
                <span class="dot one"></span>
                <span class="volunteer">Full-time</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="volunteer">Part-time</span>
              </label>
            </div>
            <div class="full-time-details">
              <p>Working Hours:</p>
              <p>Monday To Friday => 8am - 5pm</p>
              <p>Saturday => 9am - 5pm</p>
            </div>
            <div class="part-time-details">
              <p>Working Days</p>
              <label for="monday"
                ><input
                  type="checkbox"
                  name="day"
                  id="monday"
                  value="Monday"
                />Monday</label
              >
              <label for="tuesday"
                ><input
                  type="checkbox"
                  name="day"
                  id="tuesday"
                  value="Tuesday"
                />Tuesday</label
              >
              <label for="wednesday"
                ><input
                  type="checkbox"
                  name="day"
                  id="wednesday"
                  value="Wednesday"
                />Wednesday</label
              >
              <label for="thursday"
                ><input
                  type="checkbox"
                  name="day"
                  id="thursday"
                  value="Thursday"
                />Thursday</label
              >
              <label for="friday"
                ><input
                  type="checkbox"
                  name="day"
                  id="friday"
                  value="Friday"
                />Friday</label
              >
              <label for="saturday"
                ><input
                  type="checkbox"
                  name="day"
                  id="saturday"
                  value="Saturday"
                />Saturday</label
              >
              <br />
              <p>Working Time</p>
              <label
                ><input type="radio" name="time" value="9am-11am" />9am -
                11am</label
              >
              <label
                ><input type="radio" name="time" value="11am-1pm" />11am -
                1pm</label
              >
              <label
                ><input type="radio" name="time" value="1pm-3pm" />1pm -
                3pm</label
              >
              <label
                ><input type="radio" name="time" value="3pm-5pm" />3pm -
                5pm</label
              >
            </div>
            <div class="reason-to-volunteer">
              <textarea
                id="message"
                name="message"
                rows="4"
                placeholder="Why you would like to volutnteer? "
                required
              ></textarea>
            </div>
          </div>

          <div class="buttons">
            <div class="button">
              <input type="reset" value="Reset" />
            </div>
            <div class="button">
              <input type="submit" value="Register" />
            </div>
          </div>

          <p id="required_warning">
            *All the fields are required to be filled.
          </p>
        </form>
      </div>
    </section>

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

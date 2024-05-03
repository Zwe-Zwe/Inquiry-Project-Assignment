<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Malaysian Sign Language</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Daniel Sie, Zwe Htet Zaw, Paing Chan" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      href="images/love-you-gesture-svgrepo-com.svg"
      type="images/svg"
    />
    <link rel="stylesheet" href="styles/style.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <header>
      <?php
        include "header.php"
      ?>
    </header>
    <br />

    <article id="enhancements_page">
      <section>
        <!--introduction section, only affects the top of the page-->

        <div id="top">
          <p id="title">Enhancements</p>
          <br />
          <p id="desc">
            This page is where we present all the enhancements throughout the
            project
          </p>
        </div>
      </section>

      <br />

      <section>
        <!--all enhancements, each can be changed by editing the div-->

        <div class="sect">
          <figure>
            <img
              src="images/pfp_hover.gif"
              alt="Interactive Profile Picture GIF"
              title="Interactive Profile Picture"
              class="enh1"
            />
          </figure>

          <p class="enhc_name">Interactive Profile Picture</p>
          <p class="enhc_desc">
            When the portrait on the profile page is hovered on, the image will
            darken, blur and then increase in size as well as show an
            introductory message.
            <br />
            <br />
            Pages applied: Profile Pages
            <br />
            Source:
            https://stackoverflow.com/questions/17481660/darken-background-image-on-hover
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/row_hover.gif"
              alt="Row Hover GIF"
              title="Row Hover"
              class="enh1"
            />
          </figure>

          <p class="enhc_name">Row Hover</p>
          <p class="enhc_desc">
            When a row in the table is hovered on, the row will increase in size
            with a box shadow.
            <br />
            <br />
            Pages applied: Profile Pages
            <br />
            Source:
            <br />
            https://www.w3schools.com/cssref/sel_hover.php s
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/email.gif"
              alt="Email Button GIF"
              title="Email Button"
              class="enh1"
            />
          </figure>

          <p class="enhc_name">Email Button</p>
          <p class="enhc_desc">
            At the bottom of the page, there is a button that leads users
            directly to the members' email to contact. It also changes colours
            on hover.
            <br />
            <br />
            Pages applied: Profile Pages
            <br />
            Source:
            <br />
            https://www.w3schools.com/css/css3_buttons.asp
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/paing_responsive.gif"
              alt="Responsive Layout GIF"
              title="Responsive Layout"
              class="enh1"
            />
          </figure>
          <p class="enhc_name">Responsive Pages</p>
          <p class="enhc_desc">
            The website works on all devices. The multiple columns stretch to
            fill the screen into either two columns or simply one column when
            viewed on smaller devices.
            <br />
            <br />
            Pages applied: All pages
            <br />
            Source:
            <br />
            https://www.w3schools.com/css/css3_flexbox.asp
            <br />
            https://www.tutorialspoint.com/responsive-web-design-with-media-queries-in-css
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/flip-card.gif"
              alt="Flip-Over Card GIF"
              title="Flip-Over Card"
              class="enh1"
            />
          </figure>
          <p class="enhc_name">Flip-Over Card</p>
          <p class="enhc_desc">
            Flip-over cards offer users an interactive browsing experience.
            Users can flip them to reveal further details with a "See More"
            button.
            <br />
            <br />
            Pages applied: index.html
            <br />
            Source:
            <br />
            howto_css_flip-card
            <br />
            https://www.codeguage.com/blog/flip-card-css
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/choose-options.gif"
              alt="Choose Option Display  GIF"
              title="Choose Option Display "
              class="enh1"
            />
          </figure>
          <p class="enhc_name">Choose Option Display</p>
          <p class="enhc_desc">
            Full-time or part-time volunteer positions and their dates and times
            are visible only when an organization is selected.
            <br />
            <br />
            Pages applied: join-volunteer.html
            <br />
            Source:
            <br />
            https://www.w3schools.com/css/css_display_visibility.asp
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/input-validation.gif"
              alt="Input Validation GIF"
              title="Input Validation "
              class="enh1"
            />
          </figure>
          <p class="enhc_name">Input Validation</p>
          <p class="enhc_desc">
            The input field borders dynamically change. The border colour of
            input fields is red initially, and transitions to purple when input
            is valid.
            <br />
            <br />
            Pages applied: join-volunteer.html
            <br />
            Source:
            <br />
            https://developer.mozilla.org/en-US/docs/Learn/Forms/Form_validation
            <br />
            https://www.digitalocean.com/community/tutorials/css-styling-form-input-validity
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/manual_slide.gif"
              alt="Manual Slideshow GIF"
              title="Manual Slideshow"
              class="enh1"
            />
          </figure>
          <p class="enhc_name">Manual Slideshow</p>
          <p class="enhc_desc">
            Manual image slideshow that gives the users more control over the
            page and also gives them an idea of how the services look.
            <br />
            <br />
            Pages applied: All 4 Service pages
            <br />
            Source:
            <br />
            https://www.w3schools.com/w3css/w3css_slideshow.asp
            <br />
            https://codepen.io/GhostRider/pen/nJQqje
          </p>
        </div>
        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/auto_slide.gif"
              alt="Automatic Slider GIF"
              title="Automatic Slider"
              class="enh1"
            />
          </figure>
          <p class="enhc_name">Automatic Slider</p>
          <p class="enhc_desc">
            The slider smoothly transitions between images and captions,
            automatically changing at set intervals to showcase dynamic content.
            <br />
            <br />
            Pages applied: Index.html
            <br />
            Source:
            <br />
            https://www.youtube.com/watch?v=_TWJyXtYtSg
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/youtube.gif"
              alt="Youtube Video GIF"
              title="Youtube Video"
              class="enh1"
            />
          </figure>
          <p class="enhc_name">Youtube Video</p>
          <p class="enhc_desc">
            The YouTube video embedded using an iframe allows for fullscreen
            mode and enlarges on hover, enhancing user interaction and visual
            experience.
            <br />
            <br />
            Pages applied: Index.html
            <br />
            Source:
            <br />
            https://www.w3schools.com/
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/backtotop.gif"
              alt="Back To Top GIF"
              title="Back To Top Button"
              class="enh1"
            />
          </figure>
          <br />
          <br />
          <p class="enhc_name">Back To Top Button</p>
          <p class="enhc_desc">
            The back-to-top button becomes sticky and appears at the bottom
            right corner after scrolling a certain height, ensuring convenient
            navigation for users. Pages applied: All pages
            <br />
            Source:
            <br />
            https://www.freecodecamp.org/news/css-only-back-to-top-button/
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/input_validation2.gif"
              alt="Input Validation GIF"
              title="Input Validation"
              class="enh1"
            />
          </figure>
          <p class="enhc_name">Extended Input Validation</p>
          <p class="enhc_desc">
            The YouTube video embedded using an iframe allows for fullscreen
            mode and enlarges on hover, enhancing user interaction and visual
            experience.
            <br />
            <br />
            Pages applied: enquiry-service.html
            <br />
            Source:
            <br />
            https://www.w3schools.com/
          </p>
        </div>

        <br />
        <br />

        <div class="sect">
          <figure>
            <img
              src="images/input_validation2.gif"
              alt="Input Validation GIF"
              title="Input Validation"
              class="enh1"
            />
          </figure>
          <p class="enhc_name">Extended Input Validation</p>
          <p class="enhc_desc">
            Display location of where the activity is being held, which also
            links to the google map if the users want more information about how
            to go. This can make the users who are interested feel more
            welcomed, as it's easier to find the location.
            <br />
            <br />
            Page applied - activities.html
            <br />
            Source:
            <br />
            https://blog.hubspot.com/website/how-to-embed-google-map-in-html
          </p>
        </div>

        <br />
      </section>
    </article>
  </body>
</html>

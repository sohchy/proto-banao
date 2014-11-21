<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/foundation-icons/foundation-icons.css">
    <link rel="stylesheet" href="css/proto-banao.css">

  </head>
  <body>
    <?php include_once("img/svg-icons.svg"); ?>

    <a href="#get-in-touch" class="button right contact">Get in Touch</a>
    

    <header id="top-header" class="flex-center" role="banner">
      <h1>
        <img src="img/proto-banao.svg" class="logo">
      </h1>
      <div class="intro-arrow">
        <a href="#main-content">
          <img src="img/scroll-arrow.svg" width="50px" alt="down arrow">
        </a>
      </div>
    </header>
    
    <main id="main-content">
      <div role="main">

        <div class="project" data-interchange="[project-small.html, (small)], [project.html, (medium)], [project.html, (large)]">
        </div>

        <div class="project" data-interchange="[project-small.html, (small)], [project.html, (medium)], [project.html, (large)]">
        </div>

        <div class="project" data-interchange="[project-small.html, (small)], [project.html, (medium)], [project.html, (large)]">
        </div>

        <div class="project" data-interchange="[project-small.html, (small)], [project.html, (medium)], [project.html, (large)]">
        </div>

        <form id="get-in-touch">
          <div class="row">
            <div class="small-12 large-7 small-centered columns">
                <input type="email" placeholder="Email Address" />
                <img src="img/rule.svg">
            </div>
            <div class="row">
              <div class="small-12 large-7 small-centered columns">
                <p>Let&rsquo;s get in touch.<p>
              </div>
            </div>
            <div class="row">
              <div class="small-12 large-1 small-centered columns">
                  <input type="image" src="img/icon-send.svg" border="0" alt="Submit" />
              </div>
            </div>
          </div>
        </form>
      
      </div>
    </main>

    <footer class="text-center">
      <a><svg class="icon-social"><use xlink:href="#icon-facebook" /></svg></a>
      <a><svg class="icon-social"><use xlink:href="#icon-twitter" /></svg></a>
      <a><svg class="icon-social"><use xlink:href="#icon-linkedin" /></svg></a>
      <a><svg class="icon-social"><use xlink:href="#icon-rss" /></svg></a>
    </footer>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.interchange.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script>
      var target = $(".intro-arrow");

      // hide arrow if scrolled down
      // show if scrolled back up
      $(window).scroll(function(){
        if($(window).scrollTop() > 300){
          $(target).addClass("hidden");
        }
        if($(window).scrollTop() < 300){
          $(target).removeClass("hidden");
        }
      });

      // handle scroll on click
      target.find("a").click(function(e){
        e.preventDefault();
        var anchor = $(this).attr("href");
        scrollTo(anchor);
      });

      // scroller
      function scrollTo(x){
        $("html,body").animate({scrollTop: $(x).offset().top},'slow');
      }

      $(document).ready(function(){
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });


    </script>
  </body>
</html>

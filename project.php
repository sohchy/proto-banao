<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <style type="text/css">
      body {font-family: 'Covered By Your Grace', cursive;}
      footer {background: #D1D2D4}
      .icon {width:3.5rem;height: 3.5rem;}

      .tabs dd > a, .tabs .tab-title > a {
        padding: 1rem 1rem;
        background-color: transparent;
      }
      .tabs dd > a:hover, .tabs .tab-title > a:hover {
        background-color: transparent;
        background-image: url(img/icon-hover.svg);
        background-repeat: no-repeat;
        background-size: 3.5rem;
        background-position: center;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.3.13/slick.css"/>
    <link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
  </head>
  <body>
  <?php include_once("img/svg-symbols.svg"); ?>
    <nav class="clearfix">
      <h1 class="left">Project Title</h1>
      <a href="#" class="button right">Other Projects</a>
      <a href="#" class="button right">Get in Touch</a>
    </nav>

    <nav class="clearfix">
      <i class="left">left</i>
      <div class="row center">
        <div class="large-12 columns">
          <dl class="tabs" data-tab>
            <dd class="active">
              <a href="#discovery">
                <svg class="icon"><use xlink:href="#icon-discovery" /></svg>
              </a>
            </dd>
            <dd>
              <a href="#research">
                <svg class="icon"><use xlink:href="#icon-research" /></svg>
              </a>
            </dd>
            <dd>
              <a href="#information">
                <svg class="icon"><use xlink:href="#icon-information-architecture" /></svg>
              </a>
            </dd>
            <dd>
              <a href="#messaging">
                <svg class="icon"><use xlink:href="#icon-messaging" /></svg>
              </a>
            </dd>
            <dd>
              <a href="#sketch">
                <svg class="icon"><use xlink:href="#icon-sketch" /></svg>
              </a>
            </dd>
            <dd>
              <a href="#mock-up">
                <svg class="icon"><use xlink:href="#icon-mock-up" /></svg>
              </a>
            </dd>
            <dd>
              <a href="#code">
                <svg class="icon"><use xlink:href="#icon-code" /></svg>
              </a>
            </dd>
            <dd>
              <a href="#enhance">
                <svg class="icon"><use xlink:href="#icon-enhance" /></svg>
              </a>
            </dd>
            <dd>
              <a href="#user-testing">
                <svg class="icon"><use xlink:href="#icon-user-testing" /></svg>
              </a>
            </dd>
          </dl>
        </div>
      </div>
      <i class="right">right</i>
    </nav>

    <div class="row">

      <div class="large-12 columns">

        <div class="tabs-content">
        <div class="content active" id="discovery">
          <div class="row">
            <div class=" large-6 columns">
              <h2>discovery</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="large-6 columns">
              <div class="your-class">
                <div><img src="http://placehold.it/600x600"></div>
                <div><img src="http://placehold.it/600x600"></div>
                <div><img src="http://placehold.it/600x600"></div>
              </div> 
            </div>
          </div>
        </div>
        <div class="content" id="research">
          <div class="row">
            <div class="large-6 columns">
              <h2>research</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="large-6 columns">
              <div class="your-class">
                <div><img src="http://placehold.it/600x600"></div>
                <div><img src="http://placehold.it/600x600"></div>
                <div><img src="http://placehold.it/600x600"></div>
              </div> 
            </div>
          </div>
        </div>
        <div class="content" id="information">
          <div class="row">
            <div class="large-6 columns">
              <h2>information</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="large-6 columns">
              <div class="your-class">
             
              </div> 
            </div>
          </div>
        </div>
        <div class="content" id="architecture">
          <p>architecture...</p>
        </div>
        <div class="content" id="messaging">
          <p>messaging...</p>
        </div>
        <div class="content" id="sketch">
          <p>sketch...</p>
        </div>
        <div class="content" id="mock-up">
          <p>mock-up...</p>
        </div>
        <div class="content" id="code">
          <p>code...</p>
        </div>
        <div class="content" id="enhance">
          <p>enhance...</p>
        </div>
        <div class="content" id="user-testing">
          <p>user-testing...</p>
        </div>
        </div>

      </div>

    </div>
    

    <footer class="text-center">
      facebook twitter linkedin rss
    </footer>




<svg class="icon"><use xlink:href="#fish" /></svg>

    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation/foundation.js"></script>
    <script src="js/foundation/foundation.tab.js"></script>
    <script src="js/vendor/slick/slick.min.js"></script>
    

    <script>
      $(document).foundation({
        tab: {
        callback : function (tab) {
        console.log(tab);
          }
        }
      });
    </script>
    <script>
      $(document).ready(function(){
        $('.your-class').slick({
          arrows: false,
          dots: true
        });
      });
    </script>



  </body>
</html>

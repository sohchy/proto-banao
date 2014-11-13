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
      .logo {width: 60%; margin: 20% 0 25%;}
      .project {background: #3BB9A5; padding: 40px 0; position: relative; height: auto; }
      .project:hover { transition: all .2s;}
      .project:nth-of-type(3n) {background: #FBAF3F;}
      .project:nth-of-type(3n+1) {background: #00637A;}
      .icon-social {width:1.75rem; height: 1.75rem; margin: 10px;}
      .vertical-center-later {padding-top:70px;}
      .vertical-center-later-also {padding-top: 250px;}

span {
  font-size: 8.5rem;
}
 
span.text-content span {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}

span.text-content {
  background: rgba(255,255,255,0.5);
  color: #3BB9A5;
  cursor: pointer;
  display: table;
  height: 725px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  opacity: 0;
}
 
.project:hover span.text-content {
  opacity: 1;
}
      footer {background: #D1D2D4}
    </style>
    <link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/foundation-icons/foundation-icons.css">
  </head>
  <body>
    <?php include_once("img/svg-icons.svg"); ?>

    <a href="#" class="button right">Get in Touch</a>
    <div class="row">
      <h1 class="text-center">
        <img class="logo" src="img/proto-bano.svg">
      </h1>
    </div>
    

    <div class="project">
      <div class="row">
        <div class="large-4 medium-4 columns">
          <img class="vertical-center-later" src="img/project-sketch-name.svg">
        </div>
        <div class="large-2 large-offset-1 medium-2 medium-offset-1 columns">
          <img class="vertical-center-later-also" src="img/arrow.svg">
        </div>
        <div class="large-4 medium-4 columns">
          <img src="img/project-preview-name.svg">
        </div>
      </div>
      <span class="text-content"><span>Project Name</span></span>
    </div>


    <div class="project">
      <div class="row">
        <div class="large-4 columns">
          sketch
        </div>
        <div class="large-4 columns">
          rough
        </div>
        <div class="large-4 columns">
          finished
        </div>
      </div>
    </div>

    <div class="project">
      <div class="row">
        <div class="large-4 columns">
          sketch
        </div>
        <div class="large-4 columns">
          rough
        </div>
        <div class="large-4 columns">
          finished
        </div>
      </div>
    </div>

        <div class="project">
      <div class="row">
        <div class="large-4 columns">
          sketch
        </div>
        <div class="large-4 columns">
          rough
        </div>
        <div class="large-4 columns">
          finished
        </div>
      </div>
    </div>

    <div class="project">
      <div class="row">
        <div class="large-4 columns">
          sketch
        </div>
        <div class="large-4 columns">
          rough
        </div>
        <div class="large-4 columns">
          finished
        </div>
      </div>
    </div>

    <div class="project">
      <div class="row">
        <div class="large-4 columns">
          sketch
        </div>
        <div class="large-4 columns">
          rough
        </div>
        <div class="large-4 columns">
          finished
        </div>
      </div>
    </div>

    <form>
      <div class="row">
        <div class="large-12 columns">
          <label>
            <input type="text" placeholder="Email Address" />
          </label>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label>
              <textarea placeholder="small-12.columns"></textarea>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label>
              <input type="submit" value="send">
            </label>
          </div>
        </div>
      </div>
    </form>
    

    <footer class="text-center">
      <svg class="icon-social"><use xlink:href="#icon-facebook" /></svg>
      <svg class="icon-social"><use xlink:href="#icon-twitter" /></svg>
      <svg class="icon-social"><use xlink:href="#icon-linkedin" /></svg>
      <svg class="icon-social"><use xlink:href="#icon-rss" /></svg>
    </footer>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

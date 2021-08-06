  <?php
      require_once("functions/function.php");
      get_header();
  ?>

    <div class="topnav"  id="myTopnav" >
      <div class="logo">
        <img src="img/logo3.jpg" alt="NEUBAA" height="100" width="400">
      </div>
      <div class="navi">
        <a href="#home" class="active">Home</a>
        <a href="about.php">About</a>
        <a href="gallery.php">Gallery</a>
        <a href="career.php">Career</a>
        <a href="committee.php">Committee</a>
        <a href="contact.php">Contact</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
      </div>
      <script>
      function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += "responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
    </div>

  <!--end navigation-->

  <!--banner-->
  <div class="carousel fade-carousel slide" data-ride="carousel" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#bs-carousel" data-slide-to="1"></li>
      <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"></div>
      </div>
      <div class="item slides">
        <div class="slide-2"></div>
      </div>
      <div class="item slides">
        <div class="slide-3"></div>
      </div>
    </div>
  </div>
  <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <!--end banner-->

  <div class="row">

    <div class="main">
      <h1>Alumni Interview</h1>
      <h5>Title description, Jan, 2020</h5>
      <div class="fakeimg" style="height:300px;">
      <div style="height:300px; width:600px; text-align:center;"><img src="img/ayonalumni.jpg" alt="NEUBAA" ></div>
    </div>
      <h2>Ayon Dey</h2>
      <p>The CSE alumni family is huge. They are spread out across the world, holding positions of eminence.
        The alumni events, networking get-togethers, on-campus activities, and sporting events, career advisory services,
        and social media resources available through the Alumni Association
        to help you be as successful as you can possibly be. After all, your success is our success.</p>
      <br>
    </div>
    <div class="side">
      <h2>About Us</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>More Text</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <div class="fakeimg" style="height:60px;">Image</div><br>
      <div class="fakeimg" style="height:60px;">Image</div><br>
      <div class="fakeimg" style="height:60px;">Image</div>
    </div>
  </div>

  <?php
  get_footer();
  ?>

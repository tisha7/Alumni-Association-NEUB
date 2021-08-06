<?php
require_once("functions/function.php");
get_header();
?>

<div class="topnav"  id="myTopnav" >
  <div class="logo">
    <a href="index.php"><img src="img/logo3.jpg" alt="NEUBAA" height="100" width="400"></a>
  </div>
  <div class="navi">
    <a href="index.php">Home</a>
    <a href="about.php" class="active">About</a>
    <a href="gallery.php">Gallery</a>
    <a href="committee.php">Committee</a>
    <a href="members.php">Memberlist</a>
    <a href="career.php">Career</a>
    <a href="job.php">Job Corner</a>
    <a href="Events.php">Events</a>
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
<div class="about-ban" style="height:450px;">

  <div class="about-ban-text">About Us</div>



</div>

<!--end banner-->

<!--about-->
<div class="row">
  <div class="about">
    <p>As North East University Bangladesh grown, both from faculty members, alumni and current students, there were demands for
      a platform for collaboration based on common pride of NEUB. Based on this in 2012, there will be a grand reunion
      on the occasion of celebration of silver jubilee of NEUB. During the reunion, Alumni Association NEUB decided as majority of alumnus and students were present. Therefore the first executive
      committee for the Alumni Association NEUB was formed based on nomination process which was unanimously agreed upon.
      Mr.X from first batch has been appointed as the president and Mr. Y has been
      appointed as the general secretary of the first executive committee, which has started working for 2020-2021 term.The
      purpose of our alumni association is to foster a spirit of loyalty and to promote the general welfare of
      NEUB. This association exist to support the department's goals, and to strengthen the ties between alumni and the current students.
    </p>
  </div>
</div>

<div class="about-row">
  <div class="about-main">
    <div class="fakeimg" style="height:500px;">
      <div style="height:400px; width:620px; padding:10px 0px;"><img src="img/about-ban.jpg" alt="NEUBAA" ></div>
    </div>
  </div>

  <div class="about-side">
    <h2>OUR PROGRAM AND SREVICES</h2>
    <br>
    <h3>Social</h3>
    <p>
      To constitute a welfare fund for national disaster and to work for the needs of the country and society and undertake initiatives of public welfare in the sense of funding.
      To co-operate with similar organizations of national and international level.
      To undertake other activities to achieve the above objectives.
    </p>
    <br>
    <h3>Professional</h3>
    <p>
      Organize assembly, seminar, workshop, exhibition, reunion and travel by association.
      To cooperate as much as possible on education and job related issues.
    </p>
    <br>
    <h3>Intellectual</h3>
    <p>
      To constitute a welfare fund for national disaster and to work for the needs of the country and society and undertake initiatives of public welfare in the sense of funding.
      To co-operate with similar organizations of national and international level.
      To undertake other activities to achieve the above objectives.
    </p>
  </div>
</div>

<?php
get_footer();
?>

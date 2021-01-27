<?php
  get_header();
?>

<body onresize="resizeFunction()">
  <!-- Page Content -->
  <div class="page-content-wrapper">
    <!-- Body Section 1 -->
    <div class="body-wrapper">
      <!-- About Adam -->
      <div id="main-col-1" flipWidth="734" flipBool="false" class="columns flippable vc-anchor wt-500" style="text-align: center;">
        <div id="img-cont-1" class="column flip-l2r is-half-width">
          <div class="bg-is-dark-red">
            <div class="vc-target" style="height: auto; width: 100%; padding: 2.5%;">
              <img src="wp-content/themes/wp-ebbin/assets/images/EbbinSquare.jpg" alt="Adam Ebbin smiling at camera">
            </div>
          </div>
        </div>
        <div id="txt-cont-1" class="column flip-r2l is-half-width">
          <div id="main-txt-1" class="text-container center-text-vert">
            <h1>ABOUT ADAM</h1>
            <div class="horizontal-bar bg-is-black"></div>
            <h3>A native of Commack, New York, Adam has resided in Alexandria since 1989,
              serving as State Senator for Alexandria, Arlington, and Fairfax since 2012.
              As a leader in the General Assembly, Adam has fought to advance
              progressive priorities, including preventing gun violence, making
              it easier to vote, and fighting for equality for all Virginians.</h3>
              <a class="font-is-black wt-900" href=""><u>LEARN MORE →</u></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Priorities -->
    <div id="hero-grid-section" style="margin: 5% 0; text-align: center;">
      <h1 class="font-is-black wt-500">PRIORITIES</h1>
      <div class="horizontal-bar bg-is-black mb-20"></div>
      <div class="grid font-is-white wt-700">
        <a id="img-cont-4" class="vc-anchor is-half-width img-hover-zoom img-with-overlay" href="">
          <div id="main-txt-4" class="center-text-vert overlay-txt" style="text-shadow: .4vw .4vw #007A75; font-size: 5vw;">
            LGBTQ+ RIGHTS
          </div>
          <div style="background: #00AD95" class="overlay"></div>
          <img class="vc-target" src="wp-content/themes/wp-ebbin/assets/images/EbbinVVA.jpeg" alt="Adam speaking at an event for the Virginia Values Act">
        </a>
        <a id="img-cont-5" class="vc-anchor is-half-width img-hover-zoom img-with-overlay" href="">
          <div id="main-txt-5" class="center-text-vert overlay-txt" style="text-shadow: .4vw .4vw #8B004E; font-size: 5vw;">
            ECONOMY
          </div>
          <div style="background: #BC0061" class="overlay"></div>
          <img class="vc-target" src="wp-content/themes/wp-ebbin/assets/images/OldTown.jpg" alt="A view of King Street in Old Town, Alexandria at sunset">
        </a>
        <a id="img-cont-6" class="vc-anchor is-half-width img-hover-zoom img-with-overlay" href="">
          <div id="main-txt-6" class="center-text-vert overlay-txt" style="text-shadow: .4vw .4vw #AF9200; font-size: 5vw;">
            ENVIRONMENT
          </div>
          <div style="background: #F3F300" class="overlay"></div>
          <img class="vc-target" src="wp-content/themes/wp-ebbin/assets/images/Parkway.jpg" alt="An image of a bright red-orange tree on the George Washington Memorial Parkway">
        </a>
        <a id="img-cont-7" class="vc-anchor is-half-width img-hover-zoom img-with-overlay" href="">
          <div id="main-txt-7" class="center-text-vert overlay-txt" style="text-shadow: .4vw .4vw #7A009D; font-size: 5vw;">
            GUN REFORM
          </div>
          <div style="background: #AA00D6" class="overlay"></div>
          <img class="vc-target" src="wp-content/themes/wp-ebbin/assets/images/GunReform.jpg" alt="Adam speaking at an event for gun reform">
        </a>
      </div>
    </div>

    <!-- Body Section 2 -->
    <div class="body-wrapper">
      <!-- Progressive Champion -->
      <div class="columns vc-anchor wt-500" style="text-align: center;">
        <div id="img-cont-2" class="column is-half-width">
          <div class="bg-is-dark-red">
            <div class="vc-target" style="height: auto; width: 100%; padding: 2.5%;">
              <img src="wp-content/themes/wp-ebbin/assets/images/EbbinSquare2.jpg" alt="Adam Ebbin speaking into microphone">
            </div>
          </div>
        </div>
        <div id="txt-cont-2" class="column is-half-width">
          <div id="main-txt-2" class="text-container center-text-vert">
            <h1>PROGRESSIVE CHAMPION</h1>
            <div class="horizontal-bar bg-is-black"></div>
            <h3>During his time in the General Assembly, Adam has passed numerous pieces of landmark
            legislation, banning discrimination in employment, housing, and public accommodations
            on the basis of sexual orientation or gender identity, decriminalizing marijuana, and creating
            a Public Defender office in Arlington County.</h3>
            <a class="font-is-black wt-900" href=""><u>LEARN MORE →</u></a>
          </div>
        </div>
      </div>

      <!-- Fighting For The 30th -->
      <div id="main-col-3" flipWidth="734" flipBool="false" class="columns flippable vc-anchor wt-500" style="text-align: center;">
        <div id="img-cont-3" class="column flip-l2r is-half-width">
          <div class="bg-is-dark-red">
            <div class="vc-target" style="height: auto; width: 100%; padding: 2.5%;">
              <img src="wp-content/themes/wp-ebbin/assets/images/District30.png" alt="A map of District 30">
            </div>
          </div>
        </div>
        <div id="txt-cont-3" class="column flip-r2l is-half-width">
          <div id="main-txt-3" class="text-container center-text-vert">
            <h1>FIGHTING FOR THE 30TH</h1>
            <div class="horizontal-bar bg-is-black"></div>
            <h3>Adam represents the 30th Senate District, consisting of approximately 200,000 residents
              who reside in portions of Arlington, Alexandria, and parts of Fairfax County’s Mount Vernon
              and Lee Districts. The district borders the Potomac River and includes Reagan National Airport,
              Old Town Alexandria and George Washington’s Mount Vernon Estate.</h3>
              <a class="font-is-black wt-900" href=""><u>LEARN MORE →</u></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <style>
    @media screen and (max-width: 748px) {
      .img-with-overlay {width: 100% !important;}
      .img-with-overlay > .overlay-txt {font-size: 10vw !important;}
    }
  </style>
</body>

<?php
  get_footer();
?>
<script>
  centerDivVert();
  /* Initial flip of .flippable columns */
  var winWidth = $("body").prop("clientWidth"),
      flipList = document.getElementsByClassName("flippable");
  for (let item of flipList) {
    /*
      var num       : width at which columns flip
      var bool_val  : ideally, true if unflipped, false if flipped.
                      however, in the event that columns begin
                      unflipped and must be flipped, we need to mark
                      them for an initial flip
    */
    var num = parseInt(item.getAttribute("flipWidth")),
        bool_val = item.getAttribute("flipBool") == "true";
    /* Mark columns that need to be flipped before page load */
    if (winWidth >= num) {$(item).attr("flipBool","true");}
  }
  /* Initiate flip before page load */
  flipColumnOrder();
</script>

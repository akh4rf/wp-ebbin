<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:url" content="http://www.adamebbin.com/" />
  <meta name="twitter:title" content="Ebbin for Virginia" />

  <link rel="canonical" href="http://www.adamebbin.com/" />
  <link rel="shortlink" href="http://www.adamebbin.com/" />
  <link rel="shortcut icon" href="http://www.adamebbin.com/sites/adamebbin/files/glass_favicon.jpg" type="image/jpeg" />

  <meta property="og:site_name" content="Ebbin for Virginia" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.adamebbin.com/" />
  <meta property="og:title" content="Ebbin for Virginia" />

  <?php
    wp_head();
  ?>

</head>
<header onresize="resizeFunction()">
  <!-- Header Image -->
  <div class="image">
    <img src="http://www.adamebbin.com/sites/adamebbin/files/mastheadALX.JPG" alt="Ebbin for Virginia" role="presentation" />
  </div>

  <!-- Navbar -->
  <nav class="is-full-width bg-is-dark-red" style="height: 71px;">
    <div class="navbar-logo wt-900 font-is-yellow">
      <h5>LOGO HERE</h5>
    </div>
    <div class="menu-button-wrapper" onclick="menuBtnFunc(this)">
      <div id="menu-wrapper">
        <h5>MENU</h5>
        <div class="menu-button">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </div>
    </div>
    <ul class="navbar-buttons">
      <li id="aboutMenu" class="nav-btn-main" onclick="dropBtnFuncMobile(this)"><a class="main-click"><h5>About</h5><div style="width: 25px; height: 25px;"><i class="fa fa-angle-right wt-900"></i></div></a>
        <ul>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/about-adam">About Adam</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/about-30th-district">About District 30</a></li>
        </ul>
      </li>
      <li id="infoMenu" class="nav-btn-main" onclick="dropBtnFuncMobile(this)"><a class="main-click"><h5>Info</h5><div style="width: 25px; height: 25px;"><i class="fa fa-angle-right wt-900"></i></div></a>
        <ul>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/updates-30th">Updates</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/COVID19">COVID-19</a></li>
        </ul>
      </li>
      <li id="newsMenu" class="nav-btn-main" onclick="dropBtnFuncMobile(this)"><a class="main-click"><h5>News</h5><div style="width: 25px; height: 25px;"><i class="fa fa-angle-right wt-900"></i></div></a>
        <ul>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/senator-ebbins-2020-legislative-reports">Legislative Reports</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/news-clips">News Clips</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/press-releases">Press Releases</a></li>
        </ul>
      </li>
      <li id="legisMenu" class="nav-btn-main" onclick="dropBtnFuncMobile(this)"><a class="main-click"><h5>Bills</h5><div style="width: 25px; height: 25px;"><i class="fa fa-angle-right wt-900"></i></div></a>
        <ul id="years">
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/2021-legislation">2021</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/2020-legislation">2020</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/2019-legislation">2019</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/2018-legislation">2018</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/2017-legislation">2017</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/2016-legislation">2016</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/2015-legislation">2015</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/2014-legislation">2014</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/2013-legislation">2013</a></li>
          <li class="nav-btn-drop"><a class="drop-click" href="http://www.adamebbin.com/2012-legislation">2012</a></li>
        </ul>
      </li>
      <li class="nav-btn-main"><a class="main-click" href="http://www.adamebbin.com/contact-adam"><h5>Contact</h5></a></li>
      <li class="nav-btn-main"><a class="main-click" href="http://www.adamebbin.com/contribute"><h5>Contribute</h5></a></li>
    </ul>
  </nav>
</header>

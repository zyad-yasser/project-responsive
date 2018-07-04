<!DOCTYPE html>
<html>
<head>
<title>Project Responsive</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Oswald|Pacifico" rel="stylesheet">
<link rel="stylesheet" href="./styles.css">
</head>

<body id="scrollMe">

<!-- navbar -->
<nav>
<div class="nav-container">
<ul>
<li class="logo"><img class="logo-top" src="data/logo-top.png"/></li>
<li class="navitem">Home</li>
<li class="navitem">Products</li>
<li class="navitem">Contact us</li>
<li class="button">Main Portfolio</li>
<li class="expander"><i class="fas fa-bars"></i></li>
</ul>
</div>
</nav>

<div class="nav-hidden">
<div class="nav-row">Home</div>
<div class="nav-row">Products</div>
<div class="nav-row">Contact us</div>
<div class="nav-row">Main portfolio</div>
</div>

<!-- header -->
<header>
<img src="data/logo.png"/>
<p>A project to show the responsive design, without bootstrap or JQuery or any external shit !</p>
</header>


<!-- cards area -->
<div class="cards">

<div class="card border-right">
<div class="card-icon"><i class="far fa-edit"></i></div>
<div class="card-head">Modern and vital design</div>
<div class="card-content">This project was created to show how our presicion is in the design.</div>
</div>

<div class="card border-right">
<div class="card-icon"><i class="far fa-clock"></i></div>
<div class="card-head">Speed and efficient</div>
<div class="card-content">By creating this project with no such external packages, it's clean and speed optimized.</div>
</div>

<div class="card border-right">
<div class="card-icon"><i class="fas fa-code"></i></div>
<div class="card-head">Professional coding</div>
<div class="card-content">Who needs a complex unorganized coding, professional coding of project took us 12 Hrs to complete.</div>
</div>

<div class="card">
<div class="card-icon"><i class="fas fa-cogs"></i></div>
<div class="card-head">Full customizable</div>
<div class="card-content">The project is fully customizable, as we work for front end, everything is easy to customize.</div>
</div>

</div>

<!-- products area -->
<main>
<div class="main-container">

<div class="main-head">All you need of services in one place</div>
<div class="main-text">We work on many fields of web developing and design.</div>

<div class="main-content">

<div class="product">
<div class="product-photo"><img src="data/p1.png"/></div>
<div class="product-text">Back-End development</div>
</div>

<div class="product">
<div class="product-photo"><img src="data/p2.png"/></div>
<div class="product-text">Front-End development</div>
</div>

<div class="product">
<div class="product-photo"><img src="data/p3.png"/></div>
<div class="product-text">Testing & debugging</div>
</div>

<div class="product">
<div class="product-photo"><img src="data/p4.png"/></div>
<div class="product-text">Graphics design</div>
</div>

</div>
</div>
</main>

<div class="articles">
<div class="articles-container">

<div class="articles-head">Latest articles posted</div>
<div class="articles-grid">
<div class="article-body">
<div class="article-body-head">
Learn more about Flex boxes
</div>
<div class="article-body-content">
Before the Flexbox Layout module, there were four layout modes:
Block, for sections in a webpage
Inline, for text
Table, for two-dimensional table data
Positioned, for explicit position of an element
The Flexible Box Layout Module, makes it easier to design flexible responsive layout structure without using float or positioning.
</div>
<div class="article-body-rating">
<br><br>
By: Zyad Yasser
<a class="icons">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</a>
</div>
</div>

<div class="article-body">
<div class="article-body-head">
Is NodeJS killing PHP ?
</div>
<div class="article-body-content">
At the time of this writing, i was under the impression that Walmart's codebase was still a pile of errors. I can see that as of now they have reduced their problems to a single warning about Synchronous Ajax Requests being deprecated, so kudos to them for that.
</div>
<div class="article-body-rating">
<br><br>
By: Zyad Yasser
<a class="icons">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="far fa-star"></i>
</a>
</div>
</div>

<div class="article-body">
<div class="article-body-head">
Canvases in HTML5
</div>
<div class="article-body-content">
  The HTML canvas element is used to draw graphics on a web page.

  The graphic above is created with canvas.

  It shows four elements: a red rectangle, a gradient rectangle, a multicolor rectangle, and a multicolor text.
</div>
<div class="article-body-rating">
<br><br>
By: Zyad Yasser
<a class="icons">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
</a>
</div>
</div>

</div>
</div>
</div>

<!-- Technologies area -->
<main>
<div class="main-container">
<div class="main-head">Technologies used in this website</div>
<div class="main-content">

<div class="product dashed clear-bg">
<div class="product-photo-1"><img src="data/t1.png"/></div>
</div>

<div class="product dashed clear-bg">
<div class="product-photo-1"><img src="data/t2.png"/></div>
</div>

<div class="product dashed clear-bg">
<div class="product-photo-1"><img src="data/t3.png"/></div>
</div>

<div class="product dashed clear-bg">
<div class="product-photo-1"><img src="data/t4.png"/></div>
</div>

</div>
</div>
</main>

<!-- Footer -->
<footer>
<div class="footer-inner">

<div class="footer-pannel footer-image">
  <img class="footer-img" src="data/logo.png"/>
</div>

<div class="footer-pannel">
  <div class="footer-pannel-head">Basic contacts</div>
  <div class="footer-pannel-content">
    <p>Mob: +201111980284</p>
    <p>E-mail: zyadyasser6@gmail.com</p>
    <p>E-mail: zezoo_laziz@live.com</p>
  </div>
</div>

<div class="footer-pannel">
  <div class="footer-pannel-head">Our products</div>
  <div class="footer-pannel-content">
    <p class="footer-panel-item">Back-End development</p>
    <p class="footer-panel-item">Front-End development</p>
    <p class="footer-panel-item">Testing & Deebugging</p>
    <p class="footer-panel-item">Graphics design</p>
  </div>
</div>

</div>
</footer>

<div class="footer-bottom">
<div class="bottom-container">
<div class="footer-about">Designed and developed by Eng.Zyad Yasser all rights deserved.</div>
<div class="footer-social">
<ul>
  <li><i class="fab fa-behance-square"></i></li>
  <li><i class="fab fa-facebook"></i></li>
  <li><i class="fab fa-twitter-square"></i></li>
  <li><i class="fab fa-linkedin"></i></li>
  <li><i class="fab fa-instagram"></i></li>
</ul>
</div>

</div>
</div>

</body>
<script src="./scripts.js"></script>
</html>

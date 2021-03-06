<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Futurama Quotes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Get random Futurama quote by your favorite character like Fry, Leela, Bender and other" />
  <meta name="keywords" content="futurama quotes fry leela amy farnsworth bender shiny ass" />
  <link rel="shortcut icon" href="/img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/slitslider.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/custom.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.min.css" />
  <script type="text/javascript" src="/js/modernizr.custom.min.js"></script>
  <noscript>
    <link rel="stylesheet" type="text/css" href="css/styleNoJS.min.css" />
  </noscript>
  <style data-class="character">
    .fq .deco:after {
      background-image: url('{!! $characterImgUri !!}');
    }
  </style>
</head>
<body>
<div class="container fq">
  <div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
      <div class="sl-slide bg-1" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="deco" data-icon="a"></div>
          <blockquote><p class="blue">{!! $quote !!}</p></blockquote>
          <div class="footer blue">
            <div class="city-bg"></div>
            <img class="planet-express-logo" src="img/planet_express_logo50.png" alt="Planet Express Logo" height="50">
            <span class="provided">Provided by Planet Express, Inc.</span>
          </div>
        </div>
      </div>
    </div>
    <nav id="nav-arrows" class="nav-arrows">
      <span class="nav-arrow-next blue">Random</span>
    </nav>
  </div>
</div>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="/js/jquery.slitslider.min.js"></script>
<script type="text/javascript" src="/js/quotes.min.js"></script>
</body>
</html>

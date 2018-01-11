<html>
<head>
  <title>Futurama {{ trans('quotes') }}</title>
  <link rel="stylesheet" href="css/styles.min.css"/>
</head>
<body>
  <!-- Title -->
  <div>
    <h1 class="title" title="FUTURAMA {{ strtoupper(trans('quotes')) }}">
      <div>FUTURAMA {{ strtoupper(trans('quotes')) }}</div>
    </h1>
  </div>
  <!-- Content -->
  <div>
    <blockquote class="oval-quote">
      <p>{{ $quote }}</p>
    </blockquote>
  </div>
  <div class="character-container">
    <img class="character" src="{{ $characterImgUri }}" alt=""/>
  </div>
  <!-- Footer -->
  <div class="footer">
    <div class="footer-right">
      <img class="planet-express-logo" src="img/planet_express_logo50.png" alt="Planet Express Logo" height="50">
      Provided by Planet Express, Inc.
    </div>
  </div>
</body>
</html>

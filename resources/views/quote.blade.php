<html>
<head>
  <title>Futurama {{ trans('quotes') }}</title>
  <link rel="stylesheet" href="css/styles.min.css"/>
</head>
<body>
  <!-- Title -->
  <div class="header">
    <h1 class="title" title="FUTURAMA {{ strtoupper(trans('quotes')) }}">
      <div>FUTURAMA {{ strtoupper(trans('quotes')) }}</div>
    </h1>
  </div>
  <!-- Content -->
  <div class="content">
    <blockquote class="oval-quote">
      <p>{{ $quote }}</p>
    </blockquote>
    <div class="character-container">
      <img class="character" src="{{ $characterImgUri }}" alt=""/>
    </div>
  </div>
  <!-- Footer -->
  <div class="footer">
    <div class="city-bg"></div>
    <img class="planet-express-logo" src="img/planet_express_logo50.png" alt="Planet Express Logo" height="50">
    Provided by Planet Express, Inc.
  </div>
</body>
</html>

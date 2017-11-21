<html>
<head>
  <title>Futurama {{ trans('quotes') }}</title>
  <link rel="stylesheet" href="css/styles.min.css"/>
</head>
<body>
  <!-- Title -->
  <div>
    <h1 class="title">Futurama {{ trans('quotes') }}</h1>
  </div>
  <!-- Content -->
  <div>
    <blockquote class="oval-quote">
      <p>{{ $quote }}</p>
    </blockquote>
    <img class="character" src="{{ $characterImgUri }}" alt="" />
  </div>
  <!-- Footer -->
  <div class="footer">
    <div class="footer-left">
      <p>
        <img src="img/planet_express_logo.png" alt="Planet Express Logo" height="50"/>
        Provided by Planet Express, Inc
      </p>
    </div>
  </div>
</body>
</html>

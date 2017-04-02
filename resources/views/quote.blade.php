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
    <p class="quote">{{ $quote }}</p>
  </div>
  <!-- Footer -->
  <div>
    <p>
      <img src="img/planet_express_logo.png" alt="Planet Express Logo" height="50"/>
      Provided by Planet Express, Inc
    </p>
  </div>
</body>
</html>

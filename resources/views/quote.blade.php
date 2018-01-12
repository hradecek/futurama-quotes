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
  <!-- Character's Menu -->
  <div class="heads-menu">
    <button class="head-button" type="submit">
      <img class="head-icon" src="img/characters/icons/fry_head.ico" alt="Fry's quotes"><br>
      <img class="head-icon" src="img/characters/icons/bender_head.ico" alt="Bender's quotes"><br>
      <img class="head-icon" src="img/characters/icons/leela_head.ico" alt="Leela's quotes"><br>
      <img class="head-icon" src="img/characters/icons/professor_head.png" alt="Professor's quotes"><br>
      <img class="head-icon" src="img/characters/icons/zoidberg_head.png" alt="Dr. Zoidberg's quotes"><br>
      <img class="head-icon" src="img/characters/icons/amy_head.png" alt="Amy's quotes">
    </button>
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
    <span class="provided">Provided by Planet Express, Inc.</span>
  </div>
</body>
</html>

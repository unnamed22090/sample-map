<html>
<head>
  <title>ESRI Map</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://esri.darknamer.com/3.16/esri/css/esri.css">
  <!--<link rel="stylesheet" href="http://localhost/esri/3.16/esri/css/esri.css">-->

  <style>
    html, body, #mapDiv {
      padding: 0;
      margin: 0;
      height: 100%;
    }
  </style>

  <script type="text/javascript" src="<?= url('script/global.js') ?>"></script>
  <!--<script type="text/javascript" src="http://localhost/esri/3.16/init.js"></script>-->
  <script type="text/javascript" src="http://esri.darknamer.com/3.16/init.js"></script>
  <script type="text/javascript" src="<?= url('script/app.js') ?>"></script>

</head>
<body class="claro">
<div id="mapDiv"></div>
</body>
</html>
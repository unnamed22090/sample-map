<!DOCTYPE html>
<html>
<head>
  <title>Google Service Map</title>
  <meta name="viewport" content="initial-scale=1.0">
  <meta charset="utf-8">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    #map {
      height: 100%;
    }
  </style>
</head>
<body>
<div id="map"></div>

<script type="text/javascript">
  var map = null;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {
        lat: 13.764557,
        lng: 100.5331864
      },
      zoom: 15
    });
  }
</script>
<script src="<?= $google_url ?>" async defer></script>
</body>
</html>
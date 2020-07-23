<?php
        $locations=array();
        $uname="root";
        $pass="asd32145";
        $servername="localhost";
        $dbname="Covid_19_dbms";
        $db=new mysqli($servername,$uname,$pass,$dbname);
        $query =  $db->query("SELECT * FROM isolation_ward");
        //$number_of_rows = mysql_num_rows($db);
        //echo $number_of_rows;

        while( $row = $query->fetch_assoc() ){
            $name = $row['isolation_ward_name'];
            $longitude = $row['lng'];
            $latitude = $row['lat'];

            /* Each row is added as a new array */
            $locations[]=array( 'name'=>$name, 'lat'=>$latitude, 'lng'=>$longitude,  );
        }

        //echo $locations[0]['name'].": In stock: ".$locations[0]['lat'].", sold: ".$locations[0]['lng'].".<br>";
        //echo $locations[1]['name'].": In stock: ".$locations[1]['lat'].", sold: ".$locations[1]['lng'].".<br>";
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
          /* Set the size of the div element that contains the map */
          #map-canvas {
            margin-top: 30px;
            height: 600px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
           }
        </style>
      </head>
      <body>
  <div id="map-canvas"></div>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDuP-LuEvb7dDNHAKqFpqMSreiadAlz6PE"></script>
    <script type="text/javascript">
    var map;
    var Markers = {};
    var infowindow;
    var locations = [
        <?php for($i=0;$i<sizeof($locations);$i++){ $j=$i+1;?>
        [
            'AMC Service',
          '<p><a href="<?php echo $locations[0]['name'];?>">Isolation Ward</a></p>',
            <?php echo $locations[$i]['lat'];?>,
            <?php echo $locations[$i]['lng'];?>,
            0
        ]<?php if($j!=sizeof($locations))echo ","; }?>
    ];
    var origin = new google.maps.LatLng(locations[0][2], locations[0][3]);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

    function initialize() {
      var mapOptions = {
        zoom: 6,
        center: origin
      };


      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        infowindow = new google.maps.InfoWindow();

        for(i=0; i<locations.length; i++) {
            var position = new google.maps.LatLng(locations[i][2], locations[i][3]);
            var image_hospital = new google.maps.MarkerImage("https://img.icons8.com/color/48/000000/hospital-2.png", null, null, null, new google.maps.Size(40,52)); // Create a variable for our marker image.
            var marker = new google.maps.Marker({
               icon:image_hospital,
                position: position,
                map: map,

            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][1]);
                    infowindow.setOptions({maxWidth: 200});
                    infowindow.open(map, marker);
                }
            }) (marker, i));
            Markers[locations[i][4]] = marker;
        }

        locate(0);

    }

    function locate(marker_id) {
        var myMarker = Markers[marker_id];
        var markerPosition = myMarker.getPosition();
        map.setCenter(markerPosition);
        google.maps.event.trigger(myMarker, 'click');
    }


    google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </body>
</html>

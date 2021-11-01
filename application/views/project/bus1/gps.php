<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- MENAMPILKAN KOORDINAT SECARA REALTIME-->
    <!-- <div id="koordinatRealtime"></div> -->
    <div class="row">
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header" style="font-size:24px; font-weight: bold">
                    Koordinat
                </div>
                <div class="card-body">
                    <h2> <span id="koordinatRealtime"></span></h2>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header" style="font-size:24px; font-weight: bold">
                    Kecepatan
                </div>
                <div class="card-body">
                    <h2> <span id="kecepatanRealtime"></span></h2>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= base_url('assets/vendor/jquery/'); ?>jquery.min.js" type="text/javascript"></script>

    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8" type="text/javascript"></script>

    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function() {


            // var customIcons = 'http://maps.google.com/mapfiles/kml/shapes/bus.png';


            var map = new google.maps.Map(document.getElementById("map"), {
                center: new google.maps.LatLng(<?= $koordinat['locationLatitude']; ?>, <?= $koordinat['locationLongitude']; ?>),
                zoom: 15,
                mapTypeId: 'roadmap'
            });

            var markarray = []

            function load() {

                for (var i = 0; i < markarray.length; i++) {
                    markarray[i].setMap(null);
                }
                markarray = [];
                console.log("ok")
                var infoWindow = new google.maps.InfoWindow;

                // Change this depending on the name of your PHP file
                downloadUrl("marker_data", function(data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName("marker");
                    for (var i = 0; i < markers.length; i++) {
                        //var name = markers[i].getAttribute("name");
                        var lat = markers[i].getAttribute("lat");
                        var lng = markers[i].getAttribute("lng");
                        var date_taken = markers[i].getAttribute("date_taken");
                        //var type = markers[i].getAttribute("type");
                        var point = new google.maps.LatLng(
                            parseFloat(markers[i].getAttribute("lat")),
                            parseFloat(markers[i].getAttribute("lng")));
                        var html = "<b> Latitude = " + lat + "</b> <br/>" + "<b> Longitude = " + lng + "</b> <br/>" + date_taken;
                        var icon = '<?= base_url('assets/img/map'); ?>/bus1.png';
                        var marker = new google.maps.Marker({
                            map: map,
                            position: point,
                            icon: '<?= base_url('assets/img/map'); ?>/bus1.png',
                            shadow: icon.shadow,
                            animation: google.maps.Animation.BOUNCE
                        });
                        markarray.push(marker);
                        bindInfoWindow(marker, map, infoWindow, html);
                        map.setCenter(marker.getPosition()); //centered map based on marker
                        //map.setZoom(16); //after centered, set zoom
                    }
                });
            }

            function bindInfoWindow(marker, map, infoWindow, html) {
                google.maps.event.addListener(marker, 'click', function() {
                    infoWindow.setContent(html);
                    infoWindow.open(map, marker);
                });
            }

            function downloadUrl(url, callback) {
                var request = window.ActiveXObject ?
                    new ActiveXObject('Microsoft.XMLHTTP') :
                    new XMLHttpRequest;

                request.onreadystatechange = function() {
                    if (request.readyState == 4) {
                        request.onreadystatechange = doNothing;
                        callback(request, request.status);
                    }
                };

                request.open('GET', url, true);
                request.send(null);
            }

            function doNothing() {}

            $("#BtnClicked").on('click', function() {
                load();
            });

            setInterval(function() {
                load();
            }, 1000);

        });

        //]]>
    </script>

    <br>

    <div id="map" style="width: 100%; height: 80vh"></div>
    <a href="#" id="BtnClicked"></a>
    <!--END-->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
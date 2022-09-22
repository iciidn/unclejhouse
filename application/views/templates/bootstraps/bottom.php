    <footer id="footer" class="color color-primary mt-none pt-xlg pb-xlg">
      <div class="container">
        <div class="row pt-md pb-md">
          <div class="col-md-3 mb-none">
            <img alt="Porto" class="img-responsive logo mt-sm" style="max-width: 145px;" src="<?=base_url()?>assets/img/demos/hotel/logo-hotel-footer.png">
          </div>
          <div class="col-md-3 mb-none">
            <div class="footer-info">
              <i class="icon-location-pin icons"></i>
              <label>address</label>
              <strong>1234 Street Name, Porto, Envato</strong>
            </div>
          </div>
          <div class="col-md-2 mb-none">
            <div class="footer-info">
              <i class="icon-phone icons"></i>
              <label>call us</label>
              <strong>(800) 1234-5678</strong>
            </div>
          </div>
          <div class="col-md-4 mb-none">
            <div class="footer-info">
              <i class="icon-share icons"></i>
              <label>follow us</label>
              <ul class="social-icons">
                <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i> Instagram</a></li>
                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i> Twitter</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>

</div>

<div class="footer-copyright">
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <nav id="sub-menu">
        <ul>
          <li>
            <a href="<?=base_url()?>">
              Hotel
            </a>
          </li>
          <li>
            <a href="<?=base_url()?>">
              Rooms &amp; Rates
            </a>
          </li>
          <li>
            <a href="<?=base_url()?>">
              Special Offers
            </a>
          </li>
          <li>
            <a href="<?=base_url()?>">
              Location
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col-md-6 align-right">
      <p>© Copyright 2017. All Rights Reserved.</p>
    </div>
  </div>
</div>
</div>


<!-- Vendor -->
<script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/vendor/common/common.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?=base_url()?>assets/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?=base_url()?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url()?>assets/vendor/vide/vide.min.js"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?=base_url()?>assets/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?=base_url()?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=base_url()?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Demo -->
<script src="<?=base_url()?>assets/js/demos/demo-hotel.js"></script>

<!-- Theme Custom -->
<script src="<?=base_url()?>assets/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?=base_url()?>assets/js/theme.init.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script>

  // Map Markers
  var mapMarkers = [{
    address: "New York, NY 10017",
    icon: {
      image: "img/pin.png",
      iconsize: [26, 46],
      iconanchor: [12, 46]
    }
  }];

  // Map Initial Location
  var initLatitude = 40.75198;
  var initLongitude = -73.96978;

  $('#googleMapsMacro').gMap({
    controls: {
      draggable: true,
      panControl: true,
      zoomControl: true,
      mapTypeControl: true,
      scaleControl: true,
      streetViewControl: true,
      overviewMapControl: true
    },
    scrollwheel: false,
    markers: mapMarkers,
    latitude: initLatitude,
    longitude: initLongitude,
    zoom: 13
  });

  $('#googleMapsMicro').gMap({
    controls: {
      draggable: false,
      panControl: false,
      zoomControl: false,
      mapTypeControl: false,
      scaleControl: false,
      streetViewControl: false,
      overviewMapControl: false
    },
    scrollwheel: false,
    markers: mapMarkers,
    latitude: initLatitude,
    longitude: initLongitude,
    zoom: 13
  });

  var mapRef = $('#googleMapsMacro, #googleMapsMicro').data('gMap.reference');

  // Styles from https://snazzymaps.com/
  var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

  var styledMap = new google.maps.StyledMapType(styles, {
    name: 'Styled Map'
  });

  mapRef.mapTypes.set('map_style', styledMap);
  mapRef.setMapTypeId('map_style');

</script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12345678-1', 'auto');
  ga('send', 'pageview');
</script>
 -->


</body>
</html>

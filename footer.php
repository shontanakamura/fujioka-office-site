<script>
  function initMap() {
      var latlng = new google.maps.LatLng( 35.01732040018787, 135.75632838291912 );//中心の緯度, 経度
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,//ズームの調整
        center: latlng//上で設定した中心
      });
      var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: '<?php echo get_template_directory_uri(); ?>/img/map-ping.png',
      });
    }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFUtyGbKw4ehIilJ6hnZw5lzp7kJKp3Ks&callback=initMap"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<?php wp_footer(); ?>
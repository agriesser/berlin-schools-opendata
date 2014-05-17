<?php echo $this->Map->map(
        array(
            "marker_lat" => 52.518611,
            "marker_lon" => 13.408056,
            "zoom" => 12)
        ); ?>

<?php $this->append('initjs'); ?>
$(document).ready(function() {
    $.getJSON('<?php echo $this->Html->url('/schools/index.json'); ?>', function(data) {
        data.schools.forEach(function(school) {
            var p = new OpenLayers.LonLat(school.Address.longitude,school.Address.latitude).transform(
                new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                map.getProjectionObject() // to Spherical Mercator Projection
            )

            var size = new OpenLayers.Size(21,25);
            var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);
            var icon = new OpenLayers.Icon("http://www.openlayers.org/dev/img/marker.png", size, offset);
            markers.addMarker(new OpenLayers.Marker(p,icon));
        });
    });
});    
<?php $this->end(); ?>
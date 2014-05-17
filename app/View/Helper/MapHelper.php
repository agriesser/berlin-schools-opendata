<?php

App::uses('Helper', 'View', 'Html');

class MapHelper extends AppHelper {
    
    public $helpers = array('Html');
    
    function map($prop = array()) {
        $id = (isset($prop['id'])) ? $prop['id'] : 'map';
        $class = (isset($prop['class'])) ? $prop['class'] : 'map';
        $style = (isset($prop['style'])) ? $prop['style'] : '';
        $mLat = (isset($prop['marker_lat'])) ? $prop['marker_lat'] : '';
        $mLon = (isset($prop['marker_lon'])) ? $prop['marker_lon'] : '';
        $mZoom = (isset($prop['zoom'])) ? $prop['zoom'] : '16';
        
        $this->Html->script('http://openlayers.org/api/OpenLayers.js', array('inline' => false));
        $this->Html->script('http://openstreetmap.org/openlayers/OpenStreetMap.js', array('inline' => false));
        
        $out = '
var map;
var markers;

function init() {
    map = new OpenLayers.Map("'.$id.'");
    map.addControl( new OpenLayers.Control.LayerSwitcher);

     var layMapnik = new OpenLayers.Layer.OSM.Mapnik("Maplint");
     map.addLayer(layMapnik);
     map.zoomToMaxExtent();
     
     markers = new OpenLayers.Layer.Markers("Markers");
     map.addLayer(markers);
';
        if (!empty($mLat) && !empty($mLon)) {
            $out .= '
                
     var p = new OpenLayers.LonLat('.$mLon.','.$mLat.').transform(
        new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
        map.getProjectionObject() // to Spherical Mercator Projection
      )


    map.setCenter(p, '.$mZoom.');
                ';
        }
        
        $out .= '
}

init();
            ';
        
        $this->_View->append('initjs', $out);
                
        return $this->_View->element('map', array('id' => $id, 'class' => $class, 'style' => $style));
    }
}
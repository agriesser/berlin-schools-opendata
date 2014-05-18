<div class="large-5 columns">
    <div class="panel">
        <h3>Filter</h3>
        <?php echo $this->Form->create(false); ?>
            <div class="row">
                <div class="large-12 columns">
                    <label>Stadtteil
                        <div class="row collapse">
                            <div class="small-10 columns">
                                <select name="data[districts][]" id="districts" class="multisel" multiple="multiple" data-placeholder="Stadtteile auswählen"> 
                                    <?php foreach ($this->get("districts") as $dist): ?>
                                    <option value="<?php echo $dist['District']['id']; ?>"><?php echo $dist['District']['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="small-2 columns">
                                <a class="button postfix radius selectAll" data-multiId="districts">Alle</a>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <label>Schulzweige
                        <div class="row collapse">
                            <div class="small-10 columns">
                                <select name="data[branches][]" class="multisel" id="types" multiple="multiple" data-placeholder="Schulzweig auswählen"> 
                                    <?php foreach ($this->get("branches") as $dist): ?>
                                    <option value="<?php echo $dist['Schoolbranchtype']['id']; ?>"><?php echo $dist['Schoolbranchtype']['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="small-2 columns">
                                <a class="button postfix radius selectAll" data-multiId="types">Alle</a>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <label>Unterrichtssprache
                        <div class="row collapse">
                            <div class="small-10 columns">
                                <select name="test" id="languages" class="multisel" multiple="multiple" data-placeholder="Unterrichtssprache auswählen"> 
                                    <option value="2">Deutsch</option>
                                    <option value="1">Englisch</option>
                                    <option value="2">weitere</option>
                                </select>
                            </div>
                            <div class="small-2 columns">
                                <a class="button postfix radius selectAll" data-multiId="languages">Alle</a>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <label>Klassenstufen
                        <div style="width: 90%; margin: 0 auto;">
                            <div id="grades" style="margin: 10px 0px";></div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <label>Trägerschaft</label>
                    <input id="checkbox1" type="checkbox" checked /><label for="checkbox1">öffentlich</label>
                    <input id="checkbox2" type="checkbox" checked/><label for="checkbox2">privat</label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <label>Behindertengerecht</label>
                    <?php foreach ($this->get('disEquip') as $disEquip): ?>
                    <div class="row">
                        <div class="medium-12 columns">
                            <input type="checkbox" name="data[disEquip][]" id="disEquip_<?php echo $disEquip['Accessibilityequipment']['id']; ?>" value="<?php echo $disEquip['Accessibilityequipment']['id']; ?>"/><label for="disEquip_<?php echo $disEquip['Accessibilityequipment']['id']; ?>"><?php echo $disEquip['Accessibilityequipment']['name']; ?></label>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="row">
                        <div class="medium-6 columns">
                            <?php echo $this->Form->input('chkMeal', array('type' => 'checkbox', 'label' => 'Mittagessen', 'hiddenField' => false)); ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <a href="#" id="updateFilter" class="button success radius">Aktualisieren</a>
                </div>
            </div>
        <?php echo $this->Form->end() ?>
    </div>
</div>

<div class="large-7 columns">

    <div class="row">
        <h2>Bildungseinrichtungen: <span id="amountSchools"><?php echo $this->get('amountSchools'); ?></span></h2>
    </div>
    <div class="row">
<?php 
    echo $this->Map->map(
        array(
            "marker_lat" => 52.518611,
            "marker_lon" => 13.408056,
            "zoom" => 12,
            "style" => "height: 500px")
        ); 
?>
    </div>
    
    <div class="row">
        <table id="dt">
            <thead>
                <tr>
                    <th>test</th>
                    <th>test</th>
                    <th>test</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>lala</td>
                    <td>lala</td>
                    <td>lala</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php $this->append('initjs'); ?>
function putSchools(data) {
    markers.clearMarkers();
    $('#amountSchools').html(data.schools.length);
    data.schools.forEach(function(school) {
        var p = new OpenLayers.LonLat(school.Address.longitude,school.Address.latitude).transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
        )

        var size = new OpenLayers.Size(21,25);
        var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);
        var icon = new OpenLayers.Icon("http://www.openlayers.org/dev/img/marker.png", size, offset);
        var marker = new OpenLayers.Marker(p,icon);
        marker.events.register('mousedown', marker, function(evt) { 
            var url = '<?php echo $this->Html->url(array('controller' => 'schools', 'action' => 'view'), true); ?>';
            url += '/'+school.School.id+'?popup=1';
            var popup = new OpenLayers.Popup.FramedCloud("Popup", 
                    p, null,
                    'test', null,
                    true // <-- true if we want a close (X) button, false otherwise
                );
            map.addPopup(popup);
            $.get(url, function(schoolDetails) {
                popup.setContentHTML(schoolDetails);
                popup.updateSize();
            });
            OpenLayers.Event.stop(evt); 
        });
        markers.addMarker(marker);
        
        $("#test").remove();
    });
}

$(document).ready(function() {
    $.getJSON('<?php echo $this->Html->url('/schools/index.json'); ?>', putSchools);
    
    $("#updateFilter").click(function(event) {
        event.preventDefault();
        
        $("#map").append('<div style="position: absolute; top: 0px; background: #fff; opacity: 0.5; z-index: 10000" id="test"><?php echo $this->Html->image('ajax-loader.gif', array('class' => 'loading')); ?></div>');
        
        console.log();
        
        $("#test").height($("#map").height());
        $("#test").width($("#map").width());
        $("#test").css("top", $("#map").position().top+"px");
        
        var url = '<?php echo $this->Html->url('/home/query.json?');?>'+$("#indexForm").serialize();
        $.getJSON(url, putSchools);
    });
    
    $("#dt").dataTable();
});    
<?php $this->end(); ?>

<?php
// include some external stuff :)
$this->append('externalJs', 'http://cdn.datatables.net/1.10.0/js/jquery.dataTables.min.js');
?>
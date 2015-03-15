<?php
$this->breadcrumbs=array(
	'Location Volunteers',
);

$this->menu=array(
array('label'=>'Create LocationVolunteer','url'=>array('create')),
array('label'=>'Manage LocationVolunteer','url'=>array('admin')),
);
?>
<div class="well">
<h1>Location Volunteers</h1>

<?php 
$rows  = Yii::app()->db->createCommand('SELECT LocationName,Latitude,Longitude,LocationAddress,AmphurName,ProvinceName,LocationPostCode,LocationImage,HelpingName,icon_name
 FROM location_volunteer l
 left JOIN helping_tb h ON (l.HelpingID=h.HelpingID)
 left JOIN province p ON (l.ProvinceID = p.ProvinceID)
 left JOIN amphur a ON (l.AmphurID = a.AmphurID)')->queryAll();
$clients = array();
foreach ($rows as $row) {

		//$clients[$row['Longitude']] = $row;
	//echo 	$row['Longitude']."<br>";

}
?>

<?php 
 $model = LocationVolunteer::model()->findAllBySql("SELECT LocationName,Latitude,Longitude,LocationAddress,AmphurName,ProvinceName,LocationPostCode,LocationImage,HelpingName,icon_name
 FROM location_volunteer l
 left JOIN helping_tb h ON (l.HelpingID=h.HelpingID)
 left JOIN province p ON (l.ProvinceID = p.ProvinceID)
 left JOIN amphur a ON (l.AmphurID = a.AmphurID)");
 $model1 = HelpingTb::model()->findAllBySql("SELECT LocationName,HelpingName,icon_name From helping_tb h ,location_volunteer l 
WHERE h.HelpingID=l.HelpingID");
 //print_r($model);
 ?>


<?php
//
// ext is your protected.extensions folder
// gmaps means the subfolder name under your protected.extensions folder
//  
Yii::import('ext.EGMap.*');
 
$gMap = new EGMap();
$gMap->zoom = 13;
$mapTypeControlOptions = array(
  'position'=> EGMapControlPosition::LEFT_BOTTOM,
  'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
);
 
$gMap->mapTypeControlOptions= $mapTypeControlOptions;
$gMap->width = '100%';
$gMap->height = 300;
$gMap->setCenter(7.8948606, 98.35210919999997);
$info_window_b = new EGMapInfoWindow('Hey! I am a marker with label!');



foreach ($rows as $row) {
	$icon = new EGMapMarkerImage( Yii::app()->theme->baseUrl . '/img/icon/'.$row['icon_name']);
	$icon->setSize(32, 37);
	$icon->setAnchor(16, 16.5);
	$icon->setOrigin(0, 0);
	$marker = new EGMapMarker($row['Latitude'], $row['Longitude'], array('title' => 'Marker With Custom Image','icon'=>$icon));
	
	// Create GMapInfoWindows
	$info_window_a = new EGMapInfoWindow('<img src="'. Yii::app()->request->baseUrl . '/upload/location/'.$row['LocationImage'].' "  width="100" height="100" /><br><b>'.$row['LocationName'].'</b>');
	$marker->addHtmlInfoWindow($info_window_a);
	
	$gMap->addMarker($marker);}
	// 	echo $rows->Latitude."<br>"
 
// enabling marker clusterer just for fun
// to view it zoom-out the map
$gMap->enableMarkerClusterer(new EGMapMarkerClusterer());
 
$gMap->renderMap();
?>
<style type="text/css">
.labels {
   color: red;
   background-color: white;
   font-family: "Lucida Grande", "Arial", sans-serif;
   font-size: 10px;
   font-weight: bold;
   text-align: center;
   width: 40px;     
   border: 2px solid black;
   white-space: nowrap;
}
</style>
<!DOCTYPE html>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "180";
?>
<html>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
function myCall() {
	var request = $.ajax({
	url: "ajax.php",
	type: "GET",			
	dataType: "html"
	});
	request.done(function(msg){
	   $("#mybox").html(msg);
	});
	request.fail(function(jqXHR, textStatus){
	   alert("Request failes: "+ textStatus);
	});
	}

</script>
</head>
<body>
        <div id="mybox">

        </div>
        <button type="button" id="button1" onclick="myCall()">Update</button>
<h1 style="text-align:center">HAWC Outriggers Control</h1>
<div style="text-align:center; padding-bottom: 1cm">
<?php
echo "Last Update" . "<br>";
echo gmdate("d/m/Y") . " " . gmdate("H:i:s") . " " .  "UTC" . "<br>";	
date_default_timezone_set("America/Mexico");
echo date("d/m/Y") . " " . date("H:i:s") . " " . "MX" . "<br>";

chmod("/home/solidbit/public_html/XMLGen.c", 0755);
exec('cc XMLGen.c -o XMLGen.out -std=c99');
echo exec('./XMLGen.out');

$xml=simplexml_load_file("XMLData.xml") or die("Error: Cannot create object");
global $ValVolt1, $ValVolt2, $ValVolt3, $ValVolt4, $ValVolt5, $ValVolt6, $ValVolt7, $ValVolt8, $ValVolt9, $ValVolt10, $ValVolt11, $ValVolt12;
global $ValCurr1, $ValCurr2, $ValCurr3, $ValCurr4, $ValCurr5, $ValCurr6, $ValCurr7, $ValCurr8, $ValCurr9, $ValCurr10, $ValCurr11, $ValCurr12;
global $ValStat1, $ValStat2, $ValStat3, $ValStat4, $ValStat5, $ValStat6, $ValStat7, $ValStat8, $ValStat9, $ValStat10, $ValStat11, $ValStat12;
$ValStat1=$xml->Channel[0]->State;
$ValVolt1=$xml->Channel[0]->Voltage;
$ValCurr1=$xml->Channel[0]->Current;
$ValStat2=$xml->Channel[1]->State;
$ValVolt2=$xml->Channel[1]->Voltage;
$ValCurr2=$xml->Channel[1]->Current;
$ValStat3=$xml->Channel[2]->State;
$ValVolt3=$xml->Channel[2]->Voltage;
$ValCurr3=$xml->Channel[2]->Current;
$ValStat4=$xml->Channel[3]->State;
$ValVolt4=$xml->Channel[3]->Voltage;
$ValCurr4=$xml->Channel[3]->Current;
$ValStat5=$xml->Channel[4]->State;
$ValVolt5=$xml->Channel[4]->Voltage;
$ValCurr5=$xml->Channel[4]->Current;
$ValStat6=$xml->Channel[5]->State;
$ValVolt6=$xml->Channel[5]->Voltage;
$ValCurr6=$xml->Channel[5]->Current;
$ValStat7=$xml->Channel[6]->State;
$ValVolt7=$xml->Channel[6]->Voltage;
$ValCurr7=$xml->Channel[6]->Current;
$ValStat8=$xml->Channel[7]->State;
$ValVolt8=$xml->Channel[7]->Voltage;
$ValCurr8=$xml->Channel[7]->Current;
$ValStat9=$xml->Channel[8]->State;
$ValVolt9=$xml->Channel[8]->Voltage;
$ValCurr9=$xml->Channel[8]->Current;
$ValStat10=$xml->Channel[9]->State;
$ValVolt10=$xml->Channel[9]->Voltage;
$ValCurr10=$xml->Channel[9]->Current;
$ValStat11=$xml->Channel[10]->State;
$ValVolt11=$xml->Channel[10]->Voltage;
$ValCurr11=$xml->Channel[10]->Current;
$ValStat12=$xml->Channel[11]->State;
$ValVolt12=$xml->Channel[11]->Voltage;
$ValCurr12=$xml->Channel[11]->Current;

global $colorV;
$colorV="color: #00A000";
global $colorR;
$colorR="color: #FF0000";
?>
</div>

<table style="width:100%">
  <tr>
    <th></th>
    <th></th>
    	<th>Node A</th>
	<th>Node B</th>
	<th>Node C</th>
	<th>Node D</th>
	<th>Node E</th>
  </tr>
  <tr>
    <td>Temperature</td>
    <td>EMS</td>
    <td><?php 
	$ValTemp1=rand(8,35);	
	if (($ValTemp1>10)&&($ValTemp1<32)){
		echo $ValTemp1 . " C";
	}
	else {
		echo "<span style='color: red'> {$ValTemp1}  C </span>";
	}
	?></td>
	<td><?php 
	$ValTemp2=rand(8,35);	
	if (($ValTemp2>10)&&($ValTemp2<32)){
		echo $ValTemp2 . " C";
	}
	else {
		echo "<span style='color: red'> {$ValTemp2}  C </span>";
	}
	?></td>
	<td><?php 
	$ValTemp3=rand(8,35);	
	if (($ValTemp3>10)&&($ValTemp3<32)){
		echo $ValTemp3 . " C";
	}
	else {
		echo "<span style='color: red'> {$ValTemp3}  C </span>";
	}
	?></td>
	<td><?php 
	$ValTemp4=rand(8,35);	
	if (($ValTemp4>10)&&($ValTemp4<32)){
		echo $ValTemp4 . " C";
	}
	else {
		echo "<span style='color: red'> {$ValTemp4}  C </span>";
	}
	?></td>
	<td><?php 
	$ValTemp5=rand(8,35);	
	if (($ValTemp5>10)&&($ValTemp5<32)){
		echo $ValTemp5 . " C";
	}
	else {
		echo "<span style='color: red'> {$ValTemp5}  C </span>";
	}
	?></td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
  </tr>
  <tr>
    <th>PDU</th>
  </tr>
  <tr>
	<td>channel #1</td>
	<td>FADC</td>
	<td> <button type="button" onclick="ChangeState('ButtonFADC1'); alert('Event FADC1')" id="ButtonFADC1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonFADC2'); alert('Event FADC2')" id="ButtonFADC2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonFADC3'); alert('Event FADC3')" id="ButtonFADC3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonFADC4'); alert('Event FADC4')" id="ButtonFADC4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonFADC5'); alert('Event FADC5')" id="ButtonFADC5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #2</td>
	<td>HV</td>
	<td> <button type="button" onclick="ChangeState('ButtonHV1'); alert('Event HV1')" id="ButtonHV1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonHV2'); alert('Event HV2')" id="ButtonHV2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonHV3'); alert('Event HV3')" id="ButtonHV3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonHV4'); alert('Event HV4')" id="ButtonHV4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonHV5'); alert('Event HV5')" id="ButtonHV5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #3</td>
	<td>WR</td>
	<td> <button type="button" onclick="ChangeState('ButtonWR1'); alert('Event WR1')" id="ButtonWR1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonWR2'); alert('Event WR2')" id="ButtonWR2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonWR3'); alert('Event WR3')" id="ButtonWR3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonWR4'); alert('Event WR4')" id="ButtonWR4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonWR5'); alert('Event WR5')" id="ButtonWR5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #4</td>
	<td>Network 1</td>
	<td> <button type="button" onclick="ChangeState('ButtonNet1_1'); alert('Event Net1_1')" id="ButtonNet1_1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonNet1_2'); alert('Event Net1_2')" id="ButtonNet1_2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonNet1_3'); alert('Event Net1_3')" id="ButtonNet1_3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonNet1_4'); alert('Event Net1_4')" id="ButtonNet1_4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonNet1_5'); alert('Event Net1_5')" id="ButtonNet1_5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #5</td>
	<td>Network 2</td>
	<td> <button type="button" onclick="ChangeState('ButtonNet2_1'); alert('Event Net2_1')" id="ButtonNet2_1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonNet2_2'); alert('Event Net2_2')" id="ButtonNet2_2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonNet2_3'); alert('Event Net2_3')" id="ButtonNet2_3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonNet2_4'); alert('Event Net2_4')" id="ButtonNet2_4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonNet2_5'); alert('Event Net2_5')" id="ButtonNet2_5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #6</td>
	<td>X</td>
<!--	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td> -->
  </tr>
    <tr>
	<td>channel #7</td>
	<td>X</td>
<!--	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td> -->
  </tr>
  <tr>
	<td>channel #8</td>
	<td>X</td>
<!--	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="alert('Hello world!')" id="ButtonNX"style="color: #00A000"  value="1">ON</button> </td> -->
  </tr>
    <tr>
    <th>HV</th>
	<th>Voltage/Current</th>
  </tr>
  <tr>
	<td>channel #1</td>
	<td> <?php
	if (($ValVolt1>1100)&&($ValVolt1<2300)&&($ValCurr1<750)){
		echo $ValVolt1 . " V/ " . $ValCurr1 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt1} V/ {$ValCurr1} mA</span>";
	}
	?> </td>
<!--	<td><?php 
	$ValVolt1=rand(1000,2400);
	$ValCurr1=rand(100,800);
	if (($ValVolt1>1100)&&($ValVolt1<2300)&&($ValCurr1<750)){
		echo $ValVolt1 . " V/ " . $ValCurr1 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt1} V/ {$ValCurr1} mA</span>";
	}
	?></td> -->
	<td> <button type="button" onclick="ChangeState('ButtonCh1N1'); alert('Event Ch1N1')" id="ButtonCh1N1" style="<?php if($ValStat1==1) echo $colorV; else  echo $colorR; ?>" value="<?php if($ValStat1==1) echo $ValStat1; else echo $ValStat1; ?>"><?php if($ValStat1==1) echo ON; else echo OFF; ?></button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh1N2'); alert('Event Ch1N2')" id="ButtonCh1N2" style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh1N3'); alert('Event Ch1N3')" id="ButtonCh1N3" style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh1N4'); alert('Event Ch1N4')" id="ButtonCh1N4" style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh1N5'); alert('Event Ch1N5')" id="ButtonCh1N5" style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #2</td>
	<td> <?php
	if (($ValVolt2>1100)&&($ValVolt2<2300)&&($ValCurr2<750)){
		echo $ValVolt2 . " V/ " . $ValCurr2 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt2} V/ {$ValCurr2} mA</span>";
	}
	?> </td>
<!--	<td><?php 
	$ValVolt2=rand(1000,2400);
	$ValCurr2=rand(100,800);
	if (($ValVolt2>1100)&&($ValVolt2<2300)&&($ValCurr2<750)){
		echo $ValVolt2 . " V/ " . $ValCurr2 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt2} V/ {$ValCurr2} mA</span>";
	}
	?></td> -->
	<td> <button type="button" onclick="ChangeState('ButtonCh2N1'); alert('Event Ch2N1')" id="ButtonCh2N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh2N2'); alert('Event Ch2N2')" id="ButtonCh2N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh2N3'); alert('Event Ch2N3')" id="ButtonCh2N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh2N4'); alert('Event Ch2N4')" id="ButtonCh2N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh2N5'); alert('Event Ch2N5')" id="ButtonCh2N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #3</td>
	<td><?php
	if (($ValVolt3>1100)&&($ValVolt3<2300)&&($ValCurr3<750)){
		echo $ValVolt3 . " V/ " . $ValCurr3 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt3} V/ {$ValCurr3} mA</span>";
	}
	?></td>
	<td> <button type="button" onclick="ChangeState('ButtonCh3N1'); alert('Event Ch3N1')" id="ButtonCh3N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh3N2'); alert('Event Ch3N2')" id="ButtonCh3N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh3N3'); alert('Event Ch3N3')" id="ButtonCh3N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh3N4'); alert('Event Ch3N4')" id="ButtonCh3N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh3N5'); alert('Event Ch3N5')" id="ButtonCh3N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #4</td>
	<td><?php
	if (($ValVolt4>1100)&&($ValVolt4<2300)&&($ValCurr4<750)){
		echo $ValVolt4 . " V/ " . $ValCurr4 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt4} V/ {$ValCurr4} mA</span>";
	}
	?></td>
	<td> <button type="button" onclick="ChangeState('ButtonCh4N1'); alert('Event Ch4N1')" id="ButtonCh4N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh4N2'); alert('Event Ch4N2')" id="ButtonCh4N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh4N3'); alert('Event Ch4N3')" id="ButtonCh4N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh4N4'); alert('Event Ch4N4')" id="ButtonCh4N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh4N5'); alert('Event Ch4N5')" id="ButtonCh4N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #5</td>
	<td><?php
	if (($ValVolt5>1100)&&($ValVolt5<2300)&&($ValCurr5<750)){
		echo $ValVolt5 . " V/ " . $ValCurr5 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt5} V/ {$ValCurr5} mA</span>";
	}
	?></td>
	<td> <button type="button" onclick="ChangeState('ButtonCh5N1'); alert('Event Ch5N1')" id="ButtonCh5N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh5N2'); alert('Event Ch5N2')" id="ButtonCh5N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh5N3'); alert('Event Ch5N3')" id="ButtonCh5N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh5N4'); alert('Event Ch5N4')" id="ButtonCh5N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh5N5'); alert('Event Ch5N5')" id="ButtonCh5N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #6</td>
	<td><?php
	if (($ValVolt6>1100)&&($ValVolt6<2300)&&($ValCurr6<750)){
		echo $ValVolt6 . " V/ " . $ValCurr6 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt6} V/ {$ValCurr6} mA</span>";
	}
	?></td>
	<td> <button type="button" onclick="ChangeState('ButtonCh6N1'); alert('Event Ch6N1')" id="ButtonCh6N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh6N2'); alert('Event Ch6N2')" id="ButtonCh6N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh6N3'); alert('Event Ch6N3')" id="ButtonCh6N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh6N4'); alert('Event Ch6N4')" id="ButtonCh6N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh6N5'); alert('Event Ch6N5')" id="ButtonCh6N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
    <tr>
	<td>channel #7</td>
	<td><?php
	if (($ValVolt7>1100)&&($ValVolt7<2300)&&($ValCurr7<750)){
		echo $ValVolt7 . " V/ " . $ValCurr7 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt7} V/ {$ValCurr7} mA</span>";
	}
	?></td>
	<td> <button type="button" onclick="ChangeState('ButtonCh7N1'); alert('Event Ch7N1')" id="ButtonCh7N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh7N2'); alert('Event Ch7N2')" id="ButtonCh7N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh7N3'); alert('Event Ch7N3')" id="ButtonCh7N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh7N4'); alert('Event Ch7N4')" id="ButtonCh7N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh7N5'); alert('Event Ch7N5')" id="ButtonCh7N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
  <tr>
	<td>channel #8</td>
	<td><?php
	if (($ValVolt8>1100)&&($ValVolt8<2300)&&($ValCurr8<750)){
		echo $ValVolt8 . " V/ " . $ValCurr8 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt8} V/ {$ValCurr8} mA</span>";
	}
	?></td>
	<td> <button type="button" onclick="ChangeState('ButtonCh8N1'); alert('Event Ch8N1')" id="ButtonCh8N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh8N2'); alert('Event Ch8N2')" id="ButtonCh8N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh8N3'); alert('Event Ch8N3')" id="ButtonCh8N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh8N4'); alert('Event Ch8N4')" id="ButtonCh8N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh8N5'); alert('Event Ch8N5')" id="ButtonCh8N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
  <tr>
	<td>channel #9</td>
	<td><?php
	if (($ValVolt9>1100)&&($ValVolt9<2300)&&($ValCurr9<750)){
		echo $ValVolt9 . " V/ " . $ValCurr9 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt9} V/ {$ValCurr9} mA</span>";
	}
	?></td>
	<td> <button type="button" onclick="ChangeState('ButtonCh9N1'); alert('Event Ch9N1')" id="ButtonCh9N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh9N2'); alert('Event Ch9N2')" id="ButtonCh9N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh9N3'); alert('Event Ch9N3')" id="ButtonCh9N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh9N4'); alert('Event Ch9N4')" id="ButtonCh9N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh9N5'); alert('Event Ch9N5')" id="ButtonCh9N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
  <tr>
	<td>channel #10</td>
	<td><?php
	if (($ValVolt10>1100)&&($ValVolt10<2300)&&($ValCurr10<750)){
		echo $ValVolt10 . " V/ " . $ValCurr10 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt10} V/ {$ValCurr10} mA</span>";
	}
	?></td>
	<td> <button type="button" onclick="ChangeState('ButtonCh10N1'); alert('Event Ch10N1')" id="ButtonCh10N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh10N2'); alert('Event Ch10N2')" id="ButtonCh10N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh10N3'); alert('Event Ch10N3')" id="ButtonCh10N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh10N4'); alert('Event Ch10N4')" id="ButtonCh10N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh10N5'); alert('Event Ch10N5')" id="ButtonCh10N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
  <tr>
	<td>channel #11</td>
	<td><?php
	if (($ValVolt11>1100)&&($ValVolt11<2300)&&($ValCurr11<750)){
		echo $ValVolt11 . " V/ " . $ValCurr11 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt11} V/ {$ValCurr11} mA</span>";
	}
	?></td>
	<td> <button type="button" onclick="ChangeState('ButtonCh11N1'); alert('Event Ch11N1')" id="ButtonCh11N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh11N2'); alert('Event Ch11N2')" id="ButtonCh11N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh11N3'); alert('Event Ch11N3')" id="ButtonCh11N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh11N4'); alert('Event Ch11N4')" id="ButtonCh11N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh11N5'); alert('Event Ch11N5')" id="ButtonCh11N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
  <tr>
	<td>channel #12</td>
	<td><?php
	if (($ValVolt12>1100)&&($ValVolt12<2300)&&($ValCurr12<750)){
		echo $ValVolt12 . " V/ " . $ValCurr12 . " mA";
	}
	else {
		echo "<span style='color: red'> {$ValVolt12} V/ {$ValCurr12} mA</span>";
	}
	?></td>
	<td> <button type="button" onclick="ChangeState('ButtonCh12N1'); alert('Event Ch12N1')" id="ButtonCh12N1"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh12N2'); alert('Event Ch12N2')" id="ButtonCh12N2"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh12N3'); alert('Event Ch12N3')" id="ButtonCh12N3"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh12N4'); alert('Event Ch12N4')" id="ButtonCh12N4"style="color: #00A000"  value="1">ON</button> </td>
	<td> <button type="button" onclick="ChangeState('ButtonCh12N5'); alert('Event Ch12N5')" id="ButtonCh12N5"style="color: #00A000"  value="1">ON</button> </td>
  </tr>
</table>
	<p>Version 1.05</p>
</body>

<script LANGUAGE="JavaScript">

function ChangeState(buttonId)	
{
	var CurrentVal=document.getElementById(buttonId);
	/*document.getElementById("myText").value = CurrentVal.id;*/
	if (CurrentVal.value=="1")
	{
	document.getElementById(buttonId).value = "0"; 
	replaceButtonText(buttonId, 'OFF');
    document.getElementById(buttonId).style.color = "#FF0000";
	}
	else
	{
	document.getElementById(buttonId).value = "1";
	replaceButtonText(buttonId, 'ON');
    document.getElementById(buttonId).style.color = "#00A000";
	}
}
	
function replaceButtonText(buttonId, text)
{
  if (document.getElementById)
  {
    var button=document.getElementById(buttonId);
    if (button)
    {
      if (button.childNodes[0])
      {
        button.childNodes[0].nodeValue=text;
      }
      else if (button.value)
      {
        button.value=text;
      }
      else //if (button.innerHTML)
      {
        button.innerHTML=text;
      }
    }
  }
}
</script>
<?php
//exec('cc XMLGen.c -o XMLGen.out -std=c99 2>&1', $output);
//print_r($output);
?>
</html>

﻿<!DOCTYPE html>
<?
	include "tfiles.txt";
	$lang="ru";
	if(isset($_GET[lang])){$lang=$_GET[lang];}
	include "russian.txt";
	$file=$llist[$lang]["file"];
	if($lang!="ru"){
		include "$file";
	}
	$curversion=15;
	$version=0;
	if(isset($_GET[version])){
		$version=$_GET[version]*1;
	}
?>
<html>
  <head>
    <title><?echo $setup;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
  </head>
  <body>

    <div data-role="page" id="main">

      <div data-role="header" class="jqm-header">
        <h1><?echo $setup;?></h1>
      </div>
<?
if($curversion>$version){
	echo $oldversion;
}
?>

<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-mini="false">
    <div data-role="collapsible" data-collapsed="false">
    <h3><?echo $language;?></h3>
    <?
    	foreach($llist as $key => $value){?>
		    <input type="Button" value="<?echo $value["lang"];?>" onClick="location.href='settcw.php?lang=<?echo $key;?>&version=<?echo $version;?>';">    	
    	<?}
    ?>
    <br>  
    <input type="Button" value="<?echo $load_default_translate;?>" onClick="set_dafault_translate();">
	
	</div>



    <div data-role="collapsible">
        <h3><?echo $general;?></h3>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $theme;?></legend>
        <input name="key0" id="key0-0" value="0" checked="checked" type="radio">
        <label for="key0-0"><?echo $dark;?></label>
        <input name="key0" id="key0-1" value="1" type="radio">
        <label for="key0-1"><?echo $light;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $clockfont;?>:</legend>
        <input name="key535" id="key535-0" value="0" checked="checked" type="radio">
        <label for="key535-0"><?echo $fontdigital;?></label>
        <input name="key535" id="key535-1" value="1" type="radio">
        <label for="key535-1"><?echo $fontnormal;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $date_time;?></legend>
        <input name="key541" id="key541-1" value="1" checked="checked" type="radio">
        <label for="key541-1"><?echo $dtover;?></label>
        <input name="key541" id="key541-0" value="0" type="radio">
        <label for="key541-0"><?echo $dtunder;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $isconnectbluetooth;?>:</legend>
        <input name="key543" id="key543-1" value="1" checked="checked" type="radio">
        <label for="key543-1"><?echo $on;?></label>
        <input name="key543" id="key543-0" value="0" type="radio">
        <label for="key543-0"><?echo $off;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $firstpage;?>:</legend>
        <input name="key532" id="key532-0" value="0" checked="checked" type="radio">
        <label for="key532-0"><?echo $calendar;?></label>
        <input name="key532" id="key532-1" value="1" type="radio">
        <label for="key532-1"><?echo $weather;?></label>
		<?if($version>15){?>
        <input name="key532" id="key532-2" value="2" type="radio">
        <label for="key532-2"><?echo $disablecalendar;?></label>
        <input name="key532" id="key532-3" value="3" type="radio">
        <label for="key532-3"><?echo $disableweather;?></label>
		<?}?>
		
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $autogoback;?>:</legend>
        <input name="key540" id="key540-0" value="0" checked="checked" type="radio">
        <label for="key540-0"><?echo $no;?></label>
        <input name="key540" id="key540-15" value="15" type="radio">
        <label for="key540-15">15 <?echo $seconds;?></label>
        <input name="key540" id="key540-30" value="30" type="radio">
        <label for="key540-30">30 <?echo $seconds;?></label>
        <input name="key540" id="key540-60" value="60" type="radio">
        <label for="key540-60">1 <?echo $minute;?></label>
		
</fieldset>


<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $hourlyvibration;?>:</legend>
        <input name="key3" id="key3-0" value="0" checked="checked" type="radio">
        <label for="key3-0"><?echo $off;?></label>
        <input name="key3" id="key3-1" value="1" type="radio">
        <label for="key3-1">1x</label>
        <input name="key3" id="key3-2" value="2" type="radio">
        <label for="key3-2">2x</label>
        <input name="key3" id="key3-3" value="3" type="radio">
        <label for="key3-3">3x</label>
        <input name="key3" id="key3-4" value="4" type="radio">
        <label for="key3-4">Long</label>
        <input name="key3" id="key3-5" value="5" type="radio">
        <label for="key3-5">Min</label>
        <input name="key3" id="key3-6" value="6" type="radio">
        <label for="key3-6">Min 2</label>
        <input name="key3" id="key3-7" value="7" type="radio">
        <label for="key3-7">Ow</label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $vibrlostconnect;?>:</legend>
        <input name="key11" id="key11-0" value="0" type="radio">
        <label for="key11-0"><?echo $off;?></label>
        <input name="key11" id="key11-1" value="1" type="radio">
        <label for="key11-1">1x</label>
        <input name="key11" id="key11-2" value="2" checked="checked" type="radio">
        <label for="key11-2">2x</label>
        <input name="key11" id="key11-3" value="3" type="radio">
        <label for="key11-3">3x</label>
        <input name="key11" id="key11-4" value="4" type="radio">
        <label for="key11-4">Long</label>
        <input name="key11" id="key11-5" value="5" type="radio">
        <label for="key11-5">Min</label>
        <input name="key11" id="key11-6" value="6" type="radio">
        <label for="key11-6">Min 2</label>
        <input name="key11" id="key11-7" value="7" type="radio">
        <label for="key11-7">Ow</label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $vibrconnect;?>:</legend>
        <input name="key12" id="key12-0" value="0" checked="checked" type="radio">
        <label for="key12-0"><?echo $off;?></label>
        <input name="key12" id="key12-1" value="1" type="radio">
        <label for="key12-1">1x</label>
        <input name="key12" id="key12-2" value="2" type="radio">
        <label for="key12-2">2x</label>
        <input name="key12" id="key12-3" value="3" type="radio">
        <label for="key12-3">3x</label>
        <input name="key12" id="key12-4" value="4" type="radio">
        <label for="key12-4">Long</label>
        <input name="key12" id="key12-5" value="5" type="radio">
        <label for="key12-5">Min</label>
        <input name="key12" id="key12-6" value="6" type="radio">
        <label for="key12-6">Min 2</label>
        <input name="key12" id="key12-7" value="7" type="radio">
        <label for="key12-7">Ow</label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo$watchbatstate;?>:</legend>
        <input name="key534" id="key534-0" value="0" type="radio">
        <label for="key534-0"><?echo $off;?></label>
        <input name="key534" id="key534-11" value="11" type="radio">
        <label for="key534-11">10</label>
        <input name="key534" id="key534-21" value="21" type="radio">
        <label for="key534-21">20</label>
        <input name="key534" id="key534-31" value="31" checked="checked" type="radio">
        <label for="key534-31">30</label>
        <input name="key534" id="key534-51" value="51" type="radio">
        <label for="key534-51">50</label>
        <input name="key534" id="key534-101" value="101" type="radio">
        <label for="key534-101"><?echo $always;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $telbatstate;?>:</legend>
        <input name="key539" id="key539-0" value="0" type="radio">
        <label for="key539-0"><?echo $off;?></label>
        <input name="key539" id="key539-11" value="11" type="radio">
        <label for="key539-11">10</label>
        <input name="key539" id="key539-21" value="21" type="radio">
        <label for="key539-21">20</label>
        <input name="key539" id="key539-31" value="31" checked="checked" type="radio">
        <label for="key539-31">30</label>
        <input name="key539" id="key539-51" value="51" type="radio">
        <label for="key539-51">50</label>
        <input name="key539" id="key539-101" value="101" type="radio">
        <label for="key539-101"><?echo $always;?></label>
</fieldset>

    </div>
    <div data-role="collapsible">
        <h3><?echo $translate;?></h3>



<fieldset data-role="controlgroup" data-mini="true">
    <legend><h4><?echo $weekabbr;?>:</h4></legend>
    <div class="ui-field-contain">
      <label for="key542" id="label_key542"><?echo $weekabbr_v;?></label>
      <input name="key542" id="trans_key542" placeholder="<?echo $entertranslation;?>" value="<?echo $weekabbr_v;?>" data-mini="true" type="text" maxlength="2">
    </div>
</fieldset>	
<fieldset data-role="controlgroup" data-mini="true">	
    <legend><h4><?echo $dowabbr;?>:</h4></legend>
    <div class="ui-field-contain">
      <label for="key501" id="label_key501"><?echo $monday;?>:</label>
      <input name="key501" id="trans_key501" placeholder="<?echo $entertranslation;?>" value="<?echo $mondayabbr;?>" data-mini="true" type="text" maxlength="2">
    </div>
    <div class="ui-field-contain">
      <label for="key502" id="label_key502"><?echo $tuesday;?>:</label>
      <input name="key502" id="trans_key502" placeholder="<?echo $entertranslation;?>" value="<?echo $tuesdayabbr;?>" data-mini="true" type="text" maxlength="2">
    </div>
    <div class="ui-field-contain">
      <label for="key503" id="label_key503"><?echo $wednesday;?>:</label>
      <input name="key503" id="trans_key503" placeholder="<?echo $entertranslation;?>" value="<?echo $wednesdayabbr;?>" data-mini="true" type="text" maxlength="2">
    </div>
    <div class="ui-field-contain">
      <label for="key504" id="label_key504"><?echo $thursday;?>:</label>
      <input name="key504" id="trans_key504" placeholder="<?echo $entertranslation;?>" value="<?echo $thursdayabbr;?>" data-mini="true" type="text" maxlength="2">
    </div>
    <div class="ui-field-contain">
      <label for="key505" id="label_key505"><?echo $friday;?>:</label>
      <input name="key505" id="trans_key505" placeholder="<?echo $entertranslation;?>" value="<?echo $fridayabbr;?>" data-mini="true" type="text" maxlength="2">
    </div>
    <div class="ui-field-contain">
      <label for="key506" id="label_key506"><?echo $saturday;?>:</label>
      <input name="key506" id="trans_key506" placeholder="<?echo $entertranslation;?>" value="<?echo $saturdayabbr;?>" data-mini="true" type="text" maxlength="2">
    </div>
    <div class="ui-field-contain">
      <label for="key500" id="label_key500"><?echo $sunday;?>:</label>
      <input name="key500" id="trans_key500" placeholder="<?echo $entertranslation;?>" value="<?echo $sundayabbr;?>" data-mini="true" type="text" maxlength="2">
    </div>	
</fieldset>

<fieldset data-role="controlgroup" data-mini="true">
    <legend><h4><?echo $months;?>:</h4></legend>
    <div class="ui-field-contain">
      <label for="key507" id="label_key507"><?echo $january;?>:</label>
      <input name="key507" id="trans_key507" placeholder="<?echo $entertranslation;?>" value="<?echo $january;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key508" id="label_key508"><?echo $february;?>:</label>
      <input name="key508" id="trans_key508" placeholder="<?echo $entertranslation;?>" value="<?echo $february;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key509" id="label_key509"><?echo $march;?>:</label>
      <input name="key509" id="trans_key509" placeholder="<?echo $entertranslation;?>" value="<?echo $march;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key510" id="label_key510"><?echo $april;?>:</label>
      <input name="key510" id="trans_key510" placeholder="<?echo $entertranslation;?>" value="<?echo $april;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key511" id="label_key511"><?echo $may;?>:</label>
      <input name="key511" id="trans_key511" placeholder="<?echo $entertranslation;?>" value="<?echo $may;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key512" id="label_key512"><?echo $june;?>:</label>
      <input name="key512" id="trans_key512" placeholder="<?echo $entertranslation;?>" value="<?echo $june;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key513" id="label_key513"><?echo $july;?>:</label>
      <input name="key513" id="trans_key513" placeholder="<?echo $entertranslation;?>" value="<?echo $july;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key514" id="label_key514"><?echo $august;?>:</label>
      <input name="key514" id="trans_key514" placeholder="<?echo $entertranslation;?>" value="<?echo $august;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key515" id="label_key515"><?echo $september;?>:</label>
      <input name="key515" id="trans_key515" placeholder="<?echo $entertranslation;?>" value="<?echo $september;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key516" id="label_key516"><?echo $october;?>:</label>
      <input name="key516" id="trans_key516" placeholder="<?echo $entertranslation;?>" value="<?echo $october;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key517" id="label_key517"><?echo $november;?>:</label>
      <input name="key517" id="trans_key517" placeholder="<?echo $entertranslation;?>" value="<?echo $november;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key518" id="label_key518"><?echo $december;?>:</label>
      <input name="key518" id="trans_key518" placeholder="<?echo $entertranslation;?>" value="<?echo $december;?>" data-mini="true" type="text" maxlength="11">
    </div>
</fieldset>

<fieldset data-role="controlgroup" data-mini="true">
    <legend><h4><?echo $dow;?>:</h4></legend>

    <div class="ui-field-contain">
      <label for="key521" id="label_key521"><?echo $monday;?>:</label>
      <input name="key521" id="trans_key521" placeholder="<?echo $entertranslation;?>" value="<?echo $monday;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key522" id="label_key522"><?echo $tuesday;?>:</label>
      <input name="key522" id="trans_key522" placeholder="<?echo $entertranslation;?>" value="<?echo $tuesday;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key523" id="label_key523"><?echo $wednesday;?>:</label>
      <input name="key523" id="trans_key523" placeholder="<?echo $entertranslation;?>" value="<?echo $wednesday;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key524" id="label_key524"><?echo $thursday;?>:</label>
      <input name="key524" id="trans_key524" placeholder="<?echo $entertranslation;?>" value="<?echo $thursday;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key525" id="label_key525"><?echo $friday;?>:</label>
      <input name="key525" id="trans_key525" placeholder="<?echo $entertranslation;?>" value="<?echo $friday;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key526" id="label_key526"><?echo $saturday;?>:</label>
      <input name="key526" id="trans_key526" placeholder="<?echo $entertranslation;?>" value="<?echo $saturday;?>" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key520" id="label_key520"><?echo $sunday;?>:</label>
      <input name="key520" id="trans_key520" placeholder="<?echo $entertranslation;?>" value="<?echo $sunday;?>" data-mini="true" type="text" maxlength="11">
    </div>	
</fieldset>

<fieldset data-role="controlgroup" data-mini="true">
    <legend><h4><?echo $weather;?>:</h4></legend>
    <div class="ui-field-contain">
      <label for="key538" id="label_key538"><?echo $findlocation;?>:</label>
      <input name="key538" id="trans_key538" placeholder="<?echo $entertranslation;?>" value="<?echo $findlocation;?>" data-mini="true" type="text" maxlength="22">
    </div>
</fieldset>

    </div>
    <div data-role="collapsible">
        <h3><?echo $clock;?></h3>

<fieldset data-role="controlgroup" data-mini="true">
    <legend><?echo $dateformat;?>:</legend>
        <input name="key5" id="key5-0" value="0" checked="checked" type="radio">
        <label for="key5-0"><?echo $MMMMDDYYYY;?></label>
        <input name="key5" id="key5-1" value="1" type="radio">
        <label for="key5-1"><?echo $DDMMYYYY;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $showdayname;?>:</legend>
        <input name="key7" id="key7-0" value="0" checked="checked" type="radio">
        <label for="key7-0"><?echo $off;?></label>
        <input name="key7" id="key7-1" value="1" type="radio">
        <label for="key7-1"><?echo $on;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $showweeknumber;?>:</legend>
        <input name="key8" id="key8-0" value="0" checked="checked" type="radio">
        <label for="key8-0"><?echo $off;?></label>
        <input name="key8" id="key8-1" value="1" type="radio">
        <label for="key8-1"><?echo $on;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-mini="true">
    <legend><?echo $weekformat;?>:</legend>
        <input name="key9" id="key9-0" value="0" checked="checked" type="radio">
        <label for="key9-0">ISO 8601</label>
        <input name="key9" id="key9-1" value="1" type="radio">
        <label for="key9-1"><?echo $sun1stofw;?></label>
        <input name="key9" id="key9-2" value="2" type="radio">
        <label for="key9-2"><?echo $mon1stofw;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $showAMPM;?>:</legend>
        <input name="key6" id="key6-0" value="0" checked="checked" type="radio">
        <label for="key6-0"><?echo $off;?></label>
        <input name="key6" id="key6-1" value="1" type="radio">
        <label for="key6-1"><?echo $on;?></label>
</fieldset>

    </div>
    <div data-role="collapsible">
        <h3><?echo $calendar;?></h3>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $inverttoday;?>:</legend>
        <input name="key1" id="key1-1" value="1" checked="checked" type="radio">
        <label for="key1-1"><?echo $on;?></label>
        <input name="key1" id="key1-0" value="0" type="radio">
        <label for="key1-0"><?echo $off;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $grid;?>:</legend>
        <input name="key2" id="key2-1" value="1" checked="checked" type="radio">
        <label for="key2-1"><?echo $on;?></label>
        <input name="key2" id="key2-0" value="0" type="radio">
        <label for="key2-0"><?echo $off;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $startofweek;?>:</legend>
        <input name="key4" id="key4-1" value="1" checked="checked" type="radio">
        <label for="key4-1"><?echo $mondayabbr;?></label>
        <input name="key4" id="key4-2" value="2" type="radio">
        <label for="key4-2"><?echo $tuesdayabbr;?></label>
        <input name="key4" id="key4-3" value="3" type="radio">
        <label for="key4-3"><?echo $wednesdayabbr;?></label>
        <input name="key4" id="key4-4" value="4" type="radio">
        <label for="key4-4"><?echo $thursdayabbr;?></label>
        <input name="key4" id="key4-5" value="5" type="radio">
        <label for="key4-5"><?echo $fridayabbr;?></label>
        <input name="key4" id="key4-6" value="6" type="radio">
        <label for="key4-6"><?echo $saturdayabbr;?></label>
        <input name="key4" id="key4-0" value="0" type="radio">
        <label for="key4-0"><?echo $sundayabbr;?></label>		
</fieldset>

    </div>
	<div data-role="collapsible">
		<h3><?echo $weather;?></h3>
<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $setweatherposition;?>:</legend>
        <input name="key536" id="key536-1" value="1" checked="checked" type="radio">
        <label for="key536-1">GPS</label>
        <input name="key536" id="key536-0" value="0" type="radio">
        <label for="key536-0"><?echo $selected;?></label>
</fieldset>	
    <div class="ui-field-contain">
      <label for="key537" id="label_key537"><?echo $selected;?>:</label><br>
      <input name="key537" id="trans_key537" placeholder="from openweathermap.org" value="" data-mini="true" type="text" maxlength="25">
    </div>
<!--	<fieldset class="ui-grid-a">
		<div class="ui-block-a">--> <input type="Button" value="<?echo $getlocationGPS;?>" onClick="getlocation();"> <!--</div>
	</fieldset>	-->
<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $unitsofmeasurement;?>:</legend>
        <input name="key531" id="key531-1" value="1" checked="checked" type="radio">
        <label for="key531-1">C</label>
        <input name="key531" id="key531-0" value="0" type="radio">
        <label for="key531-0">F</label>
</fieldset>		

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $timebetweenchecksforweathermin;?>:</legend>
        <input name="key533" id="key533-600" value="600" checked="checked" type="radio">
        <label for="key533-600">10</label>
        <input name="key533" id="key533-1200" value="1200" type="radio">
        <label for="key533-1200">20</label>
        <input name="key533" id="key533-1800" value="1800" type="radio">
        <label for="key533-1800">30</label>
        <input name="key533" id="key533-3600" value="3600" type="radio">
        <label for="key533-3600">1 <?echo $hour;?></label>
        <input name="key533" id="key533-7200" value="7200" type="radio">
        <label for="key533-7200">2 <?echo $hour;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $showlocation;?>:</legend>
        <input name="key544" id="key544-1" value="1" checked="checked" type="radio">
        <label for="key544-1"><?echo $on;?></label>
        <input name="key544" id="key544-0" value="0" type="radio">
        <label for="key544-0"><?echo $off;?></label>
</fieldset>

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><?echo $showupdatetime;?>:</legend>
        <input name="key545" id="key545-1" value="1" checked="checked" type="radio">
        <label for="key545-1"><?echo $on;?></label>
        <input name="key545" id="key545-0" value="0" type="radio">
        <label for="key545-0"><?echo $off;?></label>
</fieldset>

	</div>
</div>
<br />
        <div class="ui-body ui-body-c">
          <fieldset class="ui-grid-a">
              <div class="ui-block-a"><button type="submit" data-theme="d" id="b-cancel">
				  <?echo $cancel;?></button></div>
              <div class="ui-block-b"><button type="submit" data-theme="a" id="b-submit">
				  <?echo $submit;?></button></div>
          </fieldset>
        </div>
      </div>
    </div>

    <script>
	  function utf8_to_b64(str) {
        return window.btoa(unescape(encodeURIComponent(str)));
      }
      function saveOptions() {
        var options = {
          'style_inv':     Number( $("input[name=key0]:checked").val() ),
          'style_day_inv': Number( $("input[name=key1]:checked").val() ),
          'style_grid':    Number( $("input[name=key2]:checked").val() ),
          'vibe_hour':     Number( $("input[name=key3]:checked").val() ),
          'intl_dowo':     Number( $("input[name=key4]:checked").val() ),
          'intl_fmt_date': Number( $("input[name=key5]:checked").val() ),
          'style_am_pm':   Number( $("input[name=key6]:checked").val() ),
          'style_day':     Number( $("input[name=key7]:checked").val() ),
          'style_week':    Number( $("input[name=key8]:checked").val() ),
          'intl_fmt_week': Number( $("input[name=key9]:checked").val() ),
          'vibe_pat_disconnect': Number( $("input[name=key11]:checked").val() ),
          'vibe_pat_connect':    Number( $("input[name=key12]:checked").val() ),
          'trans_january':    $("input[name=key507]").val(),
          'trans_february':   $("input[name=key508]").val(),
          'trans_march':      $("input[name=key509]").val(),
          'trans_april':      $("input[name=key510]").val(),
          'trans_may':        $("input[name=key511]").val(),
          'trans_june':       $("input[name=key512]").val(),
          'trans_july':       $("input[name=key513]").val(),
          'trans_august':     $("input[name=key514]").val(),
          'trans_september':  $("input[name=key515]").val(),
          'trans_october':    $("input[name=key516]").val(),
          'trans_november':   $("input[name=key517]").val(),
          'trans_december':   $("input[name=key518]").val(),
		  'trans_week':       $("input[name=key542]").val(),
          'trans_abbr_sunday':   $("input[name=key500]").val(),
          'trans_abbr_monday':   $("input[name=key501]").val(),
          'trans_abbr_tuesday':  $("input[name=key502]").val(),
          'trans_abbr_wedsday':  $("input[name=key503]").val(),
          'trans_abbr_thursday': $("input[name=key504]").val(),
          'trans_abbr_friday':   $("input[name=key505]").val(),
          'trans_abbr_saturday': $("input[name=key506]").val(),
          'trans_sunday':     $("input[name=key520]").val(),
          'trans_monday':     $("input[name=key521]").val(),
          'trans_tuesday':    $("input[name=key522]").val(),
          'trans_wedsday':    $("input[name=key523]").val(),
          'trans_thursday':   $("input[name=key524]").val(),
          'trans_friday':     $("input[name=key525]").val(),
          'trans_saturday':   $("input[name=key526]").val(),
		  'degree_style':    Number( $("input[name=key531]:checked").val()),		
		  'first_page':    Number( $("input[name=key532]:checked").val()),	
		  'weather_upd':     Number( $("input[name=key533]:checked").val() ),		  
		  'battery_show':     Number( $("input[name=key534]:checked").val() ),
		  'phone_battery_show':     Number( $("input[name=key539]:checked").val() ),		  
		  'default_font':     Number( $("input[name=key535]:checked").val() ),
		  'get_position':     Number( $("input[name=key536]:checked").val() ),
		  'type_position':       $("input[name=key537]").val(),
		  'trans_getposition':       $("input[name=key538]").val(),		  
		  'auto_back':     Number( $("input[name=key540]:checked").val() ),		  
		  'data_over_time':     Number( $("input[name=key541]:checked").val() ),	
		  'show_bt_connected':     Number( $("input[name=key543]:checked").val() ),	
		  'show_location':     Number( $("input[name=key544]:checked").val() ),	
		  'show_update_time':     Number( $("input[name=key545]:checked").val() ),	
        }
        return options;
      }

      $().ready(function() {
       if (typeof window.localStorage !== "undefined") {
        if (window.localStorage.pebble_timely_options) {
          ls_pto = JSON.parse(window.localStorage.pebble_timely_options);
          // the Pebble webview dies on the next line...

		  $("input[name=key543][id=key543-"+ls_pto["show_bt_connected"]+"]").prop('checked',true);
		  $("input[name=key543]").checkboxradio('refresh');		  
		  
		  $("input[name=key544][id=key544-"+ls_pto["show_location"]+"]").prop('checked',true);
		  $("input[name=key544]").checkboxradio('refresh');

		  $("input[name=key545][id=key545-"+ls_pto["show_update_time"]+"]").prop('checked',true);
		  $("input[name=key545]").checkboxradio('refresh');		  
		  
		  $("input[name=key532][id=key532-"+ls_pto["first_page"]+"]").prop('checked',true);
		  $("input[name=key532]").checkboxradio('refresh');
		  
		  $("input[name=key531][id=key531-"+ls_pto["degree_style"]+"]").prop('checked',true);
		  $("input[name=key531]").checkboxradio('refresh');
		  
          $("input[name=key533][id=key533-"+ls_pto["weather_upd"]+"]").prop('checked',true);
          $("input[name=key533]").checkboxradio('refresh');		  

          $("input[name=key534][id=key534-"+ls_pto["battery_show"]+"]").prop('checked',true);
          $("input[name=key534]").checkboxradio('refresh');	

          $("input[name=key539][id=key539-"+ls_pto["phone_battery_show"]+"]").prop('checked',true);
          $("input[name=key539]").checkboxradio('refresh');	

          $("input[name=key540][id=key540-"+ls_pto["auto_back"]+"]").prop('checked',true);
          $("input[name=key540]").checkboxradio('refresh');	
		  
          $("input[name=key541][id=key541-"+ls_pto["data_over_time"]+"]").prop('checked',true);
          $("input[name=key541]").checkboxradio('refresh');			  
		  
          $("input[name=key535][id=key535-"+ls_pto["default_font"]+"]").prop('checked',true);
          $("input[name=key535]").checkboxradio('refresh');			  
		  
          $("input[name=key536][id=key536-"+ls_pto["get_position"]+"]").prop('checked',true);
          $("input[name=key536]").checkboxradio('refresh');	

          $("input[name=key537]").val(ls_pto["type_position"]);		  

          $("input[name=key538]").val(ls_pto["trans_getposition"]);		  
		  
          $("input[name=key0][id=key0-"+ls_pto["style_inv"]+"]").prop('checked',true);
          $("input[name=key0]").checkboxradio('refresh');
          $("input[name=key1][id=key1-"+ls_pto["style_day_inv"]+"]").prop('checked',true);
          $("input[name=key1]").checkboxradio('refresh');
          $("input[name=key2][id=key2-"+ls_pto["style_grid"]+"]").prop('checked',true);
          $("input[name=key2]").checkboxradio('refresh');
          $("input[name=key3][id=key3-"+ls_pto["vibe_hour"]+"]").prop('checked',true);
          $("input[name=key3]").checkboxradio('refresh');
          $("input[name=key4][id=key4-"+ls_pto["intl_dowo"]+"]").prop('checked',true);
          $("input[name=key4]").checkboxradio('refresh');
          $("input[name=key5][id=key5-"+ls_pto["intl_fmt_date"]+"]").prop('checked',true);
          $("input[name=key5]").checkboxradio('refresh');
          $("input[name=key6][id=key6-"+ls_pto["style_am_pm"]+"]").prop('checked',true);
          $("input[name=key6]").checkboxradio('refresh');
          $("input[name=key7][id=key7-"+ls_pto["style_day"]+"]").prop('checked',true);
          $("input[name=key7]").checkboxradio('refresh');
          $("input[name=key8][id=key8-"+ls_pto["style_week"]+"]").prop('checked',true);
          $("input[name=key8]").checkboxradio('refresh');
          $("input[name=key9][id=key9-"+ls_pto["intl_fmt_week"]+"]").prop('checked',true);
          $("input[name=key9]").checkboxradio('refresh');
          if ("vibe_pat_disconnect" in ls_pto) {
            $("input[name=key11][id=key11-"+ls_pto["vibe_pat_disconnect"]+"]").prop('checked',true);
            $("input[name=key11]").checkboxradio('refresh');
            $("input[name=key12][id=key12-"+ls_pto["vibe_pat_connect"]+"]").prop('checked',true);
            $("input[name=key12]").checkboxradio('refresh');
          }

          if ("trans_january" in ls_pto) {
            $("input[name=key507]").val(ls_pto["trans_january"]);
            $("input[name=key508]").val(ls_pto["trans_february"]);
            $("input[name=key509]").val(ls_pto["trans_march"]);
            $("input[name=key510]").val(ls_pto["trans_april"]);
            $("input[name=key511]").val(ls_pto["trans_may"]);
            $("input[name=key512]").val(ls_pto["trans_june"]);
            $("input[name=key513]").val(ls_pto["trans_july"]);
            $("input[name=key514]").val(ls_pto["trans_august"]);
            $("input[name=key515]").val(ls_pto["trans_september"]);
            $("input[name=key516]").val(ls_pto["trans_october"]);
            $("input[name=key517]").val(ls_pto["trans_november"]);
            $("input[name=key518]").val(ls_pto["trans_december"]);
			$("input[name=key542]").val(ls_pto["trans_week"]);
          }
          if ("trans_abbr_sunday" in ls_pto) {
            $("input[name=key500]").val(ls_pto["trans_abbr_sunday"]);
            $("input[name=key501]").val(ls_pto["trans_abbr_monday"]);
            $("input[name=key502]").val(ls_pto["trans_abbr_tuesday"]);
            $("input[name=key503]").val(ls_pto["trans_abbr_wedsday"]);
            $("input[name=key504]").val(ls_pto["trans_abbr_thursday"]);
            $("input[name=key505]").val(ls_pto["trans_abbr_friday"]);
            $("input[name=key506]").val(ls_pto["trans_abbr_saturday"]);
          }
          if ("trans_sunday" in ls_pto) {
            $("input[name=key520]").val(ls_pto["trans_sunday"]);
            $("input[name=key521]").val(ls_pto["trans_monday"]);
            $("input[name=key522]").val(ls_pto["trans_tuesday"]);
            $("input[name=key523]").val(ls_pto["trans_wedsday"]);
            $("input[name=key524]").val(ls_pto["trans_thursday"]);
            $("input[name=key525]").val(ls_pto["trans_friday"]);
            $("input[name=key526]").val(ls_pto["trans_saturday"]);
          }
        }

       }
        $("#b-cancel").click(function() {
          console.log("Cancel");
          document.location = "pebblejs://close";
        });

        $("#b-submit").click(function() {
          console.log("Submit");

          ls_pto = JSON.stringify(saveOptions());
          if (typeof window.localStorage !== "undefined") {
            window.localStorage.pebble_timely_options = ls_pto;
			window.localStorage.pebble_tcw_lang="<?echo $lang;?>";
          }
//          var location = "pebblejs://close#" + encodeURIComponent(ls_pto);
          var location = "pebblejs://close#" + utf8_to_b64(ls_pto);
          console.log("Warping to: " + location);
          console.log(location);
          document.location = location;
        });

      });
	  function set_dafault_translate(){
            $("input[name=key507]").val("<?echo $january;?>");
            $("input[name=key508]").val("<?echo $february;?>");
            $("input[name=key509]").val("<?echo $march;?>");
            $("input[name=key510]").val("<?echo $april;?>");
            $("input[name=key511]").val("<?echo $may;?>");
            $("input[name=key512]").val("<?echo $june;?>");
            $("input[name=key513]").val("<?echo $july;?>");
            $("input[name=key514]").val("<?echo $august;?>");
            $("input[name=key515]").val("<?echo $september;?>");
            $("input[name=key516]").val("<?echo $october;?>");
            $("input[name=key517]").val("<?echo $november;?>");
            $("input[name=key518]").val("<?echo $december;?>");
            $("input[name=key500]").val("<?echo $sundayabbr;?>");
            $("input[name=key501]").val("<?echo $mondayabbr;?>");
            $("input[name=key502]").val("<?echo $tuesdayabbr;?>");
            $("input[name=key503]").val("<?echo $wednesdayabbr;?>");
            $("input[name=key504]").val("<?echo $thursdayabbr;?>");
            $("input[name=key505]").val("<?echo $fridayabbr;?>");
            $("input[name=key506]").val("<?echo $saturdayabbr;?>");
            $("input[name=key520]").val("<?echo $sunday;?>");
            $("input[name=key521]").val("<?echo $monday;?>");
            $("input[name=key522]").val("<?echo $tuesday;?>");
            $("input[name=key523]").val("<?echo $wednesday;?>");
            $("input[name=key524]").val("<?echo $thursday;?>");
            $("input[name=key525]").val("<?echo $friday;?>");
            $("input[name=key526]").val("<?echo $saturday;?>");
			$("input[name=key538]").val("<?echo $findlocation;?>");	
			$("input[name=key542]").val("<?echo $weekabbr_v;?>");
	  }
      var coords;
	  function getlocation(){
		window.navigator.geolocation.getCurrentPosition(
			function(pos) {coords = pos.coords; console.log(coords.latitude+ "  "+coords.longitude);
				var response;
				var req = new XMLHttpRequest();
				console.log("http://api.openweathermap.org/data/2.5/find?" +"lat=" + coords.latitude + "&lon=" + coords.longitude + "&cnt=1");
				req.open('GET', "http://api.openweathermap.org/data/2.5/find?" +
						"lat=" + coords.latitude + "&lon=" + coords.longitude + "&cnt=1", true);
				req.timeout = 30000;		 
				req.ontimeout = function() {
					console.log("Error request timeout");
				}
				req.onload = function(e) {
					if (req.readyState == 4) {
						if(req.status == 200) {
							response = JSON.parse(req.responseText);
					
							if (response && response.list && response.list.length > 0) {
								var weatherResult = response.list[0];
								console.log("weatherResult.name "+weatherResult.name);
								$("input[name=key537]").val(weatherResult.name);
							}
						}
						else {
							console.log("Error getting weather info (status " + req.status + ")");
						}
					}
				}				
				req.send(null);	
			},
			function(err) {  },
			{ "timeout": 45000
			}
		);
	
	}
    </script>
  </body>
</html>

<div id="countdown" class="days">
<h1 class="challengeheader">50-Day Challenge</h1><br/>
<h1 class="countup">Day <?php 
date_default_timezone_set('America/Los_Angeles');
$start = strtotime('03/31/2013');
$end = time();
$days_since = ceil(abs($end - $start) / 86400);
echo $days_since; ?></h1></div>


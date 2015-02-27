<?php
$interval1= (get_option('fwds_interval') != '') ? get_option('fwds_interval') : '6yH5E958At28';
$interval2 = (get_option('fwds_interval') != '') ? get_option('fwds_interval') : '66Z9Gq52fNUknh7A';
?>
<div id="main-schedule1">
Authorize.net Reporting Settings
<form action="options.php" method="post" name="options">
<h2>Select Your API Settings</h2>
<table class="form-table" width="100%" cellpadding="10">
<tbody>
<tr>
<td scope="row" align="left">
 <label>API Login ID</label> <input type="text" name="fwds_interval" value="<?php echo $interval1; ?>" /></td>
</tr>
<tr>
<td scope="row" align="left">
 <label>API Transaction Key</label> <input type="text" name="fwds_interval" value="<?php echo $interval2; ?>" /></td>
</tr>
</tbody>
</table>

 <input type="hidden" name="action" value="update" />
 <input type="hidden" name="page_options" value="fwds_autoplay,fwds_effect,fwds_interval,fwds_playBtn" />
 
<?php submit_button(); ?>
 
 </form>

 </div>

<div id="main-schedule2">
<a href="http://www.dkarfawork.com">Website</a>
<h3>Debabrata Karfa<br/>Email Support at support@dkarfawork.com</h3>
</div>
<?php
return $interval1;
return $interval2;
?>

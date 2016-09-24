<link href="stylesheet.css" rel="stylesheet" type="text/css" />
<?php
 
$mois = date("m");
$anne = date("Y");
?>
<div style="margin-bottom:5%" >
    <img id="pre" src="flep.png" height="40px" width="40px" style="float:left">
    <img id="post" src="flep2.png" height="40px" width="40px" style="float:right">
 </div>
  
<div id="cal_cont" >
 
</div>
 
<script src="jquery.js"></script>
<script>
 
var mois = <?php echo $mois;?>;
 
var anne = <?php echo $anne;?>;
 
$(document).ready(function(){
 
 
$("#cal_cont").load("calendrier_vue.php?mois="+mois+"&anne="+anne,function(){});
 
 
$("#pre").click(function(){
 
mois--;
 
if(mois < 1)
{
anne--;
mois = 12;
}
 
 
 
$("#cal_cont").load("calendrier_vue.php?mois="+mois+"&anne="+anne,function(){});
 
});
 
$("#post").click(function(){
 
mois++;
 
if(mois > 12)
{
anne++;
mois = 1;
}
 
$("#cal_cont").load("calendrier_vue.php?mois="+mois+"&anne="+anne,function(){});
 
});
 
});
</script>
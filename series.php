<?php include('header.php'); ?>
<div id="selectedserie" style="text-align:right; height:20px; padding-bottom:20px;color:#FFF;">&nbsp;</div>
<div id="content" style="height:400px;">
<div id="lyr1">
<div style="text-align:right; width:770px;">

<?php 

$select="SELECT * FROM series WHERE se_id<>1 AND se_type='".$_GET['t']."' ORDER BY se_position ASC";
$query=mysql_query($select);

$contador=0;
while($row=mysql_fetch_array($query)){
	
	$title="";
	if($row['se_serieid']>0){
	
		$s="SELECT se_title FROM series WHERE se_id=".$row['se_serieid'];
		$q=mysql_query($s);
		$r=mysql_fetch_array($q);
		$title=$r['se_title'].": ";
	}
	
	echo "<div id='serie".$row['se_id']."_title' style='display:none;'>".$title.$row['se_title']."</div>"; 
	?>
		<div class="serie" id="serie<?php echo $row['se_id']; ?>" onMouseOver="showOPACITY('serie<?php echo $row['se_id']; ?>')" onMouseOut="deshowOPACITY()">    
	<?php
		
			$select3="SELECT * FROM obras WHERE ob_idserie=".$row['se_id']." ORDER by ob_year_start ASC, ob_id ASC LIMIT 10";
			
			$query3=mysql_query($select3);

			
			while($row3=mysql_fetch_array($query3)){
				$datos = GetImageSize("obras/".$row3['ob_image']."_2.jpg");
				$ancho=$datos[0];
				$alto=$datos[1];
				
				if($alto>64){
					$alto=64;
					$ratio = ($datos[1]/$alto); 
					$ancho = ($datos[0]/$ratio);					
				}
				
				?><img onClick="location.href='gallery.php?t=<?=$_GET['t']?>&id=<?=$row3['ob_idserie']?>&idp=<?=$row3['ob_id']?>'" src='obras/<?=$row3['ob_image']?>_2.jpg' border='0' width='<?=$ancho?>' heigth='<?=$alto?>'><?php
				
			}
			
	?>
        </div>
	<?php
$contador++;
}
?>
</div>
</div>
</div>
<?php if($contador>7){ ?>
<div id="scrollLinks" style="float:right;">
<a class="mouseover_up" href="#"></a>
<a class="mouseover_down" href="#"></a>
</div>
<?php } ?>

<?php include('footer.php'); ?>
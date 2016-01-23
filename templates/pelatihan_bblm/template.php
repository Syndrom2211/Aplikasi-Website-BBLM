<?php error_reporting(0) ?>
<?php include "".$f[folder]."/header.php" ?>
<?php include "".$f[folder]."/widgets.php" ?>
<?php include "".$f[folder]."/script/pageNavi.php" ?>
    <div id="page">
    	<div class="inner">
		<?php
		if($_GET['module']=='home'){
		?>
		<!-- Bagian Redaksi -->
		<?php echo add_widget('redaksi','sidebar'); ?>
		<!-- Bagian Redaksi -->
		<?php
		}
		?>
			<?php include "".$f[folder]."/content.php" ?>
 			<?php include "".$f[folder]."/sidebar.php" ?>
 			<?php 
			if($_GET['module'] == 'detailberita') {
				include "".$f[folder]."/comments.php";
			}
			?>
            
			<?php
			if($_GET['module']=='home') {
			?>
		<div id="peta">
			<div class="title"><h2>Peta Lokasi BBLM</h2></div>
			<iframe width="913" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Balai+Besar+Logam+Mesin&amp;aq=&amp;sll=37.000000,-95.000000&amp;sspn=28.000000,56.000000&amp;t=h&amp;dirflg=w&amp;ie=UTF8&amp;hq=Balai+Besar+Logam+Mesin&amp;hnear=&amp;radius=15000&amp;filter=0&amp;update=1&amp;ll=-6.882204,107.609518&amp;spn=0.007456,0.00912&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Balai+Besar+Logam+Mesin&amp;aq=&amp;sll=37.000000,-95.000000&amp;sspn=28.000000,56.000000&amp;t=h&amp;dirflg=w&amp;ie=UTF8&amp;hq=Balai+Besar+Logam+Mesin&amp;hnear=&amp;radius=15000&amp;filter=0&amp;update=1&amp;ll=-6.882204,107.609518&amp;spn=0.007456,0.00912&amp;z=16" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		</div>
			<?php
			}
?>
			<div class="clearboth"></div>
		</div>
    </div>

 	<?php include "".$f[folder]."/footer.php" ?>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("area[rel^='prettyPhoto']").prettyPhoto();
			
			$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:10000, autoplay_slideshow: true});
			$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
	
			$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
				custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
				changepicturecallback: function(){ initialize(); }
			});

			$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
				custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
				changepicturecallback: function(){ _bsap.exec(); }
			});
		});
	</script>
	
</body>
</html>

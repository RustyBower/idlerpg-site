<?php
    include("config.php");
    $irpg_page_title = "World Map";
    include("header.php");
?>

<h1>World Map</h1>
<p>[offline users are red, online users are blue]</p>


<div id="map">
    <img src="newmap.png" class="themap" />
    <img src="makeworldmap.php" class="theplayers" alt="IdleRPG World Map" title="IdleRPG World Map" border="0" />
<?php
    $file = fopen($irpg_db,"r");
    fgets($file);
    while($location=fgets($file)) {
        list($who,,,,,,,,,,$x,$y) = explode("\t",trim($location));
        print '    <span style="left:'.($x/$mapx*100).'%;top:'.($y/$mapx*100).'%;"><a title="'.htmlentities($who).
        '" href="playerview.php?player='.urlencode($who).'">'.htmlentities($who).'</a></span>'."\n";
    }
    fclose($file);
?>
</div>

<?php include("footer.php");?>

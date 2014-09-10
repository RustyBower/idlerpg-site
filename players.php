<?php
    include("config.php");
    include("commonfunctions.php");
    $irpg_page_title = "Player Info";
    include("header.php");
?>

  <h1>Players</h1>
  <h2>Pick a player to view</h2>
  <p class="small">[gray=offline]</p>
  <div>
    <div class="row-fluid">
      <div class="col-sm-2"></div>
      <div class="col-sm-2"><strong>Level</strong></div>
      <div class="col-sm-4"><strong>Class</strong></div>
      <div class="col-sm-4"><strong>Next level</strong></div>
    </div>
<?php
    $file = file($irpg_db);
    unset($file[0]);
    usort($file, 'cmp_level_desc');
    foreach ($file as $line) {
        list($user,,,$level,$class,$secs,,,$online) = explode("\t",trim($line));
        
        $class = htmlentities($class);
        $next_level = duration($secs);
?>
    <div class="row-fluid <?php echo (!$online?"offline ":"")?>clearfix">
        <div class="col-sm-2">
            <strong><a href="playerview.php?player=<?php echo urlencode($user); ?>"><?php echo htmlentities($user); ?></a></strong>
        </div>
        <div class="col-sm-2">
            <?php echo $level; ?>
        </div>
        <div class="col-sm-4">
            <?php echo $class; ?>
        </div>
        <div class="col-sm-4">
            <?php echo $next_level; ?>
        </div>
        <br />
    </div>
<?php
    }
?>
  </div>
  <hr />
  <p>For a script to view player stats from a terminal, try <a
  href="idlerpg-adv.txt">this</a> perl script by
  <a href="mailto:daxxar@mental.mine.nu">daxxar</a>.</p>

  <p>See player stats in <a href="db.php">table format</a>.</p>

<?php include("footer.php")?>

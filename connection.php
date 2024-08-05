<?php
  $server = "sql307.infinityfree.com";
  $username = "if0_36197083";
  $password = "5ZWTObW2I67F5U";
  $database = "if0_36197083_generations";

  // $con = mysqli_connect($server, $username, $password);
  $con = new mysqli($server, $username, $password, $database);

  if(!$con){
    die("connect is nille ".mysqli_connect_error());
  }
  $sql = "SELECT count(*) as alpha_count FROM `users` where `generation` = 'ga'";
  $anum = $con->query($sql);
  $row = $anum->fetch_assoc();
  $alpha = $row['alpha_count'];

  $sql = "SELECT count(*) as gz_count FROM `users` where `generation` = 'gz'";
  $gznum = $con->query($sql);
  $row = $gznum->fetch_assoc();
  $genz = $row['gz_count'];

  $sql = "SELECT count(*) as m_count FROM `users` where `generation` = 'm'";
  $mnum = $con->query($sql);
  $row = $mnum->fetch_assoc();
  $mill = $row['m_count'];

  $sql = "SELECT count(*) as gx_count FROM `users` where `generation` = 'gx'";
  $gxnum = $con->query($sql);
  $row = $gxnum->fetch_assoc();
  $genx = $row['gx_count'];

  $sql = "SELECT count(*) as bb_count FROM `users` where `generation` = 'bb'";
  $bbnum = $con->query($sql);
  $row = $bbnum->fetch_assoc();
  $babyboom = $row['bb_count'];

  $sql = "SELECT count(*) as sg_count FROM `users` where `generation` = 'sg'";
  $sgnum = $con->query($sql);
  $row = $sgnum->fetch_assoc();
  $silentgen = $row['sg_count'];

  $sql = "SELECT count(*) as gg_count FROM `users` where `generation` = 'gg'";
  $ggnum = $con->query($sql);
  $row = $ggnum->fetch_assoc();
  $greatgen = $row['gg_count'];

  $sql = "SELECT count(*) as lg_count FROM `users` where `generation` = 'lg'";
  $lgnum = $con->query($sql);
  $row = $lgnum->fetch_assoc();
  $lostgen = $row['lg_count'];
  // $con->close();
  
?>
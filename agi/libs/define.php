<?php

// define
define ("FSROOT", substr(dirname(__FILE__),0,-4));
define ("LIBDIR", FSROOT."libs/");

// include thirdparty.
include_once (LIBDIR."phpagi.php");
include_once (LIBDIR."phpagi-asmanager.php");

// include functions
include_once (LIBDIR."functions.php");

// code IVR
include_once (LIBDIR."ivr.php");

?>

<?php

session_unset ($_SESSION['user']);

session_destroy ($_SESSION['user']);

header('./index.php');
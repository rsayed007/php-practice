<?php
    include "lib/session.php";

    session_destroy();
    header("Location: login.php");

?>
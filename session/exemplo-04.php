<?php

    session_id('7m86t5cbl0albkibebceo8901j');

    require_once("config.php");

    session_regenerate_id();

    echo session_id();

    var_dump($_SESSION);
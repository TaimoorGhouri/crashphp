<?php
    session_start();

    session_destroy();
    header('location: /php/07_sanatize_inputs.php');
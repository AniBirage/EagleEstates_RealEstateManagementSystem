<?php 

    session_start();
    session_unset();
    session_destroy();

    header("location: https://eagle-estate.000webhostapp.com/");
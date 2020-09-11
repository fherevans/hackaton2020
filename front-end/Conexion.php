<?php
	$connection = pg_connect("host=localhost dbname=hackaton user=edith");
	if($connection) {
       echo "connected";
    } else {
        echo "there has been an error connecting";
    } 

?> 
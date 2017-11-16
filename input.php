<?php

    $name = $_POST['firstname'];
    $gender = $_POST['gender'];
    $courses[] = $_POST['courses'];



    echo "Hello, your name is: $name <br>" ;
    echo "Your gender: $gender <br>";
    if ($courses[0][0] == "html"){
    	echo "I need to spit in your eye";
    }
    else {
    echo "You studies on: ";
    print_r ($courses[0][0]) ;
    	}
    echo "<br />";
    echo "Thanks for use our form :)";
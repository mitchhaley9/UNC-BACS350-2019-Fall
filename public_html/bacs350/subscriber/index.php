<?php

/*
    PHP Code for more efficient CRUD
*/


    // Include view rendering code
    require 'views.php';


    // Include all of the database code
    require 'subscribers.php';


    // Add explanation
    $intro = '<h1>Subscribers</h1>
       ';



    // Add one database record
    $name = 'Bogus Test user';
    $email = 'bogus_user@gmail.com';
    $subscribers = add_subscriber($db, $name, $email);
   

    // List subscriber records
    $content = render_subscribers(list_subscribers ($db));
    
    
    // Delete record to clean up bogus user
    delete_subscriber($db, $email);


    // Display the HTML in the page
    echo render_page('BACS 350', "Subscriber Page", $intro . $content);

?>

<?php
    include('queue.php');

    $main = new Queue();
    $main->queue(10);
    $main->queue(20);
    $main->queue(30);
    $main->queue(40);
    $main->queue(50);
    echo $main->de_queue();
    // echo $main->de_queue();
    // echo $main->de_queue();
    // echo $main->de_queue();
    
    // $main->queue(50);
?>
<?php

    $db = new PDO('mysql:host=127.0.0.1;dbname=ichat','root','');

    $query = $db->prepare("SELECT * FROM messages");
    $query->execute();

    while($fetch = $query->fetch(PDO::FETCH_ASSOC))
    {
        $name = $fetch['username'];
        $message = $fetch['message'];
        echo "<li class='cm'><b>".ucwords($name)."</b>:".$message."</li>";
    }
?>
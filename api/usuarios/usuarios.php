<?php

if ($api == 'usuarios') {
    if ($method == "POST" && !isset($_POST['_method'])) {
        include_once "post.php";
    }
}

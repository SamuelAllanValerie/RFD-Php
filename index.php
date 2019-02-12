<ul>
    <li><a href="index.php?page=truc">truc</a></li>
    <li><a href="index.php?page=machin">machin</a></li>
    <li><a href="index.php?page=michel">michel</a></li>
</ul>
<?php

if (isset ($_GET['page'])) {
    $page = $_GET['page'];
}

else {
    $page = "message";
}

echo $page;
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $file = $page . '.php';
    include($file);
}

echo "<p>nothing for you.</p>";
?>
<?php
if(isset($_GET['page']))
{
    $page = $_GET['page'];
    include($page . '.php');
}
else
    {
        include('cola_shavedice.php');
    }
?>
</html>

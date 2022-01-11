<?php
    define('TITLE','Logout');
    define('PAGE','lout');    
    session_start();
    session_destroy();
    echo "<script>location.href='../index.php'</script>"
?>
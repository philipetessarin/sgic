<?php
session_start();
function mostraAlerta($tipo) {
    if(isset($_SESSION[$tipo])=="success") {
        ?>
        <p><?=$_SESSION[$tipo]?></p>
        <?php
        unset($_SESSION[$tipo]);
    }
}
?>
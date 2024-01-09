<?php

function redirect($link){
    ?>
    <script>
        window.location.herf='<?php echo $link?>';
    </script>
    <?php
    die();
}
?>
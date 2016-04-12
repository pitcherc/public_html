<?php
/**
 * Created by PhpStorm.
 * User: Charles
 * Date: 3/30/16
 * Time: 2:22 PM
 */

require_once('header.php');

?>

<div class="content">
    <div class="content-shell">
        <h1>Weekly Champions</h1>
        <?php
        for ($x = 0; $x < 5; $x++) {
        ?>
            <div class="champ">
                <div class="icon">
                    <img src="" width="150px" height="200px"/>
                </div>
                <div class="name">Champion</div>
            </div>
        <?php
        }
        ?>
        <div class="clr"></div>
        <h1>All Champions</h1>
        <?php
        for ($x = 0; $x < 123; $x++) {
            ?>
            <div class="champ">
                <div class="icon">
                    <img src="" width="150px" height="200px"/>
                </div>
                <div class="name">Champion</div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php

require_once('footer.php');

?>
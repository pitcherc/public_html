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
        <h1>LOGIN</h1>
        <form id="login" method="post">
            <input id="name" name="email" placeholder="Email" /><br/>
            <input id="password" name="password" type="password" placeholder="Password" /><br/>
            <input type="submit" name="submit">
        </form>
        <hr/>
        <h1>Sign Up</h1>
        <form id="signup" method="post">
            <input id="name" name="email" placeholder="Email" />
            <input id="cname" name="cemail" placeholder="Confirm Email" /><br/>
            <input id="password" name="password" placeholder="Password" />
            <input id="cpassword" name="cpassword" placeholder="Confirm Password" /><br/>
            <input id="sum" name="sum" placeholder="Summoner Name"/>
            <input id="csum" name="csum" placeholder="Confirm Summoner Name" /><br/>
            <input type="submit" name="submit">
        </form>
    </div>
</div>

<?php

require_once('footer.php');

?>
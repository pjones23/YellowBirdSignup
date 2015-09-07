<?php
/**
 * Created by PhpStorm.
 * User: perron
 * Date: 9/6/15
 * Time: 5:49 PM
 */
?>

<html>
<div class="md-modal md-effect-1" id="modal-1">

    <!-- Sign up -->

    <div class="md-content">

        <button class="md-close"></button>


        <h1>Early Access</h1>

        <h3>Sign up for early access to the YellowBird platform.</h3>

        <form action="refer-a-friend.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>" method="post">

            <input id="email" name="email" type="email" class="transparent" placeholder="Trade Your Email" required>
            <input id="ref" name="ref" type="hidden" value="<?php if (isset($_GET["ref"])) { echo($_GET["ref"]); } ?>">
            <button id="submit" class="button_green--long">Go</button>
        </form>

    </div>
</div>

<div class="md-modal-full md-effect-12" id="modal-12">
    <div>

        <button class="md-close">×</button>

    </div>

</div>

<div class="md-overlay"></div>
</html>
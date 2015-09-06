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

        <form onsubmit="event.preventDefault();">

            <input type="email" class="transparent" placeholder="Your Email Please" required>

            <button id="submit" onclick="location.href='refer-a-friend.php'" class="">Let's Do This</button>

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
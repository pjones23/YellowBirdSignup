<?php
/**
 * Created by PhpStorm.
 * User: perron
 * Date: 9/6/15
 * Time: 5:49 PM
 */
?>

<html>
<header class="group">

    <a href="index.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>"><div class="logo"></div></a>

    <nav class="group">

        <ul>
            <a href="about.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>"><li class="inactive">About YellowBird</li></a>
            <a href="how-it-works.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>"><li class="inactive">How It Works</li></a>
        </ul>

    </nav>

    <button class="small call-to-action md-trigger" data-modal="modal-1">Early Access</button>

</header>
</html>
<div class="container" id="nav-buttons">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-sm-offset-8">
            <?php print render($page['search']);?>
            <?php print render($page['cart']);?>
        </div>
    </div>
</div>
<div class="container" id="logo">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">
            <a href="<?php print $front_page;?>" rel="home" title="home">
                <img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
            </a>
        </div>
    </div>
</div>
<header class="container">
    <div class="row">
        <nav class="navbar navbar-default">
            <div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php print render($page['menu']);?>
            </div>
        </nav>
    </div>
    <div class="clear"></div>
</header>
<section class="container">
    <div class="col-xs-12 col-sm-9 col-sm-offset-3">
        <h2>Inloggen</h2>
        <?php print render($page['content']);?>
        <p><a href="/user/register">Nog geen account?</a></p>
        <p><a href="/user/password">Wachtwoord vergeten?</a></p>
        <p id="fblogin"><a href="/user/simple-fb-connect"><img src="../sites/all/themes/jfa/img/fb-connect.png" alt="FB connect button" title=""/></a></p>
    </div>
</section>
<footer id="footer" class="container">
    <div class="row">
        <div id="subscribe" class="col-xs-12 col-sm-4">
            <?php print render($page['footer-left']);?>
        </div>
        <div id="contact" class="col-xs-12 col-sm-4">
            <?php print render($page['footer-middle']);?>
        </div>
        <div id="social" class="col-xs-12 col-sm-4">
            <?php print render($page['footer-right']);?>
        </div>
        <div class="clear"></div>
    </div>
</footer>
<div id="copy" class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <p>&copy; <?php echo date('Y')?> Jacqueline Fine Arts</p>
        </div>
        <div class="col-xs-12 col-sm-6 text-right">
            <p>Website door <a href=""><strong>Convert media</strong></a></p>
        </div>
    </div>
</div>
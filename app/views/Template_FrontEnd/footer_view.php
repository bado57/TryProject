<footer>
    <div class="container">
        <a href="#" class="scrollpoint sp-effect3">
            <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/logo.png" alt="" class="logo">
        </a>
        <div class="social">
            <a href="https://twitter.com/lutimarketible?lang=tr" target="_blank" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="https://www.facebook.com/lutimark/" target="_blank" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="https://www.instagram.com/lutimark/" target="_blank" class="scrollpoint sp-effect3"><i class="fa fa-instagram fa-lg"></i></a>
            <a href="https://www.youtube.com/channel/UC1GNdT_IjsVR27ouJ3QvC4A" target="_blank" class="scrollpoint sp-effect3"><i class="fa fa-youtube fa-lg"></i></a>
        </div>
        <div class="rights">
            <p><?php echo $data["Copyright"]; ?></p>
        </div>
    </div>
</footer>

</div>
<script src="<?php echo SITE_USERFRONT_JS; ?>/jquery-1.11.1.min.js"></script>
<script src="<?php echo SITE_USERFRONT_JS; ?>/bootstrap.min.js"></script>
<script src="<?php echo SITE_USERFRONT_JS; ?>/slick.min.js"></script>
<script src="<?php echo SITE_USERFRONT_JS; ?>/placeholdem.min.js"></script>
<script src="<?php echo SITE_USERFRONT_JS; ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo SITE_USERFRONT_JS; ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo SITE_USERFRONT_JS; ?>/waypoints.min.js"></script>
<script src="<?php echo SITE_USERFRONT_JS; ?>/scripts.js"></script>
<script src="<?php echo SITE_USERFRONT_JS; ?>/jquery.validate.js"></script>
<script src="<?php echo SITE_URL_LOGINJS; ?>/userslogin.js"></script>
<script>
    $(document).ready(function () {
        appMaster.preLoader();
        $('[data-toggle="popover"]').popover();
    });
</script>
</body>

</html>
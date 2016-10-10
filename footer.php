<!-- footer -->

<div class="footer">

    <div class="copyright">

        <h3>copyright <?php echo date("Y") ?></h3>
        <p>Ivan V. Alleksy</p>

    </div>
    <div class="contact">

        <h3>contact</h3>
        <p>

            <?php wp_nav_menu('menu=email-menu&menu_class=my-main-menu'); ?>

        </p>

    </div>
    <div class="menu">

        <h3>Main Links</h3>
        <p>

            <?php wp_nav_menu('menu=footer-menu&menu_class=my-main-menu'); ?>

        </p>
    </div>

</div>

</main>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/js.js"></script>

</body>
</html>
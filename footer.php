<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>
    <div class="footer__bottom-section">
        <div class="container">
            <div class="copyright">
                <div class="date"><?php _e('All rights reserved', 'brainworks'); ?> &copy; <?php echo date('Y'); ?></div>
                <div class="developer">
                    <?php _e('Developed by ', 'brainworks') ?><a href="https://brainworks.pro/" target="_blank">BrainWorks</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end Do not delete! -->

<?php scroll_top(); ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.6.2/dist/simpleParallax.min.js"></script>
<script>
    var decorVideoImage = document.querySelectorAll('.js-parallax-group');
    var catDecorIcon = document.querySelectorAll('.js-cat-parallax');
    var catDecorImage = document.querySelectorAll('.js-cat-img');

    document.addEventListener("DOMContentLoaded", function () {

        new simpleParallax(decorVideoImage, {
            delay: 0,
            scale: 1.12,
            orientation: 'left',
            overflow: true
        });

        new simpleParallax(catDecorIcon, {
            delay: 0,
            scale: 1.12,
            orientation: 'down',
            overflow: true
        });

        new simpleParallax(catDecorImage, {
            delay: 0,
            scale: 1.12,
            orientation: 'down',
            overflow: true
        });
    })
</script>
</body>
</html>

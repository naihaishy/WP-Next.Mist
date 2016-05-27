<!--footer -->
    <footer id="footer" class="footer">
          <div class="footer-inner">
              <div class="copyright" >
                &copy;
                <span itemprop="copyrightYear"><?php echo date('Y'); ?></span>
                <span class="with-love">
                  <i class="icon-next-heart fa fa-heart"></i>
                </span>
                <span class="author" itemprop="copyrightHolder"><a href="<?php bloginfo('url'); ?>"></a></span>
              </div>
              <div class="powered-by">
                <?php _e('由 <a class="theme-link" href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>
              </div>

              <div class="theme-info">
                主题 -
                <a class="theme-link" href="https://github.com/zgq354/typecho-theme-next">
                  NexT.Mist
                </a>
              </div>
           </div>
    </footer>

    <div class="back-to-top"></div>


</div>




<script type="text/javascript" src="<?php bloginfo('template_url');?>/vendors/jquery/index.js?v=2.1.3  "></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/vendors/fancybox/source/jquery.fancybox.pack.js  "></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/fancy-box.js?v=0.4.5.2  "></script>


<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/helpers.js?v=0.4.5.2  "></script>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/vendors/velocity/velocity.min.js "></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/vendors/velocity/velocity.ui.min.js "></script>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/motion.js?v=0.4.5.2 " id="motion.global"></script>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/vendors/fastclick/lib/fastclick.min.js?v=1.0.6 "></script>

<?php if (is_single()): ?>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.scrollspy.js?v=0.4.5.2 "></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/post_sidebar.js?v=0.4.5.2"></script>
<?php endif; ?>

<?php if (is_page() || is_archive()): ?>
   <script type="text/javascript" id="motion.page.archive">
     $('.archive-year').velocity('transition.slideLeftIn');
   </script>
 <?php endif;?>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/lazyload.js"></script>
<script type="text/javascript">
$(function () {
	$("#posts").find('img').lazyload({
		placeholder: "<?php bloginfo('template_url');?>/images/loading.gif",
		effect: "fadeIn"
	});
});
</script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.js?v=0.4.5.2"></script>

<?php bloginfo('template_url');?>/js/bootstrap.js

</body>
</html>

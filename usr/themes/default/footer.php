<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.版权所有
<br/>
 <?php _e('<p>ICP备案 <a href="https://beian.miit.gov.cn/">鲁ICP备2022007593号</a>|<img src="https://www.seespring.com.cn/img/fonn.png" alt="">公安备案：<a
            href="https://www.beian.gov.cn/portal/registerSystemInfo?recordcode=37170202666291" target="_blank">鲁公网安备37170202666291号</a></p> '); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>

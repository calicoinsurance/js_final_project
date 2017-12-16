    <footer class="site-footer">
        
        <nav class="site-nav">
                <?php
                $args = array(
                    'theme_location' => 'footer'
                );
                
                ?>
                
                <?php wp_nav_menu( $args ); ?>
        </nav>
        
        <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
    </footer>

</div><!-- container -->
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<?php wp_footer();?>
</body>
</html>
<?php

get_header();
?>

<h1 class="text-center splash-header"><?php bloginfo("name") ?></h1>

<?php
while(have_posts()){
    the_post();
    the_content();
}

get_footer();
?>
<p class="sub-footer text-center">In the event of an error please contact the Webmaster at: <?php bloginfo("admin_email") ?></p>
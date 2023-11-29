<?php
/**
 * Template Name: Info Sidebar
 */

get_header();
?>
<section id="mainContent">
<?php
while(have_posts()){
    the_post();
    the_content();
}
?>
</section>

<section id="infoSect">
    <div class="info-bar">
        <h2>Stats About Zen In Everyday Life</h2>
        <ul>
            <li>
                <p>
                    <?php
                        $numPosts = count(get_posts( array(-1)));

                        echo("Number of posts: $numPosts");
                    ?>
                </p>
            </li>
            <li>
                <p>
                    <?php
                        $numAuthors = count_users();
                        echo("Number of site authors: " . $numAuthors["total_users"]);
                    ?>
                </p>
            </li>
        </ul>
    </div>
</section>
        <?php

        ?>
<?php
get_footer();
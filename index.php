<?php

get_header(); ?>
            <img class= "newimg" src="http://calicoinsurance.com/wp-content/uploads/2017/12/banner.png">
        	<!-- quote form -->
            <div class="form-div">
            <h1 id="product-type">AUTO INSURANCE</h1>
            
            <!-- main icon -->
            <img class= "icon" src="http://calicoinsurance.com/wp-content/themes/calicoinsurance/images/auto.png" name="default">
                <form name="main" class = "quoteForm" action="/vehicles.php" 
                        onsubmit="return validateForm()" method="post">
                    <input type="text" name="zipcode" placeholder="Enter Zip Code"></input>
                    <br>
                    <input type="submit" value="GET A QUOTE"></input>
                    
                </form>
                <h3>Or, select a different insurance product:</h3>
              <!-- icons -->
              <img class="icons" id="icon1" src="http://calicoinsurance.com/wp-content/themes/calicoinsurance/images/auto.png" name="auto">
              <img class="icons" id="icon2" src="http://calicoinsurance.com/wp-content/themes/calicoinsurance/images/personal.png" name="personal">
              <img class="icons" id="icon3" src="http://calicoinsurance.com/wp-content/themes/calicoinsurance/images/business.png" name="business"> 
              <img class="icons" id="icon4" src="http://calicoinsurance.com/wp-content/themes/calicoinsurance/images/commercial_auto.png" name="commercial_auto">
            
            </div>
	<div class="container">
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    
    <article class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    </article>
    <?php endwhile;

    else :
        echo '<p>No Content Found</p>';
    endif;

get_footer();

?>

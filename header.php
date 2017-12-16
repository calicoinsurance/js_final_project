<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title><a href="<?php bloginfo('name'); ?>"></a></title> 
        
        <script>
            $(document).ready(function( ){
                
               $("#icon1").click(function(){
                   $(".icon").attr({
                      "src": "http://calicoinsurance.com/wp-content/themes/calicoinsurance/images/auto.png" 
                   });
                   
                   $("#product-type").html("AUTO INSURANCE");
               
               }); 
               
                $("#icon2").click(function(){
                    
                   $(".icon").attr({
                      "src": "http://calicoinsurance.com/wp-content/themes/calicoinsurance/images/personal.png" 
                   });
                   
                   $("#product-type").html("PERSONAL INSURANCE");
               
               }); 
               
                $("#icon3").click(function(){
                   $(".icon").attr({
                      "src": "http://calicoinsurance.com/wp-content/themes/calicoinsurance/images/comm.png" 
                   });
                   
                   $("#product-type").html("BUSINESS INSURANCE");
               
               }); 
               
                $("#icon4").click(function(){
                   $(".icon").attr({
                      "src": "http://calicoinsurance.com/wp-content/themes/calicoinsurance/images/spl.png" 
                   });
                   
                   $("#product-type").html("COMMERCIAL AUTO INSURANCE");
               
               }); 
               
               
            });

   

        </script>
 <script>
     function validateForm() {
    var x = document.forms["main"]["zipcode"].value;
    if ( (x == "") || (x < 10000) || (x > 99999) || (isNaN(x)) ) {
        alert("Please Enter Valid Zipcode");
        return false;
    }
}
   
 </script>       
        
           
        <?php wp_head(); ?>
    </head>

   
<body <?php body_class(); ?>>
        <div class="top-menu-container" id="myHeader">
        	<div class="top-left">
            	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a></h1>
            	<h5><?php bloginfo('description'); ?></h5>
        	</div>
        	
            <div class="top-right">	
            	<nav class="top-nav">
                   <?php 
                   $args = array(
                        'theme_location' => 'top'
                   );
                   ?>
                   
                   <?php wp_nav_menu( $args ); ?>
               </nav>
           </div>  
        	
        	

        	

           
           
        </div> <!-- /top-menu-container -->
    <div class="container">
    
        <!-- site-header -->
        <header class="site-header">
            


            
            <a href="<?php echo home_url();?>"> 
               <img class="logo" src="http://calicoinsurance.com/wp-content/themes/calicoinsurance/images/logo.png"  /></a>
            
            <nav class="site-nav">
                <?php
                $args = array(
                    'theme_location' => 'primary'
                );
                
                ?>
                
                <?php wp_nav_menu( $args ); ?>
            </nav>
            
        </header><!-- /site-header -->
    </div>
    
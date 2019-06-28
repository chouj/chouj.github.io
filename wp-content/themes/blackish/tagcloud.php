<?php
/*
Template Name: Tags Template
*/
?>

<?php get_header(); ?>

    <div id="content" class="narrowcolumn"> 
        <ul class="cosmos"> 
            <?php if (function_exists("UTW_ShowWeightedTagSet")) { 
               UTW_ShowWeightedTagSetAlphabetical("coloredsizedtagcloud","",0); 
            } ?> 
        </ul> 
    </div> 

<?php get_footer(); ?>
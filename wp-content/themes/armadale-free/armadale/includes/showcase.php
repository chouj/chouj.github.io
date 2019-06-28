<?php if(get_option('theme_blurb_ad') == 'Nothing' && get_option('theme_twitter_active') == 'Disable') : ?>

<?php else : ?>
<div class="showcase">
<div class="marginauto">


<?php if (get_option('theme_blurb_ad') == 'Blurb') : ?>
<div class="left">
<div class="blurb-header left"><?php echo $theme_blurb_title; ?></div>
<div class="blurb-right left"></div>

<div class="blurb-content clear">
<?php echo $theme_blurb_content;?>
</div><!-- end.blurb-content -->

</div><!-- end.blurb-wrap -->
<?php elseif (get_option('theme_blurb_ad') == 'Nothing') : ?>
<?php else :?>

<div class="advertisement-wrap left">
<a class="advertisement" href="<?php echo $theme_advert_url; ?>"><img src="<?php echo $theme_advert_img; ?>" alt="advertisement" /></a>
</div>


<?php endif; ?>





<?php if (get_option('theme_twitter_active') == 'Disable') : ?>
<?php else : ?>
<div class="twitter">

<div class="twitter-icon"></div>
<div class="last-tweet">
<?php
$prefix = "<h2>".$theme_twitter_title."</h2>";
$suffix = "";

$feed = "http://search.twitter.com/search.atom?q=from:" . $theme_twitter_name . "&rpp=1";

function parse_feed($feed) {
    $stepOne = explode("<content type=\"html\">", $feed);
    $stepTwo = explode("</content>", $stepOne[1]);
    $tweet = $stepTwo[0];
    $tweet = str_replace("&lt;", "<", $tweet);
    $tweet = str_replace("&gt;", ">", $tweet);
    return $tweet;
}

$twitterFeed = file_get_contents($feed);
echo stripslashes($prefix) . parse_feed($twitterFeed) . stripslashes($suffix);
?>

</div>
</div>
<?php endif; ?>



</div><!-- end.marginatuo -->
</div><!-- end.showcase -->
<?php endif; ?>
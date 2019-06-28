<?php
/*
Plugin Name: MightyAdsense
Plugin URI: http://mightyhitter.com/main-page/plugins/mightyadsense/
Description: Keep your adsense code & output it in posts.
Author: mightyhitter
Version: 4.1
Author URI: http://mightyhitter.com
*/

//globa vars
$current_post=1;

// Setup defaults if options do not exist
for ($i=1;$i<11;$i++)
{
add_option('mightyadsense_code'.$i, '[#'.$i.': Edit Options>MightyAdsense>Adsense Code]');
add_option('mightyadsense_display'.$i, TRUE);  
add_option('mightyadsense_position'.$i, 'top-left'); 
}

add_option('mightyadsense_post1', '1'); 
add_option('mightyadsense_postads1', '1'); 
add_option('mightyadsense_post2', '2'); 
add_option('mightyadsense_postads2', '2'); 
add_option('mightyadsense_post3', '3'); 
add_option('mightyadsense_postads3', '3'); 
add_option('mightyadsense_pageads', '1'); 
add_option('mightyadsense_singleads', '1'); 

add_option('mightyadsense_reset', FALSE);
add_option('mightyadsense_powered', FALSE); 


function mightyadsense_add_option_pages() {
	if (function_exists('add_options_page')) {
		add_options_page('MightyAdsense', 'MightyAdsense', 9, __FILE__, 'mightyadsense_options_page');
	}		
}

if (isset($_GET['set']))
{
	$set=$_GET['set'];
}
	else
{
	$set=1;
}

function mightyadsense_options_page() {
	
	global $set;
	global $table_prefix, $wpdb;
	$table_name = $table_prefix . "mightyadsense";	
	
	$filename = $_GET['page'];
	$filen=str_replace('\\\\','\\',$_GET['page']);

	if (isset($_POST['info_update'])) {

		?><div id="message" class="updated fade"><p><strong><?php 

		for ($i=1;$i<11;$i++)
		{
			if (isset($_POST["mightyadsense_code".$i]) && isset($_POST["mightyadsense_position".$i]))
			{
				update_option('mightyadsense_code'.$i, (string) $_POST["mightyadsense_code".$i]);
				if (isset($_POST["mightyadsense_display".$i]))
				{
					update_option('mightyadsense_display'.$i, (bool) true);
				}
				else
				{
					update_option('mightyadsense_display'.$i, (bool) false);
				}
				update_option('mightyadsense_position'.$i, (string) $_POST["mightyadsense_position".$i]);
			}
		}
		
		update_option('mightyadsense_post1', (string) $_POST["mightyadsense_post1"]);
		update_option('mightyadsense_postads1', (string) $_POST["mightyadsense_postads1"]);
		update_option('mightyadsense_post2', (string) $_POST["mightyadsense_post2"]);
		update_option('mightyadsense_postads2', (string) $_POST["mightyadsense_postads2"]);
		update_option('mightyadsense_post3', (string) $_POST["mightyadsense_post3"]);
		update_option('mightyadsense_postads3', (string) $_POST["mightyadsense_postads3"]);
		update_option('mightyadsense_pageads', (string) $_POST["mightyadsense_pageads"]);
		update_option('mightyadsense_singleads', (string) $_POST["mightyadsense_singleads"]);	
		
		if (isset($_POST["mightyadsense_powered"]))
		{
			update_option('mightyadsense_powered', (bool) true);
		}
		else
		{
			update_option('mightyadsense_powered', (bool) false);
		}
		
		if (isset($_POST["mightyadsense_reset"]))
		{
			for ($i=1;$i<11;$i++)
			{
			update_option('mightyadsense_code'.$i, '[#'.$i.': Edit Options>MightyAdsense>Adsense Code]');
			update_option('mightyadsense_display'.$i, TRUE);  
			update_option('mightyadsense_position'.$i, 'top-left'); 
			}
			
			update_option('mightyadsense_post1', '1'); 
			update_option('mightyadsense_postads1', '1'); 
			update_option('mightyadsense_post2', '2'); 
			update_option('mightyadsense_postads2', '2'); 
			update_option('mightyadsense_post3', '3'); 
			update_option('mightyadsense_postads3', '3'); 
			update_option('mightyadsense_pageads', '1'); 
			update_option('mightyadsense_singleads', '1'); 
		
			update_option('mightyadsense_reset', (bool) false);
			update_option('mightyadsense_powered', (bool) false);
		}
						
					
		echo "Configuration Updated!";

	    ?></strong></p></div><?php

	} ?>

	<div class=wrap>

	<h2>MightyAdsense Version 4.1</h2>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'].'?page='.$filen.'&set='.$set; ?>">
	<input type="hidden" name="info_update" id="info_update" value="true" />

	<fieldset class="options"> 
	<legend>General Options</legend>

	<table width="100%" border="0" cellspacing="0" cellpadding="6">
	<tr>
		<th colspan=2 bgcolor=black><font color=white>
		SELECT CODE SET: 
		<?php
			for ($i=1;$i<11;$i++)
			{
				if ($set==$i)
				{
					echo "[<a href='?page=$filen&set=$i'><font color=red>Set #".$i."</font></a>] ";
				}
				else
				{
					echo "[<a href='?page=$filen&set=$i'><font color=white>Set #".$i."</font></a>] ";
				}
			}
		?>
		</font></th>
	</tr>	
	<tr>
		<td width="35%" align="right" valign=top>Ads Code: </td>
		<td align="left"><textarea name="mightyadsense_code<?php echo $set; ?>" cols=50 rows=10><?php echo mightyadsense_cleancode(get_option('mightyadsense_code'.$set)) ?></textarea></td>
	</tr>
	<tr>
		<td width="25%" align="right" valign=top>Preview: </td>
		<td align="left"><?php echo '<p>'.mightyadsense_cleancode(get_option('mightyadsense_code'.$set)).'</p>' ?></td>
	</tr>	
	<tr>
		<td width="25%" align="right">Show This Ads? </td>
		<td align="left"><input type="checkbox" name="mightyadsense_display<?php echo $set; ?>" value="checkbox" <?php if (get_option('mightyadsense_display'.$set)) echo "checked='checked'"; ?>/></td>
	</tr>
	<tr>
		<td width="25%" align="right">Allignment of Ads </td>
		<td align="left">
		<?php
		$sel1="";
		$sel2="";
		$sel3="";
		$sel4="";
		if (get_option('mightyadsense_position'.$set)=='top') $sel1="selected";
		if (get_option('mightyadsense_position'.$set)=='top-left') $sel2="selected";
		if (get_option('mightyadsense_position'.$set)=='top-right') $sel3="selected";
		if (get_option('mightyadsense_position'.$set)=='bottom') $sel4="selected";
		echo "<select name='mightyadsense_position$set'>";
		echo "<option value='top' $sel1>Top";
		echo "<option value='top-left' $sel2>Top-left";
		echo "<option value='top-right' $sel3>Top-right";
		echo "<option value='bottom' $sel4>Bottom";
		echo "</select>";
		?>
		</td>
	</tr>
	<tr>
		<td width="25%" align="right" valign=top>Display Powered by?</td>
		<td align="left"><input type="checkbox" name="mightyadsense_powered" value="checkbox" <?php if (get_option('mightyadsense_powered')) echo "checked='checked'"; ?>/></td>
	</tr>	
	<tr>
		<td width="25%" align="right" valign=top>Reset settings to default?</td>
		<td align="left"><input type="checkbox" name="mightyadsense_reset" value="checkbox" <?php if (get_option('mightyadsense_reset')) echo "checked='checked'"; ?>/></td>
	</tr>
	
	
	
	
	
	<tr>
		<th colspan=2 bgcolor=black><font color=white>Code Set Configuration</font></th>
	</tr>
	<?php
	for ($j=1;$j<4;$j++)
	{
	?>
	<tr>
		<td width="25%" align="right" valign=top>Post # 
		<select name=mightyadsense_post<?php echo $j; ?>>
		<?php
		$ppp=get_option('posts_per_page');
		for ($i=1;$i<=$ppp;$i++)
		{
			if (get_option('mightyadsense_post'.$j)==$i)
			{echo "<option value='".$i."' selected>$i";}
			else
			{echo "<option value='".$i."'>$i";}
		}
		?>
		</select>
		</td>
		<td align="left">
		<select name=mightyadsense_postads<?php echo $j; ?>>
		<?php
			if (get_option('mightyadsense_postads'.$j)==-1)
			{echo "<option value='-1' selected>No Ads";}
			else
			{echo "<option value='-1'>No Ads";}		
			if (get_option('mightyadsense_postads'.$j)==0)
			{echo "<option value='0' selected>Random Ads";}
			else
			{echo "<option value='0'>Random Ads";}					
		for ($i=1;$i<11;$i++)
		{
			if (get_option('mightyadsense_postads'.$j)==$i)
			{echo "<option value='$i' selected>Code Set #$i";}
			else
			{echo "<option value='$i'>Code Set #$i";}
		}
		?>
		</select>
		</td>
	</tr>
	<?php
	}
	?>
	
	
	
	
	<tr>
		<td width="25%" align="right" valign=top>Pages</td>
		<td align="left">
		<select name=mightyadsense_pageads>
		<?php
			if (get_option('mightyadsense_pageads')==-1)
			{echo "<option value='-1' selected>No Ads";}
			else
			{echo "<option value='-1'>No Ads";}		
			if (get_option('mightyadsense_pageads')==0)
			{echo "<option value='0' selected>Random Ads";}
			else
			{echo "<option value='0'>Random Ads";}					
		for ($i=1;$i<11;$i++)
		{
			if (get_option('mightyadsense_pageads')==$i)
			{echo "<option value='$i' selected>Code Set #$i";}
			else
			{echo "<option value='$i'>Code Set #$i";}
		}
		?>
		</select>
		</td>
	</tr>
	
	<tr>
		<td width="25%" align="right" valign=top>Single Page</td>
		<td align="left">
		<select name=mightyadsense_singleads>
		<?php
			if (get_option('mightyadsense_singleads')==-1)
			{echo "<option value='-1' selected>No Ads";}
			else
			{echo "<option value='-1'>No Ads";}		
			if (get_option('mightyadsense_singleads')==0)
			{echo "<option value='0' selected>Random Ads";}
			else
			{echo "<option value='0'>Random Ads";}					
		for ($i=1;$i<11;$i++)
		{
			if (get_option('mightyadsense_singleads')==$i)
			{echo "<option value='$i' selected>Code Set #$i";}
			else
			{echo "<option value='$i'>Code Set #$i";}
		}
		?>
		</select>
		</td>
	</tr>	
	
	
	<tr>
		<th colspan=2 bgcolor=black><font color=white>*Tips*</font></th>
	</tr>	
	<tr>
		<td align="left" valign=top colspan=2>
		If you would like get the ads on your template such as the sidebar, go to Presentation > Theme Editor > Sidebar. Insert the following line anywhere you would like the ads to appear;-
		<br>
		<p>&lt;?php mightyadsense4template(Set_Number); ?&gt;</p>
		<br>
		Set_Number can be 1,2,3,4,5,6,7,8,9 or 10. This call will ignore either you put display ads to true or not in any sets.
		<br>
		Be sure that you know to differentiate between PHP and HTML before placing the above line;)
		</td>
	</tr>					
	</table>

	<div class="submit">
		<input type="submit" name="info_update" value="<?php _e('Update options'); ?> &raquo;" />
	</div>
	</form>
	
	<table width="100%" border="0" cellspacing="0" cellpadding="6">
	<tr>
		<th colspan=2 bgcolor=black><font color=white>Google Adsense Clicks Tracker (Today)</font></th>
	</tr>	
	<tr>
		<td align="left" valign=top colspan=2>
			<table width="100%" border=1>
			<tr><td width="10%">Date/Time</td><td width="10%">IP Address</td><td>Page</td><td>Ads</td></tr>
			<?php
			if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
				echo "<tr><td colspan=4>No clicks record found..</td></tr>";
			}
			else
			{
				//read database
				putenv('TZ=US/Pacific');
				$date1=date ("Y-m-d 00:00:00");
				$date2=date ("Y-m-d 23:59:59");
				$sql="select * from $table_name where mdate>'$date1' and mdate<'$date2' order by mdate desc";
				$results = $wpdb->get_results($sql);
			    if ($results) {
				    $i=0;
			        foreach ($results as $result) {
			            echo "<tr><td>".$result->mdate."</td><td>".$result->ip."</td><td><a href='".$result->site."'>".str_replace(get_settings('siteurl'),'',$result->site)."</a></td><td>".$result->target."</td></tr>";
			            $i++;
			        }	
				}				
			}
			?>
			</table>
			<?php echo "Total Clicks Today: $i"; ?>
		</td>
	</tr>	
	</table>
	</div><?php
}


function mightyadsense_cleancode($code)
{
	//to clean the code from \"
	$to_remove='\\"';
	$to_replace='"';
	return str_replace( $to_remove, $to_replace, $code);
}



function mightyadsense_generateads($content) {
	global $current_post;
	$adsstr='';	
	if (is_single())
	{
			//ads for single too
			for ($p=1;$p<11;$p++)
				{
					if (get_option('mightyadsense_display'.$p))
					{
					if (get_option('mightyadsense_singleads')==($p+0))
					{						
						//reach the right assignment						
						$adsstr=getAds($p,$content);
						//exit the loop
						$p=1000;
						$mai=1000;					
					}
					}

				}
				//check if random post assigned
				if ($p==11) if ((get_option('mightyadsense_singleads')+0)==0)
				{
					$adsstr=getRandomAds($content);
				}
				//single page powered by, if checked by user
				if (get_option('mightyadsense_powered') && $adsstr<>'')
				{
					$adsstr=$adsstr."<p><small>Powered by <a href='http://mightyhitter.com/main-page/plugins/mightyadsense' rel='tag'>MightyAdsense</a></small></p>";
				}									
									
	}
	else
	{
	if (is_page())
	{

			//ads for pages too
			for ($p=1;$p<11;$p++)
				{
					if (get_option('mightyadsense_display'.$p))
					{
					if (get_option('mightyadsense_pageads')==($p+0))
					{						
						//reach the right assignment						
						$adsstr=getAds($p,$content);
						//exit the loop
						$p=1000;
						$mai=1000;					
					}
					}
					else
					{
						$adsstr=$content;
					}
				}
				//check if random post assigned
				if ($p==11) if ((get_option('mightyadsense_pageads')+0)==0)
				{
					$adsstr=getRandomAds($content);
				}				
		
	}
	else
	{//posts//
	
		for ($mai=1;$mai<=3;$mai++)
		{
	
			if ((get_option('mightyadsense_post'.$mai)+0)==($current_post+0))
			{		
				for ($p=1;$p<11;$p++)
				{
					if (get_option('mightyadsense_display'.$p))
					{
					if ((get_option('mightyadsense_postads'.$mai)+0)==($p+0))
					{
						//reach the right assignment						
						$adsstr=getAds($p,$content);
						//exit the loop
						$p=1000;
						$mai=1000;					
					}
					}
				}
				//check if random post assigned
				if ($p==11) if ((get_option('mightyadsense_postads'.$mai)+0)==0)
				{
					$adsstr=getRandomAds($content);
				}
			}
		}
		$current_post++;
	//end posts//	
	}
	}
	
	
	
		if ($adsstr<>'')
		{
			return $adsstr;
		}
		else	
		{
			return $content;
		}	
}

function getRandomAds($content)
{
	//random ads suggested by users
	$adsstr="";
	$randomads;
	$q=0;
	for ($p=1;$p<11;$p++)
	{
		if (get_option('mightyadsense_display'.$p))
		{
			$randomads[$q]=$p;
			$q++;
		}		
	}
	srand((double)microtime()*1000000); 
	$num = rand(0,count($randomads)-1);
	$p=$randomads[$num];
	if (get_option('mightyadsense_position'.$p)=='top') $adsstr='<p>'.mightyadsense_cleancode(get_option('mightyadsense_code'.$p)).'</-> '.$content.'';
	if (get_option('mightyadsense_position'.$p)=='top-left') $adsstr='<p style="float: left;margin: 4px;">'.mightyadsense_cleancode(get_option('mightyadsense_code'.$p)).'</p> '.$content.'';
	if (get_option('mightyadsense_position'.$p)=='top-right') $adsstr='<p style="float: right;margin: 4px;">'.mightyadsense_cleancode(get_option('mightyadsense_code'.$p)).'</p> '.$content.'';
	if (get_option('mightyadsense_position'.$p)=='bottom') $adsstr=$content.'<p>'.mightyadsense_cleancode(get_option('mightyadsense_code'.$p)).'</p> ';
	return $adsstr;
}

function getAds($p,$content)
{
	$adsstr="";
	if (get_option('mightyadsense_position'.$p)=='top') $adsstr='<p>'.mightyadsense_cleancode(get_option('mightyadsense_code'.$p)).'</-> '.$content.'';
	if (get_option('mightyadsense_position'.$p)=='top-left') $adsstr='<p style="float: left;margin: 4px;">'.mightyadsense_cleancode(get_option('mightyadsense_code'.$p)).'</p> '.$content.'';
	if (get_option('mightyadsense_position'.$p)=='top-right') $adsstr='<p style="float: right;margin: 4px;">'.mightyadsense_cleancode(get_option('mightyadsense_code'.$p)).'</p> '.$content.'';
	if (get_option('mightyadsense_position'.$p)=='bottom') $adsstr=$content.'<p>'.mightyadsense_cleancode(get_option('mightyadsense_code'.$p)).'</p> ';
	return $adsstr;
}

function mightyadsense4template($set)
{
	//upon request by visitors, this function is created for ppl who want 
	//the adsense on their sidebar, header, or footer or anywhere on template
	
	if ($set)
	{echo mightyadsense_cleancode(get_option('mightyadsense_code'.$set));}
	else
	{echo mightyadsense_cleancode(get_option('mightyadsense_code1'));}
}

function createRandomString() {

    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;

    while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }

    return $pass;

}

function tracker()
{
	global $table_prefix, $wpdb;
	$table_name = $table_prefix . "mightyadsense";
	?>
	<script language="JavaScript">
	var iFr;
	function log() { 
	var loca=document.location+"";
	if (window.status.indexOf('go to') == 0) 
	{ 
	bug = new Image(); 
	if(loca.indexOf('?') > -1)
	{
		bug.src = loca + '&site=' + loca + '&target=' + window.status.substring(6) + '';
	}
	else
	{
		bug.src = loca + '?site=' + loca + '&target=' + window.status.substring(6) + '';
	}
	} 
	}
	var loca=document.location+"";
	var elements; 
	elements = document.getElementsByTagName("iframe"); 
		for (var i = 0; i < elements.length; i++) { 
		if(elements[i].src.indexOf('googlesyndication.com') > -1) 
		{ 
		elements[i].onfocus = log;
		iFr=elements[i];
		}	 
	}
	</script>	
	<?
	if (isset($_GET['site']) && isset($_GET['target'])){
		$cip=$_SERVER['REMOTE_ADDR'];
		$site=$_GET['site'];
		$target=$_GET['target'];
		putenv('TZ=US/Pacific');
		$mdate=date ("Y-m-d h:i:s");
		if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
			//create table
			$sql="CREATE TABLE `".$table_name."` (
			`mdate` DATETIME NOT NULL ,
			`ip` VARCHAR( 15 ) NOT NULL ,
			`site` VARCHAR( 255 ) NOT NULL ,
			`target` VARCHAR( 255 ) NOT NULL ,
			PRIMARY KEY ( `mdate` )
			);
			";
			require_once(ABSPATH . 'wp-admin/upgrade-functions.php');
      		dbDelta($sql);			
		}
			//insert click
			$insert = "INSERT INTO ".$table_name.
                " (mdate,ip,site,target) ".
                "VALUES ('".$mdate."','".$cip."','".$site."','".$target."')";
            $results = $wpdb->query( $insert );
	}
}
add_filter('the_content', 'mightyadsense_generateads',20);
add_filter('the_excerpt', 'mightyadsense_generateads',20);
add_action('admin_menu', 'mightyadsense_add_option_pages');
//add_filter('the_content_rss', 'mightyadsense_generateads',21);
//add_filter('the_excerpt_rss', 'mightyadsense_generateads',21);
add_action('wp_footer', 'tracker');
?>

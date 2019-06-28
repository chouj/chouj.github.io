<?php
/*
Plugin Name: Math Comment Spam Protection
Plugin URI: http://sw-guide.de/wordpress/plugins/math-comment-spam-protection/
Description: Asks the visitor making the comment to answer a simple math question. This is intended to prove that the visitor is a human being and not a spam robot. Example of such question: <em>What is the sum of 2 and 9?</em>
Version: 3.0
Author: Michael Woehrer
Author URI: http://sw-guide.de/
*/

/*	----------------------------------------------------------------------------
 	    ____________________________________________________
       |                                                    |
       |           Math Comment Spam Protection             |
       |                © Michael Woehrer                   |
       |____________________________________________________|

	© Copyright 2006-2010 Michael Woehrer (michael dot woehrer at gmail dot com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

	----------------------------------------------------------------------------

	ACKNOWLEDGEMENTS:
	- Thanks to Steven Herod (http://www.herod.net/) for his plugin
	  "Did You Pass Math?". I took his idea and extended/improved it by
	  writing a plugin on my own. 

	----------------------------------------------------------------------------

	INSTALLATION, USAGE:
	Visit the plugin's homepage.

	----------------------------------------------------------------------------
	
*/

require_once ( dirname(__FILE__) . '/inc.swg-plugin-framework.php');

class MathCommentSpamProtection extends MathCommentSpamProtection_SWGPluginFramework {

	/**
	 * Apply Spam Protection
	 */
	function ApplyMathCommentSpamProtection() {

		// We add the math comment field to the theme
		if ($this->g_opt['mcsp_opt_apply'] == '1') {
			add_action('comment_form_after_fields', array(&$this, 'EchoInputField'));
		}

		// We check the user input
		add_filter('preprocess_comment', array(&$this, 'CheckInput'), 0);
	
	}


	function GetInputField() {

		// Include math class, create object and generate numbers
		if ( !class_exists('MathCheck') ) include_once ( dirname(__FILE__) . '/math-comment-spam-protection.classes.php');
		$MathCheckObject = new MathCheck;
		$GeneratedNumbersArray = $MathCheckObject->MathCheck_GenerateValues($this->g_opt['mcsp_opt_numbers']);
	
		// Replace placeholders
		$result = $this->g_opt['mcsp_opt_html'];
		$result = str_replace('[operand1]', $GeneratedNumbersArray['operand1'], $result);
		$result = str_replace('[operand2]', $GeneratedNumbersArray['operand2'], $result);
		$result = str_replace('[result]', $GeneratedNumbersArray['result'], $result);
		$result = str_replace('[fieldname_answer]', $this->g_opt['mcsp_opt_fieldname_useranswer'], $result);
		$result = str_replace('[fieldname_hash]', $this->g_opt['mcsp_opt_fieldname_mathresult'], $result);
		return $result;

	}

	function EchoInputField() {
		echo  $this->GetInputField();
	}




	/**
	 * Input validation. 
	 */
	function CheckInput($comment_data) {
	
	    if (  ( !is_user_logged_in() ) && ( $comment_data['comment_type'] == '' ) ) { // Do not check if the user is logged in & do not check trackbacks/pingbacks
		
			// Get actual result
			$actual_result = $_POST[ $this->g_opt['mcsp_opt_fieldname_mathresult'] ];
			// Get value user has entered
			$value_entered = $_POST[ $this->g_opt['mcsp_opt_fieldname_useranswer'] ];
			
			// Get input validation result
			if ( !class_exists('MathCheck') ) include_once ( dirname(__FILE__) . '/math-comment-spam-protection.classes.php');
			$MathCheckObject = new MathCheck;
			$result = $MathCheckObject->MathCheck_InputValidation($actual_result, $value_entered);
	
			// DIE if there was an error. Apply filter for security reasons (strip JS code, etc.)
			switch ($result) {
				case 'No answer': 
					wp_die( apply_filters('pre_comment_content', stripslashes($this->g_opt['mcsp_opt_msg_no_answer'])) );
					break;
				case 'Wrong answer': 
					wp_die( apply_filters('pre_comment_content', stripslashes($this->g_opt['mcsp_opt_msg_wrong_answer'])) );
					break;
			}
	
		}
	
		return $comment_data;
	
	}


	/**
	 * Plugin Options
	 */
	function PluginOptionsPage() {

		$this->AddContentMain(__('Add math question field automatically',$this->g_info['ShortName']), '
			<p>
				'.__('If this option is activated, the HTML code for the math question field will be added automatically to your theme.',$this->g_info['ShortName']). '
				'.__('Please note that this may not work with all themes. If it does not work with your theme, then deactivate this option and add the template tag',$this->g_info['ShortName']). ' <code>&lt;&#63;php mcsp_html(); &#63;&gt;</code> '.__('manually to the according theme file.',$this->g_info['ShortName']). '
			</p>
			<input name="mcsp_opt_apply" type="checkbox" id="mcsp_opt_apply" value="1" ' . ($this->COPTHTML('mcsp_opt_apply')=='1'?'checked="checked"':'') . ' />
			<label for="mcsp_opt_apply">'.__('Add math question field automatically',$this->g_info['ShortName']).'</label>
			');

		$this->AddContentMain(__('HTML code for the math question field',$this->g_info['ShortName']), '
			<p>
				'.__('Here we have the HTML code for the math question field (will be used when activating the option',$this->g_info['ShortName']).' "<em>'.__('Add HTML output automatically',$this->g_info['ShortName']).'</em>" ' . __('or when using the template tag',$this->g_info['ShortName']) . ' <code>&lt;&#63;php mcsp_html(); &#63;&gt;</code> '.__('in your theme).',$this->g_info['ShortName']) . ' 				
			</p>
			<textarea name="mcsp_opt_html" id="mcsp_opt_html" cols="100%" rows="5">'
			. $this->COPTHTML('mcsp_opt_html') . '</textarea>

			<p class="swginfo">'
			.__('Use HTML only, no PHP allowed. You can use the following placeholders:',$this->g_info['ShortName']). ' <strong>[operand1]</strong> '.__('(first operand)',$this->g_info['ShortName']). ', <strong>[operand2]</strong> ' . __('(second operand)',$this->g_info['ShortName']). ', <strong>[fieldname_answer]</strong> '.__('(name of field for user\'s answer)',$this->g_info['ShortName']). ', <strong>[fieldname_hash]</strong> '.__('(name of the hidden field that contains the hash)',$this->g_info['ShortName']). ', <strong>[result]</strong> '.__('(the calculated hash result)',$this->g_info['ShortName'])
			.'<br /><br />
			'.__('If you want to add the HTML code manually to your comments.php, then you can use for example the following code (as with the former versions of this plugin):',$this->g_info['ShortName']). '
			<br /><code style="font-size:70%;">&lt;&#63;php if ( function_exists(\'math_comment_spam_protection\') ) {'."<br />".'$mcsp_info = math_comment_spam_protection();'."<br />".'&#63;&gt; &lt;p&gt;&lt;input type="text" name="&lt;&#63;php echo $mcsp_info[\'fieldname_answer\'] &#63;&gt;" id="&lt;&#63;php echo $mcsp_info[\'fieldname_answer\'] &#63;&gt;" value="" size="22" tabindex="4" /&gt;'."<br />".'&lt;label for="&lt;&#63;php echo $mcsp_info[\'fieldname_answer\'] &#63;&gt;"&gt;Spam protection: Sum of &lt;&#63;php echo $mcsp_info[\'operand1\'] . \' + \' . $mcsp_info[\'operand2\'] . \' ?\' &#63;&gt;&lt;/label&gt;'."<br />".'&lt;input type="hidden" name="&lt;&#63;php echo $mcsp_info[\'fieldname_hash\'] &#63;&gt;" value="&lt;&#63;php echo $mcsp_info[\'result\']; &#63;&gt;" /&gt;'."<br />".'&lt;/p&gt;'."<br />".'&lt;?php } // if function_exists... &#63;&gt;
			</code>
			</p>
			');

		$this->AddContentMain(__('Operands',$this->g_info['ShortName']), '
			<p>
				'.__('Enter the numbers to be used. Use the number on the left side, tilde (~) as separator and then the term to display. Separate values with comma (,). Examples:',$this->g_info['ShortName']). ' 
				<ul>
				<li style="padding:0;margin:0 0 0 20px;list-style-type:disc;"><em>1~1, 2~2, 3~3, 4~4, 5~5, 6~6, 7~7, 8~8, 9~9, 10~10</em></li>
				<li style="padding:0;margin:0 0 0 20px;list-style-type:disc;"><em>1~one, 2~two, 3~three, 4~four, 5~five, 6~six, 7~seven, 8~eight, 9~nine, 10~ten</em></li>
				<li style="padding:0;margin:0 0 0 20px;list-style-type:disc;"><em>1~&amp;&#35;49;, 2~&amp;&#35;50;, 3~&amp;&#35;51;, 4~&amp;&#35;52;, 5~&amp;&#35;53;, 6~&amp;&#35;54;, 7~&amp;&#35;55;, 8~&amp;&#35;56;, 9~&amp;&#35;57;</em></li>
				</ul>
			</p>
			<br />
			<textarea name="mcsp_opt_numbers" id="mcsp_opt_numbers" cols="100%" rows="2">'
			. $this->COPTHTML('mcsp_opt_numbers') . '</textarea>
			');


		$this->AddContentMain(__('Error Messages',$this->g_info['ShortName']), '
			<p>
				'.__('Error message being displayed in case of no answer (empty field) / not entered a number:',$this->g_info['ShortName']). '
				<br />
				<textarea style="margin-left: 25px" name="mcsp_opt_msg_no_answer" id="mcsp_opt_msg_no_answer" cols="100%" rows="3">'
				. $this->COPTHTML('mcsp_opt_msg_no_answer') . '</textarea>
			</p>

			<p>
				'.__('Error message being displayed in case of a wrong answer:',$this->g_info['ShortName']). '
				<br />
				<textarea style="margin-left: 25px" name="mcsp_opt_msg_wrong_answer" id="mcsp_opt_msg_wrong_answer" cols="100%" rows="3">'
				. $this->COPTHTML('mcsp_opt_msg_wrong_answer') . '</textarea>
			</p>
			');

		$this->AddContentMain(__('Field Names',$this->g_info['ShortName']), '
			<p>
				'.__('Here you can change the default HTML field names to make it more difficult for spam bots.',$this->g_info['ShortName']). ' <br /><br />
				<label for="mcsp_opt_fieldname_useranswer">'.__('Name of field for user\'s answer:',$this->g_info['ShortName']). '</label>
				<br /><input name="mcsp_opt_fieldname_useranswer" type="text" id="mcsp_opt_fieldname_useranswer" value="'
				. $this->COPTHTML('mcsp_opt_fieldname_useranswer') . '" size="30" />
				<br /><br />
				<label for="mcsp_opt_fieldname_mathresult">'.__('Name of hidden field that contains the hash:',$this->g_info['ShortName']). '</label>
				<br /><input name="mcsp_opt_fieldname_mathresult" type="text" id="mcsp_opt_fieldname_mathresult" value="'
				. $this->COPTHTML('mcsp_opt_fieldname_mathresult') . '" size="30" />
			</p>
			');



		// Sidebar, we can also add individual items...
		$this->PrepareStandardSidebar();
		
		$this->GetGeneratedOptionsPage();



	} // function PluginOptionsPage()


	/**
	 * Formats the input of the numbers...
	 */
	function ConvertOptions_Numbers($input) {
		$result = str_replace(' ', '', $input);	// Strip whitespace
		$result = preg_replace('/,/', ', ', $result); // Add whitespace after comma
		$result = preg_replace('/(\r\n|\n|\r)/', '', $result); // Strip line breaks
		return $result;
	}

	/**
	 * Clean the input values for the field names...
	 */
	function ConvertOptions_Fieldname($input) {
		$return = preg_replace('/[^a-zA-Z0-9_\-]/', '', $input);
		return $return;
	}


	/**
	 * Convert option prior to save ("COPTSave"). 
	 * !!!! This function is used by the framework class !!!!
	 */
	function COPTSave($optname) {
		switch ($optname) {
			case 'mcsp_opt_numbers':
				return $this->ConvertOptions_Numbers($_POST[$optname]);
			case 'mcsp_opt_fieldname_useranswer':
				return $this->ConvertOptions_Fieldname($_POST[$optname]);
			case 'mcsp_opt_fieldname_mathresult':
				return $this->ConvertOptions_Fieldname($_POST[$optname]);
			default:
				if (isset($_POST[$optname])) {			
					return $_POST[$optname];
				} else {
					return;
				}
		} // switch
	}

	/**
	 * Convert option before HTML output ("COPTHTML"). 
	 * *NOT* used by the framework class
	 */
	function COPTHTML($optname) {
		$optval = $this->g_opt[$optname];
		switch ($optname) {
			case 'mcsp_opt_numbers':
				return htmlspecialchars(stripslashes($this->ConvertOptions_Numbers($optval)));
			case 'mcsp_opt_msg_no_answer':
				return htmlspecialchars(stripslashes($optval));
			case 'mcsp_opt_msg_wrong_answer':
				return htmlspecialchars(stripslashes($optval));
			case 'mcsp_opt_html':
				return htmlspecialchars(stripslashes($optval));
			default:
				return $optval;
		} // switch
	}

} // Class


if( !isset($myMCSP)  ) {
	// Create a new instance of your plugin that utilizes the WordpressPluginFramework and initialize the instance.
	$myMCSP = new MathCommentSpamProtection();

	$myMCSP->Initialize( 
		// 1. We define the plugin information now and do not use get_plugin_data() due to performance.
		array(	 
			# Plugin name
				'Name' => 			'Math Comment Spam Protection',
			# Author of the plugin
				'Author' => 		'Michael W&ouml;hrer',
			# Authot URI
				'AuthorURI' => 		'http://sw-guide.de/',
			# Plugin URI
				'PluginURI' => 		'http://sw-guide.de/wordpress/plugins/math-comment-spam-protection/',
			# Support URI: E.g. WP or plugin forum, wordpress.org tags, etc.
				'SupportURI' => 	'http://wordpress.org/tags/math-comment-spam-protection',
			# Name of the options for the options database table
				'OptionName' => 	'plugin_mathcommentspamprotection',
			# Old option names to delete from the options table; newest last please
				#'DeleteOldOpt' =>	array('plugin_mathcommentspamprotection'),
			# Plugin version
				'Version' => 		'3.0',
			# First plugin version of which we do not reset the plugin options to default;
			# Normally we reset the plugin's options after an update; but if we for example
			# update the plugin from version 2.3 to 2.4 und did only do minor changes and
			# not any option modifications, we should enter '2.3' here. In this example
			# options are being reset to default only if the old plugin version was < 2.3.
				'UseOldOpt' => 		'3.0',
			# Copyright year(s)
				'CopyrightYear' => 	'2006-2010',
			# Minimum WordPress version
				'MinWP' => 			'2.9',
			# Do not change; full path and filename of the plugin
				'PluginFile' => 	__FILE__,
			# Used for language file, nonce field security, etc.				
				'ShortName' =>		'math-comment-spam-protection',
			),

		// 2. We define the plugin option names and the initial options
		array(
			'mcsp_opt_numbers'				=> '1~1, 2~2, 3~3, 4~4, 5~5, 6~6, 7~7, 8~8, 9~9, 10~10',
			'mcsp_opt_msg_no_answer' 		=> '<p align="center">'."\n".'<strong>Error:</strong> Please press the back button and fill the required field for spam protection.'."\n".'</p>',
			'mcsp_opt_msg_wrong_answer' 	=> '<p align="center">'."\n".'<strong>Error:</strong> You have entered the wrong sum in the spam protection field.'."\n".'<br />Press the back button and try again.'."\n".'</p>',
			'mcsp_opt_fieldname_useranswer' => 'mcspvalue',
			'mcsp_opt_fieldname_mathresult' => 'mcspinfo',
			'mcsp_opt_html'					=> '<p>'."\n".'<label for="[fieldname_answer]">Spam protection: Sum of [operand1] + [operand2] ?</label> <span class="required">*</span>'."\n".'<input id="[fieldname_answer]" name="[fieldname_answer]" type="text" value="" size="30" aria-required="true" />'."\n".'<input type="hidden" name="[fieldname_hash]" value="[result]" />'."\n".'</p>',
			'mcsp_opt_apply'				=> '1',
		));

	$myMCSP->ApplyMathCommentSpamProtection();


	############################################################################
	# Template Tags for using in themes
	############################################################################
	function mcsp_html() {
		global $myMCSP;
		echo $myMCSP->GetInputField();
	}

	function math_comment_spam_protection() {
		global $myMCSP;

		// Include math class, create object and generate numbers
		if ( !class_exists('MathCheck') ) include_once ( dirname(__FILE__) . '/math-comment-spam-protection.classes.php');
		$MathCheckObject = new MathCheck;
		$GeneratedNumbersArray = $MathCheckObject->MathCheck_GenerateValues($myMCSP->g_opt['mcsp_opt_numbers']);
	
		$mcsp_info['operand1'] = $GeneratedNumbersArray['operand1'];
		$mcsp_info['operand2'] = $GeneratedNumbersArray['operand2'];
		$mcsp_info['result']   = $GeneratedNumbersArray['result'];
		$mcsp_info['fieldname_answer']   = $myMCSP->g_opt['mcsp_opt_fieldname_useranswer'];
		$mcsp_info['fieldname_hash']   = $myMCSP->g_opt['mcsp_opt_fieldname_mathresult'];
		
		return $mcsp_info;

	}

} // if( !$myMCSP



?>
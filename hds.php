<?php



/*

* Plugin Name: Hyper Domains Search & Reseller

* Description: Have visitors search top level domains from your site and send them to your reseller store.

* Version: 1.1

* Author: Victor Noyes

* Author URI: http://wpplugin.hyper.domains/

*/





// Include files

include(plugin_dir_path(__FILE__).'form/hds-search.php');

include(plugin_dir_path(__FILE__).'form/hds-com.php');

include(plugin_dir_path(__FILE__).'form/hds-vanity.php');



// Enqueues plugin styles/scripts
function hds_scripts() {	
	if(!is_admin())	{
		wp_enqueue_style('hds_style', plugins_url('css/style.css',__FILE__));
	}
}
add_action('wp_enqueue_scripts', 'hds_scripts');


//Admin style.
add_action('admin_head', 'admin_register_head');

function admin_register_head() {
    wp_enqueue_style( 'hds', plugins_url( 'css/admin-style.css',__FILE__ ) );
}


// Specify Hooks/Filters

register_activation_hook(__FILE__, 'add_defaults_hds');

add_action('admin_init', 'options_init_hds' );

add_action('admin_menu', 'options_add_page_hds');



// Define default option settings

function add_defaults_hds() {

	$tmp = get_option('hds_options');

    if(isset($options['chkbox1']) && $options['chkbox1']) { $checked = ' checked="checked" '; }  {

		$arr = array("text_string1" => "http://hyper.domains", "text_string2" => "SEARCH DOMAINS!", "text_string3" => "TRANSFER A DOMAIN AND SAVE!", "text_string4" => "SEARCH NEW DOMAINS, LIKE .ninja");

		update_option('hds_options', $arr);



	}



}



// Register our settings. Add the settings section, and settings fields

function options_init_hds(){

	register_setting('hds_options', 'hds_options', 'hds_options_validate' );

	add_settings_section('main_section', 'Form Settings', 'section_text_hds', __FILE__);

	add_settings_field('hds_text_string1', 'Reseller Search Results URL:', 'setting_string_url', __FILE__, 'main_section');

	add_settings_field('hds_text_string2', 'Search Form Heading:', 'setting_string_form1', __FILE__, 'main_section');

	add_settings_field('hds_text_string3', 'Transfer Form Heading:', 'setting_string_form2', __FILE__, 'main_section');

	add_settings_field('hds_text_string4', 'Vanity Domains Heading:', 'setting_string_form3', __FILE__, 'main_section');

	add_settings_field('hds_chk1', '$checked', 'Restore Defaults Upon Reactivation', 'setting_chk1_hds', __FILE__, 'main_section');

}



// Add sub page to the Settings Menu

function options_add_page_hds() {

	add_options_page("Settings", "Hyper Domains", 'edit_plugins', basename(__FILE__), 'options_page_hds');

}





// ************************************************************************************************************

// Callback functions

// Section HTML, displayed before the first option

function  section_text_hds() {

	echo '<p> </p>';

}



// TEXTBOX - Name: hds_options[text_string]

function setting_string_url() {

$options = get_option('hds_options');

echo "<input id='hds_text_string1' name='hds_options[text_string1]' size='40' type='text' value='{$options['text_string1']}' />";

}



// TEXTBOX - Name: hds_options[text_string]

function setting_string_form1() {

	$options = get_option('hds_options');

	echo "<input id='hds_text_string2' name='hds_options[text_string2]' size='40' type='text' value='{$options['text_string2']}' />";

}

// TEXTBOX - Name: hds_options[text_string]

function setting_string_form2() {

	$options = get_option('hds_options');

	echo "<input id='hds_text_string3' name='hds_options[text_string3]' size='40' type='text' value='{$options['text_string3']}' />";

}

// TEXTBOX - Name: hds_options[text_string]

function setting_string_form3() {

	$options = get_option('hds_options');

	echo "<input id='hds_text_string4' name='hds_options[text_string4]' size='40' type='text' value='{$options['text_string4']}' />";

}

// CHECKBOX - Name: hds_options[chkbox1]

function setting_chk1_hds() {

$options = get_option('hds_options');

if(isset($options['chkbox1']) && $options['chkbox1']) { $checked = ' checked="checked" '; }

echo "<input ".@$checked." id='setting_chk1_hds' name='hds_options[chkbox1]' type='checkbox' />";

}



// Display the admin options page

function options_page_hds() {

?>



 <form action="options.php" method="post">

 <div class="admin-head">

 <div class='wrap'>

 

 <!-- BEGIN wrapper -->

 

 <div id="to_wrapper">

        

<!-- BEGIN content -->



 <div id="hds-content">

<h2>Hyper Domains Search</h2>

<?php settings_fields('hds_options'); ?>

<?php do_settings_sections(__FILE__); ?>

 <p class="submit">

 <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />

</p>

 <div style="clear:both"></div>	

</div> <!-- End inside -->

</div> <!-- End postbox -->				 

</div>

<!-- END content -->

<div class="hds-sidebar">

<div class="hds-widget">



        <center>

        

<h2>How to display Domain Search.</h2>



        </center>



		<p>



<b>Domain Search or Transfer Form is easy to display.</b><br/>



Just place one the desired shortcodes below in the post/page where you would like the forms to be displayed.<br/>



        <center>



<b><span style="color:#0073aa;font-weight:bold">  [Domain Search] </span></b><br/>

<b><span style="color:#0073aa;font-weight:bold">  [Vanity Domains]</span></b><br/>

<b><span style="color:#0073aa;font-weight:bold">  [Domain Transfer] </span></b><br/>

       </center>



		</p>



	</div> 



  <div class="hds-widget">



<center>



	<h2>Get Your Very Own Reseller Account!</h2>



</center>



<p>



<center>



Sign up now and get access to all the following.  <a href="http://resellers.hyper.domains/reseller.php?action=show_signupform" target="_blank">Reseller Sign Up Form</a><br/><br/>



</center>







</p>Hyper.Domains Resellerclub includes a multi-tier separate private-labeled copy of our site. Your Resellers, their Resellers and so on can manage a beautiful retail business.<p>







</p>You will have access to resale Hosting, Domains, SSL, Email and more!<p>







</p>You and your Resellers can modify the HTML, CSS and images of the website using an easy-to-use point-and-click Content Management System, allowing excellent scope for customization.<p>







</p>Multi-lingual - All content of the Site is translation-friendly.<p> 



   <center>



<b>



	<a href="http://wpplugin.hyper.domains/" target="_blank">Plugin Site</a> | 



	<a href="http://wpplugin.hyper.domains/qa/" target="_blank">Q & A</a> | 



    <a href="http://wpplugin.hyper.domains/plugin-support/" target="_blank" title="Hyper.Domains Form Wordpress Plugin">Support Page</a>| 



    <a href="http://hyperdomains.myorderbox.com" target="_blank">Reseller Login</a> 



    </b><br/>



                    </center>



	</div>



</div> 

</form>



</div>

 <?php

} 



// Validate user data for some/all of your input fields



function hds_options_validate($input) {



// Check our textbox option field contains no HTML tags - if so strip them out

$input['text_string1'] =  wp_filter_nohtml_kses($input['text_string1']);	

return $input; // return validated input

}



?>
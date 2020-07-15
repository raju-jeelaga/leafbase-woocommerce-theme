<?php
function add_theme_menu_item() {
	add_theme_page("Theme Customization", "Theme Customization", "manage_options", "theme-options", "theme_option_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");

function theme_section_description(){
	echo '<p>Theme Option Section</p>';
}

function getThemeSettingValues($field = ''){
	$options = get_option( 'techblog_option' );
	if(!empty($field)){
		return isset($options[$field])? $options[$field]: '';
	}
	return $options;
}

function options_callback(){
	$options = getThemeSettingValues();
	echo '<input name="techblog_option[slider_post_ids]" id="first_field_option" type="text" value="'.$options['slider_post_ids'].'" class="code" /> Enter comma(,) Separated post Ids.';
}

function theme_option_page() { ?>
	<div class="wrap">
	<h1>Custom Theme Options Page</h1>
	<form method="post" action="options.php">
	<?php
	// display settings field on theme-option page
	settings_fields("theme-options-grp");
	// display all sections for theme-options page
	do_settings_sections("theme-options");
	submit_button();
	?>
	</form>
	</div>
<?php }


function test_theme_settings(){
	
	add_settings_section( 'first_section', 'New Theme Options Section',
	'theme_section_description','theme-options');
	add_settings_field('techblog_option','Enter Post IDS','options_callback',
	'theme-options','first_section');//add settings field to the “first_section”
	register_setting( 'theme-options-grp', 'techblog_option');
}
add_action('admin_init','test_theme_settings');
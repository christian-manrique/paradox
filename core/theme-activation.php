<?php
// ------------------------------------------------------------------------
// Include the TGM_Plugin_Activation class
// ------------------------------------------------------------------------

include_once (get_template_directory() . '/core/assets/extra/class-tgm-plugin-activation.php');

// Register the required plugins for this theme.

if (!function_exists('keydesign_register_plugins'))
	{
	function keydesign_register_plugins()
		{
		$plugins = array(
			array(
				'name' => 'Incubator Framework',
				'slug' => 'incubator-framework',
				'source' => KD_THEME_PLUGINS_DIR . '/incubator-framework.zip',
				'required' => true,
				'version' => '3.5',
				'force_activation' => false,
				'force_deactivation' => true,
				'external_url' => '',
			),
			array(
				'name' => 'Wordpress Importer',
				'slug' => 'wordpress-importer',
				'source' => KD_THEME_PLUGINS_DIR . '/wordpress-importer.zip',
				'required' => true,
				'version' => '',
				'force_activation' => false,
				'force_deactivation' => true,
				'external_url' => '',
			),
			array(
				'name' => 'WPBakery Visual Composer',
				'slug' => 'js_composer',
				'source' => KD_THEME_PLUGINS_DIR . '/js_composer.zip',
				'required' => true,
				'version' => '5.1.1',
				'force_activation' => false,
				'force_deactivation' => true,
				'external_url' => '',
			),
			array(
				'name' => 'WPBakery Templatera',
				'slug' => 'templatera',
				'source' => KD_THEME_PLUGINS_DIR . '/templatera.zip',
				'required' => true,
				'version' => '1.1.12',
				'force_activation' => false,
				'force_deactivation' => false,
				'external_url' => '',
			),
			array(
				'name' => 'Slider Revolution',
				'slug' => 'revslider',
				'source' => KD_THEME_PLUGINS_DIR . '/revslider.zip',
				'required' => true,
				'version' => '5.4.3',
				'force_activation' => false,
				'force_deactivation' => true,
				'external_url' => '',
			),
			array(
				'name' => 'KeyDesign Addon',
				'slug' => 'keydesign-addon',
				'source' => KD_THEME_PLUGINS_DIR . '/keydesign-addon.zip',
				'required' => true,
				'version' => '1.7',
				'force_activation' => false,
				'force_deactivation' => true,
				'external_url' => '',
			),
			array(
				'name' => 'WooCommerce',
				'slug' => 'woocommerce',
				'required' => false,
			),
			array(
				'name' => 'Contact Form 7',
				'slug' => 'contact-form-7',
				'required' => true,
			),
		);

		// Change this to your theme text domain, used for internationalising strings

		$incubator_theme_text_domain = 'incubator';
		$config = array(
			'domain' => $incubator_theme_text_domain,
			'default_path' => '',
			'parent_slug' => 'themes.php',
			'menu' => 'install-required-plugins',
			'has_notices' => true,
			'is_automatic' => true,
			'message' => '',
			'strings' => array(
				'page_title' => esc_html__('Install Required Plugins', 'incubator'),
				'menu_title' => esc_html__('Install Plugins', 'incubator'),
				'installing' => esc_html__('Installing Plugin: %s', 'incubator'),
				'oops' => esc_html__('Something went wrong with the plugin API.', 'incubator') ,
				'notice_can_install_required' => esc_html__('This theme requires the following plugin: %1$s.', 'incubator'),
				'notice_can_install_recommended' => esc_html__('This theme recommends the following plugin: %1$s.', 'incubator'),
				'notice_cannot_install' => esc_html__('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'incubator'),
				'notice_can_activate_required' => esc_html__('The following required plugin is currently inactive: %1$s.', 'incubator'),
				'notice_can_activate_recommended' => esc_html__('The following recommended plugin is currently inactive: %1$s.', 'incubator'),
				'notice_cannot_activate' => esc_html__('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'incubator'),
				'notice_ask_to_update' => esc_html__('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'incubator'),
				'notice_cannot_update' => esc_html__('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'incubator'),
				'install_link' => esc_html__('Begin installing plugin', 'incubator') ,
				'activate_link' => esc_html__('Activate installed plugin', 'incubator') ,
				'return' => esc_html__('Return to Required Plugins Installer', 'incubator') ,
				'plugin_activated' => esc_html__('Plugin activated successfully.', 'incubator') ,
				'complete' => esc_html__('All plugins installed and activated successfully. %s', 'incubator'),
				'nag_type' => 'updated'
			)
		);
		tgmpa($plugins, $config);
		}
	}

add_action('tgmpa_register', 'keydesign_register_plugins');
?>

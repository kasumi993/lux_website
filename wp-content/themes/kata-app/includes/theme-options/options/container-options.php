<?php

/**
 * Container Options.
 *
 * @author  ClimaxThemes
 * @package Kata Plus
 * @since   1.0.0
 */

// Don't load directly.
if (!defined('ABSPATH')) {
	exit;
}

if (!class_exists('Kata_Theme_Options_Container')) {
	class Kata_Theme_Options_Container extends Kata_Theme_Options
	{
		/**
		 * Set Options.
		 *
		 * @since   1.0.0
		 */
		public static function set_options()
		{
			// Container section
			Kirki::add_section(
				'kata_container_section',
				[
					'title'      => esc_html__('Container', 'kata-app'),
					'icon'       => 'ti-layout',
					'capability' => kata_Helpers::capability(),
					'priority'   => 3,
				]
			);
			Kirki::add_field(
				self::$opt_name,
				[
					'settings'        => 'kata_wide_container',
					'section'         => 'kata_container_section',
					'label'           => esc_html__('Fluid Container', 'kata-app'),
					'description'     => esc_html__('Enable this option to have Wide Container in large screen', 'kata-app'),
					'type'            => 'switch',
					'default'         => '0',
					'choices'         => [
						'on'  => esc_html__('Enabled', 'kata-app'),
						'off' => esc_html__('Disabled', 'kata-app'),
					],
					'active_callback' => [
						[
							'setting'  => 'kata_layout',
							'operator' => '==',
							'value'    => 'kata-wide',
						],
					],
				]
			);
			Kirki::add_field(
				self::$opt_name,
				[
					'settings'        => 'kata_grid_size_desktop',
					'section'         => 'kata_container_section',
					'label'           => esc_html__('Desktop', 'kata-app'),
					'description'     => esc_html__('Sets the responsive container size for desktop', 'kata-app'),
					'type'            => 'slider',
					'default'         => 1280,
					'choices'         => [
						'min'  => 0,
						'max'  => 3840,
						'step' => 1,
					],
					'active_callback' => [
						[
							'setting'  => 'kata_layout',
							'operator' => '==',
							'value'    => 'kata-wide',
						],
					],
				]
			);
			Kirki::add_field(
				self::$opt_name,
				[
					'settings'        => 'kata_grid_size_laptop',
					'section'         => 'kata_container_section',
					'label'           => esc_html__('Laptop', 'kata-app'),
					'description'     => esc_html__('Sets the responsive container size for laptop', 'kata-app'),
					'type'            => 'slider',
					'default'         => 1024,
					'choices'         => [
						'min'  => 0,
						'max'  => 3840,
						'step' => 1,
					],
					'active_callback' => [
						[
							'setting'  => 'kata_layout',
							'operator' => '==',
							'value'    => 'kata-wide',
						],
					],
				]
			);
			Kirki::add_field(
				self::$opt_name,
				[
					'settings'        => 'kata_grid_size_tabletlandscape',
					'section'         => 'kata_container_section',
					'label'           => esc_html__('Landscape Tablet View', 'kata-app'),
					'description'     => esc_html__('Sets the responsive container size for landscape tablet view', 'kata-app'),
					'type'            => 'slider',
					'default'         => 96,
					'choices'         => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
					'active_callback' => [
						[
							'setting'  => 'kata_layout',
							'operator' => '==',
							'value'    => 'kata-wide',
						],
					],
				]
			);
			Kirki::add_field(
				self::$opt_name,
				[
					'settings'        => 'kata_grid_size_tablet',
					'section'         => 'kata_container_section',
					'label'           => esc_html__('Tablet', 'kata-app'),
					'description'     => esc_html__('Sets the responsive container size for tablet', 'kata-app'),
					'type'            => 'slider',
					'default'         => 96,
					'choices'         => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
					'active_callback' => [
						[
							'setting'  => 'kata_layout',
							'operator' => '==',
							'value'    => 'kata-wide',
						],
					],
				]
			);
			Kirki::add_field(
				self::$opt_name,
				[
					'settings'        => 'kata_grid_size_mobile',
					'section'         => 'kata_container_section',
					'label'           => esc_html__('Mobile', 'kata-app'),
					'description'     => esc_html__('Sets the responsive container size for mobile', 'kata-app'),
					'type'            => 'slider',
					'default'         => 96,
					'choices'         => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
					'active_callback' => [
						[
							'setting'  => 'kata_layout',
							'operator' => '==',
							'value'    => 'kata-wide',
						],
					],
				]
			);
			Kirki::add_field(
				self::$opt_name,
				[
					'settings'        => 'kata_grid_size_small_mobile',
					'section'         => 'kata_container_section',
					'label'           => esc_html__('Small Mobile', 'kata-app'),
					'description'     => esc_html__('Sets the responsive container size for mobile small screen sizes', 'kata-app'),
					'type'            => 'slider',
					'default'         => 96,
					'choices'         => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
					'active_callback' => [
						[
							'setting'  => 'kata_layout',
							'operator' => '==',
							'value'    => 'kata-wide',
						],
					],
				]
			);
		}
	} // class

	Kata_Theme_Options_Container::set_options();
}

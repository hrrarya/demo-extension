<?php

class DEEX_HelloWorld extends ET_Builder_Module {

	public $slug       = 'deex_hello_world';
	public $vb_support = 'on';
	public $child_slug = 'deex_hello_world_child';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => '',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'deex-demo-extension' );
	}

	public function get_fields() {
		return array(
			'select' => array(
                'label' => esc_html__('Select One', 'dnext-divi-next'),
                'type' => 'select',
                'description' => esc_html__('Select the link target', 'dnext-divi-next'),
                'option_category' => 'basic_option',
                'toggle_slug' => 'main_content',
                'options' => array(
                    'image' => esc_html__('Image', 'dnext-divi-next'),
                    'icon' => esc_html__('Icon', 'dnext-divi-next'),

                ),
                'default' => 'icon',
            ),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new DEEX_HelloWorld;

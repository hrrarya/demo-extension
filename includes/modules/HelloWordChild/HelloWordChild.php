<?php

class DEEX_HelloWorldChild extends ET_Builder_Module {

	public $slug       = 'deex_hello_world_child';
    public $vb_support = 'on';
    public $type = 'child';
    public $child_title_var = 'dnxte_businesshour_title';
    public $child_title_fallback_var = 'dnxte_businesshour_title';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => '',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World Child', 'deex-demo-extension' );
	}

	public function get_fields() {
		return array(
			'image' => array(
                'label' => esc_html__('Image', 'dnext-divi-next'),
                'type' => 'upload',
                'option_category' => 'basic_option',
                'upload_button_text' => esc_attr__('Upload an image', 'dnext-divi-next'),
                'choose_text' => esc_attr__('Choose an Image', 'dnext-divi-next'),
                'update_text' => esc_attr__('Set As Image', 'dnext-divi-next'),
                'description' => esc_html__('Upload an image to display at the top of your team person.', 'dnext-divi-next'),
                'toggle_slug' => 'dnxte_promobox_img',
                'dynamic_content' => 'image',
                'mobile_options' => true,
                'hover' => 'tabs',
                'show_if' => array(
                    'parentModule:select' => 'image'
                )
            ),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new DEEX_HelloWorldChild;

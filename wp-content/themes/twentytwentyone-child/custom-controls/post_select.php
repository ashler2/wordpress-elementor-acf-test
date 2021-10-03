<?php

namespace AJ\CustomControls;

use Elementor\Base_Control;

class Post_Select extends Base_Control {

    public function get_type() {
        return 'aj-post-select';
    }

    public function enqueue()
    {
        wp_register_script( 'aj_post_select', get_stylesheet_directory_uri() . '/custom-controls/post_select.js', ['jquery'], '1.0.0', true );
        wp_enqueue_script( 'aj_post_select' );
    }

    public function content_template() {

        ?>

            <div>

                <label class="elementor-control-title">{{{ data.label }}}</label>

                <select class="post-select" style="width:100%"></select>

                <input type="hidden" class="post-select-save-value" data-setting="{{ data.name }}" />
            
            </div>

        <?php

    }

}

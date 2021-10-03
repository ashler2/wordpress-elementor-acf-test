<?php

namespace Aj\CustomComponent;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;


if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}


class TabbedPosts extends Widget_Base
{

  public function get_name()
  {
    return 'tabbed-posts';
  }


  public function get_title()
  {
    return 'Tabbed Posts';
  }


  public function get_icon()
  {
    return 'fa fa-grip-vertical';
  }

  public function get_categories()
  {
    return ['basic'];
  }

  protected function _register_controls() {

    $this->start_controls_section('post_selection', [
        'label' => 'Post Selection',
        'tab' => Controls_Manager::TAB_CONTENT
    ]);

    $this->add_control('post', [
        'label' => 'Post',
        'type' => 'aj-post-select',
    ]);

    $this->end_controls_section();

    $this->start_controls_section('post_selection', [
      'label' => 'Post Selection',
      'tab' => Controls_Manager::TAB_CONTENT
    ]);

    $this->add_control('title', [
        'label' => 'Title',
        'type' => Controls_Manager::TEXTAREA,
        // Needs Pro Version to carry on looking into this.
        'dynamic' => [
					'active' => true,
				],

    ]);

    $this->end_controls_section();

  }



  protected function render() {

    $settings = $this->get_settings_for_display();
    if(isset($settings['post'])){

      wp_reset_query();
      $postArgs = array(
        'post_type'       =>  $settings['post'],
        'posts_per_page'  =>  -1
      );
      $postQuery =  new \WP_Query($postArgs);
      
      if($postQuery->have_posts()): while ($postQuery->have_posts()):
        $postQuery->the_post();
         ?>

        <div>
          <img src="<?= get_field('logo')['url'];?>" alt="">
          <span><?= get_field('text') ?></span>
        </div>

    <?php 

      endwhile; endif; wp_reset_query();

    }

  }

}

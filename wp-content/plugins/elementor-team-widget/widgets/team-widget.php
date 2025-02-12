<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Elementor_Team_Widget extends \Elementor\Widget_Base {
    // Team Name 
    public function get_name(){
        return 'team';
    }

    //Widget Title 
    public function get_title(){
        return esc_html__( 'Team', 'team-widget'); 
    }

    //Widget Icon
    public function get_icon(): string {
		return 'eicon-person';
	}

    //Widget Help URL 
    public function get_custom_help_url(): string {
		return 'https://developers.elementor.com/docs/widgets/';
	}

    //Widget Categories 
    public function get_categories(): array {
		return [ 'general' ];
	}

    //Widget Keywords 
    public function get_keywords(): array {
		return [ 'team', 'memebers', 'our team' ];
	}

    //Widget Controls 
    protected function register_controls(){
        //Content Section 
        $this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'team-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        
        //Team Image 
        $this->add_control(
			'team_image',
			[
				'label' => esc_html__( 'Choose Image', 'team-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        //Team Name 
        $this->add_control(
			'team_name',
			[
				'label' => esc_html__( 'Title', 'team-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'team-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'team-widget' ),
                'label_block' => true,
                'separator' => 'before'
			]
		);

        //Team Degination 
        $this->add_control(
			'team_desg',
			[
				'label' => esc_html__( 'Designation', 'team-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Designation', 'team-widget' ),
				'placeholder' => esc_html__( 'Team designation', 'team-widget' ),
			]
		);
        
		    $this->end_controls_section();
        }
        
}
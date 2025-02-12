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
                    //Widget Style Section 
        $this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Marker Style', 'team-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        //Title Style Color
        $this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Title Color', 'team-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teams h4' => 'color: {{VALUE}};',
				],
                'default' => '#333', 
                'separator' => 'after',
			]
		);

        //Title Style Font 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html('Title Typography', 'team-widget'),
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .teams h4',
                'separator' => 'after',
			]
		);

         //Desc Style Color
         $this->add_control(
			'desg_color',
			[
				'label' => esc_html__( 'Desg Color', 'team-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teams p' => 'color: {{VALUE}};',
				],
                'default' => '#333', 
                'separator' => 'before',
			]
		);

        //Desg Style Font 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html('Desc Typography', 'team-widget'),
				'name' => 'desc_typography',
				'selector' => '{{WRAPPER}} .teams p',
                'separator' => 'before',
			]
		);

        $this->end_controls_section();
        }



        //Render Data 
        protected function render(){
            $settings           = $this->get_settings_for_display();
            $team_image         = $settings['team_image']['url'];
            $team_name          = $settings['team_name'];
            $team_desg          = $settings['team_desg'];
        ?>
        <div class="teams">
            <img src="<?php echo $team_image ?>" alt="">
            <h4><?php echo $team_name ?></h4>
            <p><?php echo $team_desg ?></p>
        </div>
        <?php

        }
}
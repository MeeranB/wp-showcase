<?php

namespace OXI_IMAGE_HOVER_PLUGINS\Modules\Flipbox\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Effects1
 *
 * @author biplo
 */
use OXI_IMAGE_HOVER_PLUGINS\Modules\Flipbox\Modules as Modules;
use OXI_IMAGE_HOVER_PLUGINS\Classes\Controls as Controls;

class Effects9 extends Modules {

    public function register_frontend_tabs() {
        $this->start_section_tabs(
                'oxi-image-hover-start-tabs', [
            'condition' => [
                'oxi-image-hover-start-tabs' => 'frontend'
            ]
                ]
        );
        $this->start_section_devider();
        $this->register_front_content_settings();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->register_front_icon_settings();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function register_front_icon_settings() {
        $this->start_controls_section(
                'imahe-hover', [
            'label' => esc_html__('Icon Settings', 'image-hover-effects-ultimate'),
            'showing' => FALSE,
                ]
        );

        $this->add_responsive_control(
                'oxi-image-flip-front-icon-size', $this->style, [
            'label' => esc_html__('Icon Size', 'image-hover-effects-ultimate'),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-front-section .oxi-image-hover-icon .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
            'description' => 'Allows you to Set Icon Size.',
                ]
        );
        $this->add_control(
                'oxi-image-flip-front-icon-color', $this->style, [
            'label' => esc_html__('Color', 'image-hover-effects-ultimate'),
            'type' => Controls::COLOR,
            'default' => '#b414c9',
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-front-section .oxi-image-hover-icon .oxi-icons' => 'color: {{VALUE}};',
            ],
            'description' => 'Color property is used to set the color of the Icon.',
                ]
        );

        $this->add_responsive_control(
                'oxi-image-flip-front-icon-margin', $this->style, [
            'label' => esc_html__('Margin', 'image-hover-effects-ultimate'),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-front-section .oxi-image-hover-icon ' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ], 'description' => 'Margin properties are used to create space around Icon.',
                ]
        );
        $this->end_controls_section();
    }

    public function register_front_content_settings() {
        $this->start_controls_section(
                'oxi-image-hover', [
            'label' => esc_html__('Content Settings', 'image-hover-effects-ultimate'),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'oxi-image-flip-front-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-front-section' => '',
            ], 'description' => 'Customize Hover Background with Color or Gradient or Image properties.',
                ]
        );

        $this->add_group_control(
                'oxi-image-flip-front-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-front-section' => '',
            ], 'description' => 'Border property is used to set the Hover Border of the Flipbox.',
                ]
        );

        $this->add_responsive_control(
                'oxi-image-flip-front-border-radius', $this->style, [
            'label' => esc_html__('Border Radius', 'image-hover-effects-ultimate'),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-frontend, '
                . '{{WRAPPER}} .oxi-image-hover-figure-frontend:before, '
                . '{{WRAPPER}} .oxi-image-hover-figure-frontend:after, '
                . '{{WRAPPER}} .oxi-image-hover-figure-front-section, '
                . '{{WRAPPER}} .oxi-image-hover-figure-backend, '
                . '{{WRAPPER}} .oxi-image-hover-figure-backend:before, '
                . '{{WRAPPER}} .oxi-image-hover-figure-backend:after, '
                . '{{WRAPPER}} .oxi-image-hover-figure-back-section ' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ], 'description' => 'Allows you to add rounded corners to Flipbox with options.',
                ]
        );
        $this->add_group_control(
                'oxi-image-flip-front-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-frontend:before' => '',
                '{{WRAPPER}} .oxi-image-hover-figure-backend:before' => '',
            ], 'description' => 'Allows you at hover to attaches one or more shadows into Button.',
                ]
        );
        $this->add_responsive_control(
                'oxi-image-flip-front-padding', $this->style, [
            'label' => esc_html__('Padding', 'image-hover-effects-ultimate'),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-front-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ], 'description' => 'Generate space around a Flipbox, inside of any defined borders or Background.',
                ]
        );
        $this->end_controls_section();
    }

    public function register_backend_tabs() {
        $this->start_section_tabs(
                'oxi-image-hover-start-tabs', [
            'condition' => [
                'oxi-image-hover-start-tabs' => 'backend'
            ]
                ]
        );
        $this->start_section_devider();
        $this->register_back_content_settings();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->register_back_icon_settings();
        $this->end_section_devider();

        $this->end_section_tabs();
    }

    public function register_back_icon_settings() {
        $this->start_controls_section(
                'oxi-image-hover', [
            'label' => esc_html__('Icon Settings', 'image-hover-effects-ultimate'),
            'showing' => FALSE,
                ]
        );

        $this->add_responsive_control(
                'oxi-image-flip-back-icon-size', $this->style, [
            'label' => esc_html__('Icon Size', 'image-hover-effects-ultimate'),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-backend .oxi-image-hover-icon .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};',
            ], 'description' => 'Allows you to Set Icon Size.',
                ]
        );

        $this->add_control(
                'oxi-image-flip-back-icon-color', $this->style, [
            'label' => esc_html__('Color', 'image-hover-effects-ultimate'),
            'type' => Controls::COLOR,
            'default' => '#b414c9',
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-backend .oxi-image-hover-icon .oxi-icons' => 'color: {{VALUE}};',
            ], 'description' => 'Color property is used to set the color of the Icon.',
                ]
        );
        $this->add_responsive_control(
                'oxi-image-flip-back-icon-margin', $this->style, [
            'label' => esc_html__('Margin', 'image-hover-effects-ultimate'),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-backend .oxi-image-hover-icon' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ], 'description' => 'Margin properties are used to create space around Icon.',
                ]
        );
        $this->add_control(
                'oxi-image-flip-back-icon-animation', $this->style, [
            'label' => esc_html__('Animation', 'image-hover-effects-ultimate'),
            'type' => Controls::SELECT,
            'default' => 'solid',
            'options' => [
                '' => esc_html__('None', 'image-hover-effects-ultimate'),
                'iheu-fade-up' => esc_html__('Fade Up', 'image-hover-effects-ultimate'),
                'iheu-fade-down' => esc_html__('Fade Down', 'image-hover-effects-ultimate'),
                'iheu-fade-left' => esc_html__('Fade Left', 'image-hover-effects-ultimate'),
                'iheu-fade-right' => esc_html__('Fade Right', 'image-hover-effects-ultimate'),
                'iheu-fade-up-big' => esc_html__('Fade up Big', 'image-hover-effects-ultimate'),
                'iheu-fade-down-big' => esc_html__('Fade down Big', 'image-hover-effects-ultimate'),
                'iheu-fade-left-big' => esc_html__('Fade left Big', 'image-hover-effects-ultimate'),
                'iheu-fade-right-big' => esc_html__('Fade Right Big', 'image-hover-effects-ultimate'),
                'iheu-zoom-in' => esc_html__('Zoom In', 'image-hover-effects-ultimate'),
                'iheu-zoom-out' => esc_html__('Zoom Out', 'image-hover-effects-ultimate'),
                'iheu-flip-x' => esc_html__('Flip X', 'image-hover-effects-ultimate'),
                'iheu-flip-y' => esc_html__('Flip Y', 'image-hover-effects-ultimate'),
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-backend .oxi-image-hover-icon' => '',
            ], 'description' => 'Allows you to animated Icon while viewing.',
                ]
        );
        $this->add_control(
                'oxi-image-flip-back-icon-animation-delay', $this->style, [
            'label' => esc_html__('Animation Delay', 'image-hover-effects-ultimate'),
            'type' => Controls::SELECT,
            'default' => '',
            'options' => [
                '' => esc_html__('None', 'image-hover-effects-ultimate'),
                'oxi-image-hover-delay-xs' => esc_html__('Delay XS', 'image-hover-effects-ultimate'),
                'oxi-image-hover-delay-sm' => esc_html__('Delay SM', 'image-hover-effects-ultimate'),
                'oxi-image-hover-delay-md' => esc_html__('Delay MD', 'image-hover-effects-ultimate'),
                'oxi-image-hover-delay-lg' => esc_html__('Delay LG', 'image-hover-effects-ultimate'),
                'oxi-image-hover-delay-xl' => esc_html__('Delay XL', 'image-hover-effects-ultimate'),
                'oxi-image-hover-delay-xxl' => esc_html__('Delay XXL', 'image-hover-effects-ultimate'),
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-backend .oxi-image-hover-icon' => '',
            ], 'description' => 'Allows you to animation delay of Icon while viewing.',
                ]
        );

        $this->end_controls_section();
    }

    public function register_back_content_settings() {
        $this->start_controls_section(
                'oxi-image-hover', [
            'label' => esc_html__('Content Settings', 'image-hover-effects-ultimate'),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'oxi-image-flip-back-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-back-section' => '',
            ], 'description' => 'Customize Hover Background with Color or Gradient or Image properties.',
                ]
        );

        $this->add_group_control(
                'oxi-image-flip-back-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-back-section' => '',
            ], 'description' => 'Border property is used to set the Hover Border of the Flipbox.',
                ]
        );

        $this->add_responsive_control(
                'oxi-image-flip-back-border-radius', $this->style, [
            'label' => esc_html__('Border Radius', 'image-hover-effects-ultimate'),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover:hover .oxi-image-hover-figure .oxi-image-hover-figure-frontend, '
                . '{{WRAPPER}} .oxi-image-hover.oxi-touch .oxi-image-hover-figure .oxi-image-hover-figure-frontend, '
                . '{{WRAPPER}} .oxi-image-hover:hover .oxi-image-hover-figure .oxi-image-hover-figure-frontend:before, '
                . '{{WRAPPER}} .oxi-image-hover.oxi-touch .oxi-image-hover-figure .oxi-image-hover-figure-frontend:before, '
                . '{{WRAPPER}} .oxi-image-hover:hover .oxi-image-hover-figure .oxi-image-hover-figure-frontend:after, '
                . '{{WRAPPER}} .oxi-image-hover.oxi-touch .oxi-image-hover-figure .oxi-image-hover-figure-frontend:after, '
                . '{{WRAPPER}} .oxi-image-hover:hover .oxi-image-hover-figure .oxi-image-hover-figure-front-section, '
                . '{{WRAPPER}} .oxi-image-hover.oxi-touch .oxi-image-hover-figure .oxi-image-hover-figure-front-section, '
                . '{{WRAPPER}} .oxi-image-hover:hover .oxi-image-hover-figure .oxi-image-hover-figure-front-section img, '
                . '{{WRAPPER}} .oxi-image-hover.oxi-touch .oxi-image-hover-figure .oxi-image-hover-figure-front-section img, '
                . '{{WRAPPER}} .oxi-image-hover:hover .oxi-image-hover-figure .oxi-image-hover-figure-backend, '
                . '{{WRAPPER}} .oxi-image-hover.oxi-touch .oxi-image-hover-figure .oxi-image-hover-figure-backend, '
                . '{{WRAPPER}} .oxi-image-hover:hover .oxi-image-hover-figure .oxi-image-hover-figure-backend:before, '
                . '{{WRAPPER}} .oxi-image-hover.oxi-touch .oxi-image-hover-figure .oxi-image-hover-figure-backend:before, '
                . '{{WRAPPER}} .oxi-image-hover:hover .oxi-image-hover-figure .oxi-image-hover-figure-backend:after, '
                . '{{WRAPPER}} .oxi-image-hover.oxi-touch .oxi-image-hover-figure .oxi-image-hover-figure-backend:after, '
                . '{{WRAPPER}} .oxi-image-hover:hover .oxi-image-hover-figure .oxi-image-hover-figure-back-section, '
                . '{{WRAPPER}} .oxi-image-hover.oxi-touch .oxi-image-hover-figure .oxi-image-hover-figure-back-section ' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ], 'description' => 'Allows you to add rounded corners to Flipbox with options.',
                ]
        );
        $this->add_group_control(
                'oxi-image-flip-back-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-backend:before' => '',
            ], 'description' => 'Allows you at hover to attaches one or more shadows into Button.',
                ]
        );
        $this->add_responsive_control(
                'oxi-image-flip-back-padding', $this->style, [
            'label' => esc_html__('Padding', 'image-hover-effects-ultimate'),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-image-hover-figure-back-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ], 'description' => 'Generate space around a Flipbox, inside of any defined borders or Background.',
                ]
        );
        $this->end_controls_section();
    }

    public function modal_form_data() {
        ?>
        <div class="modal-header">
            <h4 class="modal-title">Image Hover Form</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <?php
            $this->add_control(
                    'image_hover_front_icon', $this->style, [
                'label' => esc_html__('Front Icon', 'image-hover-effects-ultimate'),
                'type' => Controls::ICON,
                'description' => 'Add Your Flipbox Front Icon.'
                    ]
            );

            $this->add_control(
                    'image_hover_back_icon', $this->style, [
                'label' => esc_html__('Backend Icon', 'image-hover-effects-ultimate'),
                'type' => Controls::ICON,
                'description' => 'Add Your Flipbox Backend Icon.'
                    ]
            );

            $this->start_controls_tabs(
                    'image_hover-start-tabs', [
                'separator' => TRUE,
                'options' => [
                    'frontend' => esc_html__('Front Image', 'image-hover-effects-ultimate'),
                    'backend' => esc_html__('Backend Image', 'image-hover-effects-ultimate'),
                ]
                    ]
            );
            $this->start_controls_tab();

            $this->add_group_control(
                    'image_hover_front_image', $this->style, [
                'label' => esc_html__('Image', 'image-hover-effects-ultimate'),
                'type' => Controls::MEDIA,
                'description' => 'Add or Modify Your Front Image. Adjust Front background to get better design.'
                    ]
            );

            $this->end_controls_tab();

            $this->start_controls_tab();
            $this->add_group_control(
                    'image_hover_back_image', $this->style, [
                'label' => esc_html__('Feature Image', 'image-hover-effects-ultimate'),
                'type' => Controls::MEDIA,
                'description' => 'Add or Modify Your Backend Image. Adjust Backend background to get better design.'
                    ]
            );
            $this->end_controls_tab();
            $this->end_controls_tabs();

            $this->add_group_control(
                    'image_hover_button_link', $this->style, [
                'label' => esc_html__('URL', 'image-hover-effects-ultimate'),
                'type' => Controls::URL,
                'separator' => TRUE,
                'default' => '',
                'placeholder' => 'https://www.yoururl.com',
                'description' => 'Add Your Desire Link or Url Unless make it blank'
                    ]
            );
            ?>
        </div>
        <?php
    }

    /**
     * Template Parent Item Data Rearrange
     *
     * @since 2.0.0
     */
    public function Rearrange() {
        return '<li class="list-group-item" id="{{id}}">{{image_hover_front_icon}}</li>';
    }

}

<?php
    function emyren_customize_register($wp_customize){
        // Function Add_control
        function input_control($customizer, $setting, $description, $section='', $type = 'text', $path = 'emyren'){
            $customizer -> add_control(new WP_Customize_Control($customizer,$setting,[
                'label'         => __($description,$path),
                'section'       => $section,
                'settings'      => $setting,
                'type'          => $type,
            ]));
        }
        // Function add Control Image
        function image_control($customizer,$setting,$Description,$section='', $path = 'emyren')
        {
            $customizer -> add_control(new WP_Customize_Image_Control($customizer,$setting,[
                'label'         => __($Description,$path),
                'section'       => $section,
                'settings'      => $setting
            ]));
        }
        // Function Add_Setting
        function control_setting($customizer,$setting_name,$default = '',$refreshing = true){
            $customizer -> add_setting($setting_name,['default' => $default]);
            if($refreshing == true){
                $customizer -> selective_refresh -> add_partial($setting_name,['selector'=> ".{$setting_name}",]);
            }
        }

        // ::::::::::::::::::::: Emyren Panel :::::::::::::::::::::
        $wp_customize->add_panel('emyren',[
            'title'         => __('Panel Emyren','emyren'),
            'priority'      => 1,
            'capability'    => 'edit_theme_options'
        ]);
        // ::::::::::::::::::::: Emyren Section :::::::::::::::::::::
        $wp_customize -> add_section('emyren_general',[
            'title'         => __('General','emyren'),
            'description'   => 'Opciones Generales',
            'priority'      => 1,
            'panel'         => 'emyren'
        ]);
        $wp_customize -> add_section('emyren_contact',[
            'title'         => __('Contacto','emyren'),
            'description'   => 'Personalizar contactos',
            'priority'      => 2,
            'panel'         => 'emyren'
        ]);
        // ::::::::::::::::::::: Zone Contact :::::::::::::::::::::
        // @@ Emails
        for ($i = 1; $i<4; $i++){
            control_setting($wp_customize,"emyren_email{$i}");
            input_control($wp_customize,"emyren_email{$i}","Correo Electronico {$i}",'emyren_contact','email');
        }
        // @@ Telephones
        for ($i = 1; $i<4; $i++){
            control_setting($wp_customize,"emyren_telephone{$i}");
            input_control($wp_customize,"emyren_telephone{$i}","Telefono {$i}",'emyren_contact','number');
        }
        // @@ Social Media
        $socialMedia = ['youtube','facebook','linkedin','twitter'];
        foreach ($socialMedia as $item ){
            control_setting($wp_customize,"emyren_{$item}");
            input_control($wp_customize,"emyren_{$item}",$item,'emyren_contact','url');
        }
        // ::::::::::::::::::::: Zone General :::::::::::::::::::::
        control_setting($wp_customize,"emyren_logo",'',false);
        image_control($wp_customize,'emyren_logo','Logo de la empresa','emyren_general');
    }
    add_action('customize_register','emyren_customize_register');
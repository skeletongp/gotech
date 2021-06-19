<?php

/* Los valores como la foto de usuario y y el rol los
obtiene del modelo User en App\Models\User*/

return [

    /* Títulos para la página */
    'title' => '',
    'title_prefix' => 'Gotech | ',
    'title_postfix' => '',

    /* Configuración del favion */
    'use_ico_only' => true,
    'use_full_favicon' => false,

    /* Personalización de la parte del logo */
    'logo' => '<b>Go</b>TECH',
    'logo_img' => 'imgs/gotechlogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Gotech',

    /* Personalización del botón de usuario */
    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-info text-center',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /* Personalización del Layout */
    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,
    'layout_dark_mode' => null,

    /* Clases para la parte de autentificación */
    'classes_auth_card' => 'card-outline card-info',
    'classes_auth_header' => 'bg-gradient-dark',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat bg-dark rounded-lg ',

    /* Clases para la plantilla */
    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '<bg-blue-3></bg-blue-3>00 rounded-xl mx-1',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-dark elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-black navbar-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /* Personalización del menú principal */
    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /* Personalización del menú de la Derecha */
    'right_sidebar' => true,
    'right_sidebar_icon' => 'fas fa-cog',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => false,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /* Configuración de las url pretedeterminadas */
    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,


    /* Para desactivar bootstrap y utilizar mi propio CSS NO CAMBIAR */
    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',



    /* Los permisos para el campo can están en App\Providers\AuthServicesProvider */
    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'Ingrese término de búsqueda',
            'topnav_right' => true,
        ],

        /* Sección de búsqueda */
        [
            'type' => 'sidebar-menu-search',
            'text' => 'Búsqueda',
        ],
        
        
        /* ADMINISTRADOR */
        [
            'header' => 'ADMINISTRAR',
            'can' => 'administrar'
        ],

        /* ESTUDIAR */
        [
            'header' => 'VISTA GENERAL',
            'can' => 'estudiar'
        ],
        [
            'text' => 'Cursos',
            'route' => 'cursos_index',
            'icon' => 'fas fa-fw fa-graduation-cap',
        ],
        [
            'text' => 'Mis Cursos',
            'route' => 'cursos_miscursos',
            'icon' => 'fas fa-fw fa-graduation-cap',
            'can'=>'estudiar'
        ],

        [
            'text' => 'Estudiantes',
            'url' => '#',
            'icon' => 'fas fa-fw fa-user',
            'can' => 'administrar'
        ],

        [],

        ['header' => 'PARA APRENDER'],
        [
            'text' => 'Microsoft Office',
            'icon' => 'fab fa-fw fa-windows',
            'submenu' => [
                [
                    'text' => 'Excel',
                    'url'  => '#',
                    "icon" => "fas fa-fw fa-file-excel",
                    'icon_color' => 'green-400'
                ],
                [
                    'text' => 'Powerpoint',
                    'url'  => '#',
                    "icon" => "fas fa-fw fa-file-powerpoint",
                    'icon_color' => 'red-500'
                ],
                [
                    'text' => 'Project',
                    'url'  => '#',
                    "icon" => "fas fa-fw fa-file-powerpoint",
                    'icon_color' => 'green-500'
                ],

                [
                    'text' => 'Word',
                    'url'  => '#',
                    "icon" => "fas fa-fw fa-file-word",
                    'icon_color' => 'blue-400'
                ],
            ]
        ],
        [
            'text' => 'Lengua y Escritura',
            'icon' => 'fas fa-fw fa-spell-check',
            'submenu' => [
                [
                    'text' => 'Gramática',
                    'url'  => '#',
                    "icon" => "fas fa-fw fa-spell-check",
                    'icon_color' => 'blue-600'
                ],
                [
                    'text' => 'Lectura',
                    'url'  => '#',
                    "icon" => "fas fa-fw fa-book",
                    'icon_color' => 'blue-400'
                ],
                [
                    'text' => 'Ortografía',
                    'url'  => '#',
                    "icon" => "fas fa-fw fa-signature",
                    'icon_color' => 'indigo-700'
                ],
            ]
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],


    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/sweetalert2/sweetalert2.all.min.js',
                ],
            ],
        ],
        'Pace' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => false,
];

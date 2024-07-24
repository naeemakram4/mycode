<?php

return [
    /**
     * -> NOTE: Aside menu icon reference
     * -> Using bootstrap icon only need to add 'grid' <i class="bi bi-grid fs-3"></i>
     * -> https://icons.getbootstrap.com/
     * 'sub' => [
     *  [
     *     'title' => 'Company Profile',
     *     'route' => 'test'
     *  ]
     * ]
     */

    'admin' => [
        [
            'title' => 'Dashboard',
            'route' => 'admin.dashboard',
            'icon' => 'grid',
        ],

        [
            'title' => 'Employees',
            'route' => 'admin.employee.index',
            'icon' => 'people',
            'heading' => 'Management'
        ],

        [
            'title' => 'Projects',
            'route' => 'admin.project.index',
            'icon' => 'kanban',
        ],
        [
            'title' => 'Services',
            'route' => 'admin.service.index',
            'icon' => 'gear-wide-connected',
        ],

        [
            'title' => 'Access Management',
            'route' => 'test',
            'icon' => 'shield-check',
            'heading' => 'Security'
        ],

    ],

    'employee' => [
        [
            'title' => 'Dashboard',
            'route' => 'employee.dashboard',
            'icon' => 'grid',
        ],

        [
            'title' => 'Projects',
            'route' => 'employee.project.index',
            'icon' => 'kanban',
            'heading' => 'Management',
        ],

    ]
];

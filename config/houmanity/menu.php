<?php

return [
    /**
     * -> NOTE: Aside menu icon reference
     * -> Using bootstrap icon only need to add 'grid' <i class="bi bi-grid fs-3"></i>
     * -> https://icons.getbootstrap.com/
     * 'sub' => [
     * [
     * 'title' => 'Company Profile',
     * 'route' => 'test'
     * ]
     * ]
     */

    'admin' => [
        [
            'title' => 'Dashboard',
            'route' => 'admin.dashboard',
            'icon' => 'grid',
        ],
//        [
//            'title' => 'Report',
//            'route' => 'admin.report.project',
//            'icon' => 'activity',
//        ],
//        [
//            'title' => 'Meeting',
//            'route' => 'admin.meeting.index',
//            'icon' => 'webcam',
//        ],
//        [
//            'title' => 'Company',
//            'route' => 'javascript:void(0);',
//            'icon' => 'building',
//            'heading' => 'Company',
//            'sub_routes' => ['admin.department.index', 'admin.designation.index', 'test'],
//            'sub' => [
//                [
//                    'title' => 'Departments',
//                    'route' => 'admin.department.index',
//                ],
//                [
//                    'title' => 'Designations',
//                    'route' => 'admin.designation.index',
//                ],
//                [
//                    'title' => 'Employee',
//                    'route' => 'admin.employee.index',
//                ]
//            ]
//        ],

        [
            'title' => 'Leads',
            'route' => 'admin.lead-management.index',
            'icon' => 'stars',
        ],

        [
            'title' => 'Clients',
            'route' => 'admin.client.index',
            'icon' => 'people',
            'heading' => 'Users'
        ],
        [
            'title' => 'Employees',
            'route' => 'admin.employee.index',
            'icon' => 'people',
        ],
        [
            'title' => 'Requests',
            'route' => 'admin.request.index',
            'icon' => 'send',
            'heading' => 'Services'
        ],
        [
            'title' => 'Projects',
            'route' => 'admin.project.index',
            'icon' => 'kanban',
        ],

//        [
//            'title' => 'Followups',
//            'route' => 'admin.followup.index',
//            'heading' => 'Sales Channel',
//            'icon' => 'arrow-clockwise',
//        ],
        [
            'title' => 'Services',
            'route' => 'admin.service.index',
            'icon' => 'gear-wide-connected',
        ],
//        [
//            'title' => 'Proposals',
//            'route' => 'admin.proposal.index',
//            'icon' => 'card-text',
//        ],
//        [
//            'title' => 'Task',
//            'route' => 'admin.task.index',
//            'icon' => 'list-check',
//        ],
        [
            'title' => 'Invoices',
            'route' => 'javascript:void(0);',
            'icon' => 'receipt',
            'heading' => 'System Management',
            'sub_routes' => ['admin.invoice.index', 'admin.invoice.create'],
            'sub' => [
                [
                    'title' => 'Invoices List',
                    'route' => 'admin.invoice.index'
                ],
                [
                    'title' => 'Create Invoice',
                    'route' => 'admin.invoice.create'
                ]
            ]
        ],
        [
            'title' => 'File Manager',
            'route' => 'admin.file.manager.index',
            'icon' => 'images',
        ],
        [
            'title' => 'Access Management',
            'route' => 'test',
            'icon' => 'shield-check',
        ],

    ],
    'customer' => [
        [
            'title' => 'Dashboard',
            'route' => 'customer.dashboard',
            'icon' => 'grid',
        ],
        [
            'title' => 'Requests',
            'route' => 'customer.request.index',
            'icon' => 'send',
            'heading' => 'Services'
        ],
        [
            'title' => 'Projects',
            'route' => 'customer.project.index',
            'icon' => 'kanban',
        ],
//        [
//            'title' => 'Task',
//            'route' => 'customer.task.index',
//            'icon' => 'list-check',
//        ],
//        [
//            'title' => 'SEO',
//            'route' => 'customer.statics.seo',
//            'icon' => 'activity',
//            'heading' => 'Statics',
//        ],
//
//        [
//            'title' => 'PPC',
//            'route' => 'customer.statics.ppc',
//            'icon' => 'stars',
//        ],
        [
            'title' => 'Invoices',
            'route' => 'customer.invoice.index',
            'icon' => 'receipt',
            'heading' => 'Billing',
        ],
    ],
    'employee' => [
    [
        'title' => 'Dashboard',
        'route' => 'employee.dashboard',
        'icon' => 'grid',
    ],
    [
        'title' => 'Clients',
        'route' => 'employee.client.index',
        'icon' => 'people',
        'heading' => 'users'
    ],
    [
        'title' => 'Requests',
        'route' => 'employee.request.index',
        'icon' => 'send',
        'heading' => 'Services'
    ],
    [
        'title' => 'Projects',
        'route' => 'employee.project.index',
        'icon' => 'kanban',
    ],
//    [
//        'title' => 'Task',
//        'route' => 'employee.task.index',
//        'icon' => 'list-check',
//    ],
//    [
//        'title' => 'SEO',
//        'route' => 'test',
//        'icon' => 'activity',
//        'heading' => 'Statics',
//    ],

//    [
//        'title' => 'PPC',
//        'route' => 'test',
//        'icon' => 'stars',
//    ],
]
];

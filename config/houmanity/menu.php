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
        [
            'title' => 'Report',
            'route' => 'admin.report.project',
            'icon' => 'activity',
        ],
        [
            'title' => 'Meeting',
            'route' => 'admin.meeting.index',
            'icon' => 'webcam',
        ],
        [
            'title' => 'Company',
            'route' => 'javascript:void(0);',
            'icon' => 'building',
            'heading' => 'Company',
            'sub_routes' => ['admin.department.index', 'admin.designation.index', 'test'],
            'sub' => [
                [
                    'title' => 'Departments',
                    'route' => 'admin.department.index',
                ],
                [
                    'title' => 'Designations',
                    'route' => 'admin.designation.index',
                ],
                [
                    'title' => 'Employee',
                    'route' => 'test',
                ]
            ]
        ],

        [
            'title' => 'Leads',
            'route' => 'javascript:void(0);',
            'icon' => 'stars',
            'sub_routes' => ['admin.department', 'admin.designation', 'admin.team'],
            'sub' => [
                [
                    'title' => 'Referrals',
                    'route' => 'admin.referral.index',
                ],
                [
                    'title' => 'Referred Clients',
                    'route' => 'admin.referred.client.index',
                ],
                [
                    'title' => 'Website',
                    'route' => 'admin.website.index',
                ]
            ]
        ],

        [
            'title' => 'Clients',
            'route' => 'admin.client.index',
            'icon' => 'people',
        ],
        [
            'title' => 'Projects',
            'route' => 'admin.project.index',
            'icon' => 'kanban',
        ],

        [
            'title' => 'Followups',
            'route' => 'admin.followup.index',
            'heading' => 'Sales Channel',
            'icon' => 'arrow-clockwise',
        ],
        [
            'title' => 'Services',
            'route' => 'admin.service.index',
            'icon' => 'gear-wide-connected',
        ],
        [
            'title' => 'Proposals',
            'route' => 'admin.proposal.index',
            'icon' => 'card-text',
        ],
        [
            'title' => 'Invoices',
            'route' => 'admin.invoice.index',
            'icon' => 'receipt',
        ],

        [
            'title' => 'Task Management',
            'route' => 'test',
            'heading' => 'System Management',
            'icon' => 'list-check',
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
            'route' => 'admin.dashboard',
            'icon' => 'grid',
        ],
        [
            'title' => 'Report',
            'route' => 'test',
            'icon' => 'activity',
        ],

        [
            'title' => 'Leads',
            'route' => 'javascript:void(0);',
            'icon' => 'stars',
            'heading' => 'Accounts',
            'sub_routes' => ['test', 'test', 'test'],
            'sub' => [
                [
                    'title' => 'Referrals',
                    'route' => 'test',
                ],
                [
                    'title' => 'Website',
                    'route' => 'test',
                ]
            ]
        ],

        [
            'title' => 'Projects',
            'route' => 'test',
            'icon' => 'kanban',
        ],

        [
            'title' => 'Invoices',
            'route' => 'test',
            'icon' => 'receipt',
        ],

    ]
];

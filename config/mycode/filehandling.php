<?php

return [
    'storage' => [
        'clients' => env('CLIENTS_DIR', 'clients'),
        'employees' => env('EMPLOYEES_DIR', 'employees'),
        'requests' => env('REQUESTS_DIR', 'requests'),
        'projects' => env('PROJECTS_DIR', 'projects'),
        'tasks' => env('TASKS_DIR', 'tasks'),
    ]
];
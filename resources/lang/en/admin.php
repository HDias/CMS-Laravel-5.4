<?php
return [

    /*
    |--------------------------------------------------------------------------
    | English Admin Language Lines
    |--------------------------------------------------------------------------
    */

    'article' => [
        'create'                    => 'Create article',
        'edit'                      => 'Edit article',
        'index'                     => 'Articles',
        'show'                      => 'Show article'
    ],
    'category' => [
        'create'                    => 'Create category',
        'edit'                      => 'Edit category',
        'index'                     => 'Categories',
        'show'                      => 'Show category'
    ],
    'create' => [
        'fail'                      => 'Create operation on resource has failed.',
        'success'                   => 'Resource has been created succesfully.'
    ],
    'csrf_error'                    => 'Seems like you couldn\'t submit the form for a longtime. Please try again.',
    'datatables' => [               // DataTables, files can be found @ https://datatables.net/plug-ins/i18n/
        'sInfo'                     => 'Showing _START_ to _END_ of _TOTAL_ entries',
        'sInfoEmpty'                => 'Showing 0 to 0 of 0 entries',
        'sInfoFiltered'             => '(filtered from _MAX_ total entries)',
        'sInfoPostFix'              => '',
        'sLengthMenu'               => 'Show _MENU_ entries',
        'sProcessing'               => '<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>',
        'sSearch'                   => 'Search:',
        'sUrl'                      => '',
        'sZeroRecords'              => 'No matching records found',
        'oPaginate' => [
            'sFirst'                => 'First',
            'sLast'                 => 'Last',
            'sNext'                 => 'Next',
            'sPrevious'             => 'Previous'
        ]
    ],
    'delete' => [
        'fail'                      => 'Delete operation on resource has failed.',
        'self'                      => 'You can\'t always get what you want.',
        'success'                   => 'Resource has been deleted succesfully.'
    ],
    'elfinder'                      => 'File Manager',
    'empty'                         => 'There are not any saved records yet. Why don\'t you create a new one first?',
    'fields' => [
        'article' => [
            'category_id'           => 'Category',
            'content'               => 'Content',
            'description'           => 'Description',
            'title'                 => 'Article Title'
        ],
        'category' => [
            'articles'              => 'Article Count',
            'color'                 => 'Color',
            'description'           => 'Description',
            'language_id'           => 'Language',
            'title'                 => 'Category Title'
        ],
        'created_at'                => 'Created at',
        'dashboard' => [
            'average_time'          => 'Average time',
            'bounce_rate'           => 'Bounce rate',
            'browsers'              => 'Browser',
            'chart_country'         => 'Country',
            'chart_region'          => 'Region',
            'chart_visitors'        => 'Visitor',
            'entrance_pages'        => 'Entrance',
            'exit_pages'            => 'Exit',
            'invalid_setup'         => 'Please configure your Google Analytics setup defined in your .env file to see the dashboard (ANALYTICS_CONFIGURED).',
            'keywords'              => 'Keywords',
            'os'                    => 'OS',
            'page_visits'           => 'Average page visits',
            'pages'                 => 'Pages',
            'region_visitors'       => 'Visitor distribution: Regions',
            'time_pages'            => 'Time',
            'total_visits'          => 'Total visits',
            'traffic_sources'       => 'Source',
            'unique_visits'         => 'Unique visits',
            'visitors'              => 'Visitors',
            'visits'                => 'Visits',
            'world_visitors'        => 'Visitor distribution: World'
        ],
        'deleted_at'                => 'Deleted at',
        'language' => [
            'code'                  => 'Code',
            'flag'                  => 'Flag',
            'site_description'      => 'Site Description',
            'site_title'            => 'Site Title',
            'title'                 => 'Title'
        ],
        'no'                        => 'No',
        'page' => [
            'content'               => 'Content',
            'description'           => 'Description',
            'language_id'           => 'Language',
            'title'                 => 'Title',
        ],
        'published_at'              => 'Published at',
        'reset'                     => 'Reset',
        'save'                      => 'Save',
        'setting' => [
            'analytics_id'          => 'Analytics ID ( Format: UA-XXXXXXXXX-YYYY )',
            'disqus_shortname'      => 'Disqus Shortname',
            'email'                 => 'Email',
            'facebook'              => 'Facebook',
            'logo'                  => 'Logo',
            'twitter'               => 'Twitter'
        ],
        'updated_at'                => 'Updated at',
        'uploaded'                  => 'Uploaded file',
        'user' => [
            'email'                 => 'Email',
            'ip_address'            => 'IP',
            'logged_in_at'          => 'Login At',
            'logged_out_at'         => 'Logout At',
            'name'                  => 'Name',
            'password'              => 'Password',
            'password_confirmation' => 'Password Confirmation',
            'picture'               => 'Avatar'
        ],
        'yes'                       => 'Yes'
    ],
    'language' => [
        'create'                    => 'Create language',
        'edit'                      => 'Edit language',
        'index'                     => 'Languages',
        'show'                      => 'Show language'
    ],
    'last_login'                    => 'Last Login',
    'menu' => [
        'article' => [
            'add'                   => 'Add an Article',
            'all'                   => 'All Articles',
            'root'                  => 'Articles'
        ],
        'category' => [
            'add'                   => 'Add a Category',
            'all'                   => 'All Categories',
            'root'                  => 'Categories'
        ],
        'dashboard'                 => 'Dashboard',
        'language' => [
            'add'                   => 'Add a Language',
            'all'                   => 'All Languages',
            'root'                  => 'Languages'
        ],
        'page' => [
            'add'                   => 'Add a Page',
            'all'                   => 'All Pages',
            'root'                  => 'Pages'
        ],
        'setting'                   => 'Settings',
        'user' => [
            'add'                   => 'Add a User',
            'all'                   => 'All Users',
            'root'                  => 'Users'
        ]
    ],
    'ops' => [
        'confirmation'              => 'Are you sure?',
        'create'                    => 'Create',
        'delete'                    => 'Delete',
        'edit'                      => 'Edit',
        'modified'                  => 'Modified on',
        'name'                      => 'Ops',
        'order'                     => 'Order',
        'show'                      => 'Show'
    ],
    'page' => [
        'create'                    => 'Create page',
        'edit'                      => 'Edit page',
        'show'                      => 'Show page',
        'index'                     => 'Pages'
    ],
    'profile'                       => 'Profile',
    'root'                          => 'Dashboard',
    'setting' => [
        'index'                     => 'Settings'
    ],
    'submit'                        => 'Submit',
    'title'                         => 'Control Panel',
    'update' => [
        'fail'                      => 'Update operation on resource has failed.',
        'success'                   => 'Resource has been updated succesfully.'
    ],
    'user' => [
        'create'                    => 'Create user',
        'edit'                      => 'Edit user',
        'index'                     => 'Users',
        'show'                      => 'Show user'
    ]

];

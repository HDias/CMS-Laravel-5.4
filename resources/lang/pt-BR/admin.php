<?php
return [

    /*
    |--------------------------------------------------------------------------
    | English Admin Language Lines
    |--------------------------------------------------------------------------
    */

    'article' => [
        'create'                    => 'Criar Artigo',
        'edit'                      => 'Editar Artigo',
        'index'                     => 'Artigos',
        'show'                      => 'Mostrar Artigo'
    ],
    'category' => [
        'create'                    => 'Criar Categoria',
        'edit'                      => 'Editar categoria',
        'index'                     => 'Categorias',
        'show'                      => 'Mostrar categoria'
    ],
    'create' => [
        'fail'                      => 'Falha ao tentar criar recurso.',
        'success'                   => 'Recurso foi criado com sucesso!'
    ],
    'csrf_error'                    => 'A página ficou inátiva muito tempo. Tente novamente!',
    'datatables' => [               // DataTables, files can be found @ https://datatables.net/plug-ins/i18n/
        'sInfo'                     => 'Mostrando _INICIO_ ao _FINAL_ de _TODAS_ as entradas',
        'sInfoEmpty'                => 'Mostrando 0 a 0 de 0 entradas',
        'sInfoFiltered'             => '(filtrado do _MAXIMO_ total de entradas)',
        'sInfoPostFix'              => '',
        'sLengthMenu'               => 'Mostrar _MENU_ de entradas',
        'sProcessing'               => '<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>',
        'sSearch'                   => 'Pesquisar:',
        'sUrl'                      => '',
        'sZeroRecords'              => 'Nenhum registro encontrado',
        'oPaginate' => [
            'sFirst'                => 'Primeiro',
            'sLast'                 => 'Último',
            'sNext'                 => 'Próximo',
            'sPrevious'             => 'Anterior'
        ]
    ],
    'delete' => [
        'fail'                      => 'Delete operation on resource has failed.',
        'self'                      => 'You can\'t always get what you want.',
        'success'                   => 'Resource has been deleted succesfully.'
    ],
    'elfinder'                      => 'Gerenciador de arquivo',
    'empty'                         => 'There are not any saved records yet. Why don\'t you create a new one first?',
    'fields' => [
        'article' => [
            'category_id'           => 'Category',
            'content'               => 'Content',
            'description'           => 'Description',
            'title'                 => 'Article Title'
        ],
        'category' => [
            'articles'              => 'Contagem de Artigos',
            'color'                 => 'Cor',
            'description'           => 'Descrição',
            'language_id'           => 'Linguagem',
            'title'                 => 'Título da Categoria'
        ],
        'created_at'                => 'Criard at',
        'dashboard' => [
            'average_time'          => 'Tempo médio',
            'bounce_rate'           => 'Taxa de rejeição',
            'browsers'              => 'Navegador',
            'chart_country'         => 'País',
            'chart_region'          => 'Região',
            'chart_visitors'        => 'Visitante',
            'entrance_pages'        => 'Entrada',
            'exit_pages'            => 'Saída',
            'invalid_setup'         => 'Please configure your Google Analytics setup defined in your .env file to see the dashboard (ANALYTICS_CONFIGURED).',
            'keywords'              => 'Keywords',
            'os'                    => 'OS',
            'page_visits'           => 'Média de visitas por página',
            'pages'                 => 'Páginas',
            'region_visitors'       => 'Distribuição de visitantes: Regiões',
            'time_pages'            => 'Tempo',
            'total_visits'          => 'Total de Visitas',
            'unique_visits'         => 'Visitas únicas',
            'visitors'              => 'Visitantes',
            'visits'                => 'Visitas',
            'world_visitors'        => 'Distribuíção de Visitantes: Mundo'
        ],
        'deleted_at'                => 'DEletado em',
        'language' => [
            'code'                  => 'Código',
            'flag'                  => 'Marcação',
            'site_description'      => 'Descrição do site',
            'site_title'            => 'Título do site',
            'title'                 => 'Título'
        ],
        'no'                        => 'Não',
        'page' => [
            'content'               => 'Conteúdo',
            'description'           => 'Descrição',
            'language_id'           => 'Língua',
            'title'                 => 'Título',
        ],
        'published_at'              => 'Publicado em',
        'reset'                     => 'Reiniciar',
        'save'                      => 'Salvar',
        'setting' => [
            'analytics_id'          => 'Analytics ID ( Format: UA-XXXXXXXXX-YYYY )',
            'disqus_shortname'      => 'Disqus Shortname',
            'email'                 => 'Email',
            'facebook'              => 'Facebook',
            'logo'                  => 'Logo',
            'twitter'               => 'Twitter'
        ],
        'updated_at'                => 'Atualizado em',
        'uploaded'                  => 'Subir Arquivo',
        'user' => [
            'email'                 => 'Email',
            'ip_address'            => 'IP',
            'logged_in_at'          => 'Acessou em',
            'logged_out_at'         => 'Saiu em',
            'name'                  => 'Nome',
            'password'              => 'Senha',
            'password_confirmation' => 'Confirmação de senha',
            'picture'               => 'Avatar'
        ],
        'yes'                       => 'Sim'
    ],
    'language' => [
        'create'                    => 'Criar Linguagem',
        'edit'                      => 'Editar Linguagem',
        'index'                     => 'Languages',
        'show'                      => 'Mostrar Linguagem'
    ],
    'last_login'                    => 'Último Acesso',
    'menu' => [
        'article' => [
            'add'                   => 'Adicionar um Artigo',
            'all'                   => 'Todos os Artigos',
            'root'                  => 'Artigos'
        ],
        'category' => [
            'add'                   => 'Adicionar uma Categoria',
            'all'                   => 'Todas as Categorias',
            'root'                  => 'Categorias'
        ],
        'dashboard'                 => 'Painel',
        'language' => [
            'add'                   => 'Adicionar uma Linguagem',
            'all'                   => 'Todas as Linguagens',
            'root'                  => 'Linguagem'
        ],
        'page' => [
            'add'                   => 'Add a Page',
            'all'                   => 'All Pages',
            'root'                  => 'Pages'
        ],
        'setting'                   => 'Configurações',
        'user' => [
            'add'                   => 'Adicionar um Usuário',
            'all'                   => 'Todos os Usuários',
            'root'                  => 'Usuários'
        ]
    ],
    'ops' => [
        'confirmation'              => 'Você tem certeza?',
        'create'                    => 'Criar',
        'delete'                    => 'Delete',
        'edit'                      => 'Editar',
        'modified'                  => 'Modificado em',
        'name'                      => 'Ops',
        'order'                     => 'Ordem',
        'show'                      => 'Mostrar'
    ],
    'page' => [
        'create'                    => 'Criar page',
        'edit'                      => 'Editar page',
        'show'                      => 'Mostrar page',
        'index'                     => 'Pages'
    ],
    'profile'                       => 'Perfil',
    'root'                          => 'Painel',
    'setting' => [
        'index'                     => 'Configurações'
    ],
    'submit'                        => 'Enviar',
    'title'                         => 'Painel de Controle',
    'update' => [
        'fail'                      => 'A atualização do recurso falhou.',
        'success'                   => 'O recurso foi atualizado com sucesso!.'
    ],
    'user' => [
        'create'                    => 'Criar usuário',
        'edit'                      => 'Editar usuário',
        'index'                     => 'Usuários',
        'show'                      => 'Mostrar usuário'
    ]

];

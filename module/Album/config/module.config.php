<?php
return array(
    'controllers'  => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
            'Album\Controller\Song'  => 'Album\Controller\SongController',
        ),
    ),

    'router'       => array(
        'routes' => array(
            'album' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'       => '/album[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults'    => array(
                        'controller' => 'Album\Controller\Album',
                        'action'     => 'index',
                    ),
                ),
            ),

            'song'  => array(
                'type'    => 'segment',
                'options' => array(
                    'route'       => '/song[/:action][/:id]',
                    // 'route'       => '/album/song[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults'    => array(
                        'controller' => 'Album\Controller\Song',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),

    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
            // 'song'  => __DIR__ . '/../view',
        ),
    ),
);

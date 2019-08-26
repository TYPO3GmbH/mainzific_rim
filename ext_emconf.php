<?php

/**
 * Extension Manager/Repository config file for ext "mainzific_rim".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Mainzific Rim',
    'description' => 'Mainz in Danger',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0 - 9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99',
            'news' => '7.0.*'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'T3G\\MainzificRim\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'TYPO3 GmbH',
    'author_email' => 'info@typo3.com',
    'version' => '2.0.3',
];

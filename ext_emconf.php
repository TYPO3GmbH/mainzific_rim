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
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '9.1.0-9.1.99',
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
    'version' => '1.0.0',
];

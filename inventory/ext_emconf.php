<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 13.02.17
 * Time: 12:18
 */
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Inventory List',
    'description' => 'An extension to manage a stock.',
    'category' => 'plugin',
    'author' => 'Marco Auenhammer',
    'author_company' => '',
    'author_email' => '',
    'dependencies' => 'extbase,fluid',
    'state' => 'alpha',
    'clearCacheOnLoad' => '1',
    'version' => '0.0.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.5.1',
            'extbase' => '1.0.0-0.0.0',
            'fluid' => '1.0.0-0.0.0',
        )
    )
);

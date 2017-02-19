<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 19.02.17
 * Time: 13:49
 */

if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $_EXTKEY,
    'List',
    array('Inventory' => 'list')
);
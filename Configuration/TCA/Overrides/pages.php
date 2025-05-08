<?php
defined('TYPO3_MODE') || die();

$GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
    'label' => 'LLL:EXT:template/Resources/Private/Language/locallang_db.xlf:plugin.contains.menu',
    'value' => 'section',
    'icon' => 'apps-pagetree-folder-contains-section',
];
$GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-section'] = 'apps-pagetree-folder-contains-section';

$GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
    'label' => 'Singlepage Parent',
    'value' => 'singlepage',
    'icon' => 'apps-pagetree-folder-contains-singlepage',
];
$GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-singlepage'] = 'apps-pagetree-folder-contains-singlepage';

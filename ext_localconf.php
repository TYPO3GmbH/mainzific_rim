<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['mainzific_rim'] = 'EXT:mainzific_rim/Configuration/RTE/Default.yaml';

/***************
 * Add the login screen logo
 */

$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] = 'EXT:mainzific_rim/Resources/Public/Images/mainzific_rim.svg';
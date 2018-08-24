<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['mainzific_rim'] = 'EXT:mainzific_rim/Configuration/RTE/Default.yaml';

/***************
 * Add the login screen logo
 */
// @extensionScannerIgnoreLine
$backendConfiguration = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend'];
if (!is_array($backendConfiguration)) {
    $backendConfiguration = unserialize($backendConfiguration);
}
// Login Logo
$backendConfiguration['loginLogo'] = 'EXT:mainzific_rim/Resources/Public/Images/mainzific_rim.svg';
$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend'] = serialize($backendConfiguration);

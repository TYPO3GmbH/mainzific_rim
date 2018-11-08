<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['mainzific_rim'] = 'EXT:mainzific_rim/Configuration/RTE/Default.yaml';

/***************
 * Add the login screen logo
 */
if (TYPO3_MODE === 'BE' && !class_exists(\TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class)) {
    // @extensionScannerIgnoreLine
    $backendConfiguration = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend'];
    if (!is_array($backendConfiguration)) {
        $backendConfiguration = unserialize($backendConfiguration);
    }
    // Login Logo
    if (!isset($backendConfiguration['loginLogo']) || empty(trim($backendConfiguration['loginLogo']))) {
        $backendConfiguration['loginLogo'] = 'EXT:mainzific_rim/Resources/Public/Images/mainzific_rim.svg';
    }
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend'] = serialize($backendConfiguration);
}

$dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$dispatcher->connect(
    \TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService::class,
    'hasInstalledExtensions',
    \T3G\MainzificRim\Setup\Setup::class,
    'addBeUsers'
);

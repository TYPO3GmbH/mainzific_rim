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

$dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$dispatcher->connect(
    \TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService::class,
    'hasInstalledExtensions',
    \T3G\MainzificRim\Setup\Setup::class,
    'addBeUsers'
);

/***************
 * Register custom EXT:form configuration
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(trim('
    module.tx_form {
        settings {
            yamlConfigurations {
                120 = EXT:mainzific_rim/Configuration/Form/Setup.yaml
            }
        }
    }
    plugin.tx_form {
        settings {
            yamlConfigurations {
                120 = EXT:mainzific_rim/Configuration/Form/Setup.yaml
            }
        }
    }
'));
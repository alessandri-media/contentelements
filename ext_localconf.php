<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import \'EXT:contentelements/Configuration/TsConfig/Page/All.tsconfig\'>');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('@import \'EXT:contentelements/Configuration/TsConfig/User/All.tsconfig\'>');

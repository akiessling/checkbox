<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
tx_powermail.flexForm.type.addFieldOptions.privacy = Privacy Checkbox
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_powermail {
    view {
        templateRootPaths.10 = EXT:checkbox/Resources/Private/Templates/Plugin/Powermail/
        partialRootPaths.10 = EXT:checkbox/Resources/Private/Partials/Plugin/Powermail/
        layoutRootPaths.10 = EXT:checkbox/Resources/Private/Layouts/Plugin/Powermail/
    }
}
');
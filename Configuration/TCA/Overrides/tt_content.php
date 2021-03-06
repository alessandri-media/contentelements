<?php

$additionalColumns = [
    'tx_contentelements_card_header'          => [
        'exclude'   => 1,
        'label'     => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_card_header',
        'l10n_mode' => 'prefixLangTitle',
        'config'    => [
            'type' => 'input',
            'size' => 50,
            'max'  => 255,
        ],
    ],
    'tx_contentelements_card_footer'          => [
        'exclude'   => 1,
        'label'     => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_card_footer',
        'l10n_mode' => 'prefixLangTitle',
        'config'    => [
            'type' => 'input',
            'size' => 50,
            'max'  => 255,
        ],
    ],
    'tx_contentelements_card_flip_enable'     => [
        'exclude'  => 1,
        'label'    => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_card_flip_enable',
        'onChange' => 'reload',
        'config'   => [
            'type'       => 'check',
            'renderType' => 'checkboxToggle',
            'items'      => [
                [
                    0 => '',
                    1 => 1,
                ],
            ],
        ],
    ],
    'tx_contentelements_card_image_overlay'   => [
        'exclude'   => 1,
        'label'     => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_card_image_overlay',
        'l10n_mode' => 'prefixLangTitle',
        'config'    => [
            'type' => 'check',
        ],
    ],
    'tx_contentelements_animation'            => [
        'exclude'   => 1,
        'label'     => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_animation',
        'l10n_mode' => 'prefixLangTitle',
        'config'    => [
            'type'       => 'select',
            'renderType' => 'selectSingle',
            'items'      => [
                [
                    'None',
                    '',
                ],
            ],
        ],
    ],
    'tx_contentelements_background_color'     => [
        'exclude'   => 1,
        'label'     => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_background_color',
        'l10n_mode' => 'prefixLangTitle',
        'config'    => [
            'type'       => 'select',
            'renderType' => 'selectSingle',
            'items'      => [
                [
                    'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_background_color_none',
                    '',
                ],
            ],
        ],
    ],
    'tx_contentelements_container_rendermode' => [
        'exclude'   => 1,
        'label'     => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_container_rendermode',
        'l10n_mode' => 'prefixLangTitle',
        'config'    => [
            'type'       => 'select',
            'renderType' => 'selectSingle',
            'items'      => [
                [
                    'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_container_rendermode_none',
                    '',
                ],
                [
                    'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_container_rendermode_boxed',
                    'container',
                ],
                [
                    'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_container_rendermode_fluid',
                    'container-fluid',
                ],
            ],
        ],
    ],
    'tx_contentelements_container_no_gutters' => [
        'exclude'   => 1,
        'label'     => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_container_no_gutters',
        'l10n_mode' => 'prefixLangTitle',
        'config'    => [
            'type' => 'check',
        ],
    ],
    'tx_contentelements_bodytext'             => [
        'exclude'   => 1,
        'label'     => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_bodytext',
        'l10n_mode' => 'prefixLangTitle',
        'config'    => $GLOBALS['TCA']['tt_content']['columns']['bodytext']['config'],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'tx_contentelements_container_rendermode, tx_contentelements_background_color, tx_contentelements_container_no_gutters',
    'container_grid_25_25_25_25,container_grid_25_75,container_grid_33_33_33,container_grid_33_66,container_grid_50_50,container_grid_66_33,container_grid_75_25,container_grid_100',
    'after:header'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:content.element.carousel',
        'contentelements_carousel',
        'content-text',
    ],
    'textmedia',
    'after'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:content.element.responsive_image',
        'contentelements_responsive_image',
        'content-text',
    ],
    'textmedia',
    'after'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:content.element.logo_wall',
        'contentelements_logo_wall',
        'content-text',
    ],
    'textmedia',
    'after'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:content.element.accordion_item',
        'contentelements_accordion_item',
        'content-text',
    ],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['contentelements_card'] = [
    'showitem'         => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
            subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel,
            tx_contentelements_card_header,
            image;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_formlabel,
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
            tx_contentelements_card_flip_enable;LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_card_flip_enable,
            tx_contentelements_bodytext;LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:tx_contentelements_bodytext_card_back,
            tx_contentelements_card_footer,
            header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,       
    ',
    'columnsOverrides' => [
        'image'                       => [
            'config' => [
                'maxitems' => 1,
            ],
        ],
        'bodytext'                    => [
            'config' => [
                'enableRichtext' => true,
            ],
        ],
        'tx_contentelements_bodytext' => [
            'displayCond' => 'FIELD:tx_contentelements_card_flip_enable:=:1',
            'config'      => [
                'enableRichtext' => true,
            ],
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['types']['contentelements_carousel'] = [
    'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header; Internal title (not displayed),
            image;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_formlabel,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
    ',
];

$GLOBALS['TCA']['tt_content']['types']['contentelements_responsive_image'] = [
    'showitem'         => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header; Internal title (not displayed),
            image;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_formlabel,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
    ',
    'columnsOverrides' => [
        'image' => [
            'config' => [
                'maxitems' => 1,
            ],
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['types']['contentelements_logo_wall'] = [
    'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header; Internal title (not displayed),
            image;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_formlabel,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
    ',
];

$GLOBALS['TCA']['tt_content']['types']['contentelements_accordion_item'] = [
    'showitem'         => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
    ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'tx_contentelements_background_color, tx_contentelements_animation',
    'contentelements_card',
    'after:CType'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'tx_contentelements_card_image_overlay',
    'contentelements_card',
    'after:image'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:contentelements/Resources/Private/Language/locallang_db.xlf:content.element.card',
        'contentelements_card',
        'content-text',
    ],
    'textmedia',
    'after'
);



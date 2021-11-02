<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container_grid_25_25_25_25',
            'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:col-25-25-25-25.title',
            'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:col-25-25-25-25.description',
            [
                [
                    [
                        'name'   => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:content.left',
                        'colPos' => 101,
                    ],
                    [
                        'name'   => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:content.main',
                        'colPos' => 100,
                    ],
                    [
                        'name'   => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:content.main',
                        'colPos' => 200,
                    ],
                    [
                        'name'   => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:content.right',
                        'colPos' => 102,
                    ]
                ]
            ]
        )
    )
);

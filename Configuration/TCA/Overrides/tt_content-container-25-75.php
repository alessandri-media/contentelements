<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container_grid_25_75',
            'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:col-25-75.title',
            'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:col-25-75.description',
            [
                [
                    [
                        'name'   => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:content.left',
                        'colPos' => 101,
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

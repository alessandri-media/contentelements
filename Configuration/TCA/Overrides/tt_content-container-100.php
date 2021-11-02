<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container_grid_100',
            'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:col-100.title',
            'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:col-100.description',
            [
                [
                    [
                        'name'   => 'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:content.main',
                        'colPos' => 100,
                    ]
                ]
            ]
        )
    )
);

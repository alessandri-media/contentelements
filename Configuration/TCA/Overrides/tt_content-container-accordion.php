<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container_accordion',
            'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:accordion.title',
            'LLL:EXT:contentelements/Resources/Private/Language/locallang_container.xlf:accordion.description',
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

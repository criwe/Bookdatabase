<?php
defined('TYPO3') || die();

use Itfoo\Extbookdatabase\Controller\BookController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

call_user_func(static function() {
        ExtensionUtility::configurePlugin(
            'Extbookdatabase',
            'Booklist',
            [
                \Itfoo\Extbookdatabase\Controller\BookController::class  => 'list, show',
            ],
            // non-cacheable actions
            [
                \Itfoo\Extbookdatabase\Controller\BookController::class => '',
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    booklist {
                        iconIdentifier = extbookdatabase-plugin-booklist
                        title = LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_ext_bookdatabase_booklist.name
                        description = LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_ext_bookdatabase_booklist.description
                        tt_content_defValues {
                            CType = list
                            list_type = extbookdatabase_booklist
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'extbookdatabase-plugin-booklist',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:extbookdatabase/Resources/Public/Icons/user_plugin_booklist.svg']
			);
		
    }
);

<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Cw.ExtBookdatabase',
            'Booklist',
            [
                'Book' => 'list, show',
                'Publisher' => 'list, show',
                'Category' => 'list, show',
                'Location' => 'list, show',
                'Owner' => 'list, show',
                'Bookcondition' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Book' => '',
                'Publisher' => '',
                'Category' => '',
                'Location' => '',
                'Owner' => '',
                'Bookcondition' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    booklist {
                        iconIdentifier = ext_bookdatabase-plugin-booklist
                        title = LLL:EXT:ext_bookdatabase/Resources/Private/Language/locallang_db.xlf:tx_ext_bookdatabase_booklist.name
                        description = LLL:EXT:ext_bookdatabase/Resources/Private/Language/locallang_db.xlf:tx_ext_bookdatabase_booklist.description
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
				'ext_bookdatabase-plugin-booklist',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:ext_bookdatabase/Resources/Public/Icons/user_plugin_booklist.svg']
			);
		
    }
);

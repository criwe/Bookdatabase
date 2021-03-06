<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Cw.Extbookdatabase',
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

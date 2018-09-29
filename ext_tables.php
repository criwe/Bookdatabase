<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Cw.ExtBookdatabase',
            'Booklist',
            'booklist'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ext_bookdatabase', 'Configuration/TypoScript', 'Bookdatabase');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_book', 'EXT:ext_bookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_book.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_book');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_publisher', 'EXT:ext_bookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_publisher.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_publisher');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_category', 'EXT:ext_bookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_location', 'EXT:ext_bookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_location.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_location');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_owner', 'EXT:ext_bookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_owner.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_owner');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_language', 'EXT:ext_bookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_language.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_language');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_type', 'EXT:ext_bookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_type.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_type');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_bookcondition', 'EXT:ext_bookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_bookcondition.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_bookcondition');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_bookseries', 'EXT:ext_bookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_bookseries.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_bookseries');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_personborrowed', 'EXT:ext_bookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_personborrowed.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_personborrowed');

    }
);

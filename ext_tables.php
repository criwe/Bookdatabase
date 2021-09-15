<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Itfoo.Extbookdatabase',
            'Booklist',
            'booklist'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('extbookdatabase', 'Configuration/TypoScript', 'Bookdatabase');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_book', 'EXT:extbookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_book.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_book');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_publisher', 'EXT:extbookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_publisher.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_publisher');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_category', 'EXT:extbookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_location', 'EXT:extbookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_location.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_location');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_owner', 'EXT:extbookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_owner.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_owner');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_language', 'EXT:extbookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_language.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_language');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_type', 'EXT:extbookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_type.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_type');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_bookcondition', 'EXT:extbookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_bookcondition.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_bookcondition');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_bookseries', 'EXT:extbookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_bookseries.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_bookseries');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extbookdatabase_domain_model_personborrowed', 'EXT:extbookdatabase/Resources/Private/Language/locallang_csh_tx_extbookdatabase_domain_model_personborrowed.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbookdatabase_domain_model_personborrowed');

    }
);

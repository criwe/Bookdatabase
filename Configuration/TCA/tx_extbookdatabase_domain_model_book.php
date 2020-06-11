<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'default_sortby' => "ORDER BY uid DESC",
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,author,translator,description,isbn,publishingyear,edition,keywords,signed,soldout,borroweddate,publisher,category,location,owner,type,language,bookcondition,bookseries,personborrowed',
        'iconfile' => 'EXT:extbookdatabase/Resources/Public/Icons/tx_extbookdatabase_book.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, author, translator, description, isbn, publishingyear, edition, keywords, signed, soldout, publisher, category, location, owner, type, language, bookcondition, bookseries, personborrowed, borroweddate',
    ],
    'palettes' => [
        'signedsoldout' => [
            'showitem' => '
                signed, 
                soldout,
            ',
        ],
        'langtranslator' => [
            'showitem' => '
                language, 
                translator, 
            ',
        ],
        'publisherisbn' => [
            'showitem' => '
                publisher, 
                isbn, 
            ',
        ],
        'pubyearedition' => [
            'showitem' => '
                publishingyear, 
                edition, 
            ',
        ],
    ],    
    'types' => [
        '1' => [
            'showitem' => 
            '--div--;LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_tabgeneral, sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, author, 
            --palette--;LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_tabempty;langtranslator, 
            description, --palette--;LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_tabempty;publisherisbn, 
            --palette--;LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_tabempty;pubyearedition, 
            --palette--;LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_tabempty;signedsoldout,
            bookseries, bookcondition, 
            --div--;LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_tabclassification, category, type, keywords,  
            --div--;LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_tabwhere, location, owner, 
            --div--;LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_tabborrowed, personborrowed, borroweddate, 
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'], 
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_extbookdatabase_domain_model_book',
                'foreign_table_where' => 'AND tx_extbookdatabase_domain_model_book.pid=###CURRENT_PID### AND tx_extbookdatabase_domain_model_book.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.view',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 0,
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ]
        ],
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim, required'
            ],
        ],
        'author' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.author',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'translator' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.translator',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            'defaultExtras' => 'richtext:rte_transform'
        ],
        'isbn' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.isbn',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'publishingyear' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.publishingyear',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'edition' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.edition',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'keywords' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.keywords',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'signed' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.signed',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'soldout' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.soldout',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'borroweddate' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.borroweddate',
            'config' => [
                'type' => 'input',
                'size' => 7,
                'eval' => 'date',
                'default' => ''
            ],
        ],
        'publisher' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.publisher',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_extbookdatabase_domain_model_publisher',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'category' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.category',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_extbookdatabase_domain_model_category',
                'MM' => 'tx_extbookdatabase_book_category_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'wizards' => [
                    '_PADDING' => 1,
                    '_VERTICAL' => 1,
                    'edit' => [
                        'module' => [
                            'name' => 'wizard_edit',
                        ],
                        'type' => 'popup',
                        'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
                        'popup_onlyOpenIfSelected' => 1,
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                    ],
                    'add' => [
                        'module' => [
                            'name' => 'wizard_add',
                        ],
                        'type' => 'script',
                        'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
                        'params' => [
                            'table' => 'tx_extbookdatabase_domain_model_category',
                            'pid' => '###CURRENT_PID###',
                            'setValue' => 'prepend'
                        ],
                    ],
                ],
            ],

        ],
        'location' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.location',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_extbookdatabase_domain_model_location',
                'items' => [
                    ['-', '0'],
                ],                 
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'owner' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.owner',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_extbookdatabase_domain_model_owner',
                'items' => [
                    ['-', '0'],
                ],                 
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_extbookdatabase_domain_model_type',
                'items' => [
                    ['-', '0'],
                ],                
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'language' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_extbookdatabase_domain_model_language',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'bookcondition' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.bookcondition',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_extbookdatabase_domain_model_bookcondition',
                'items' => [
                    ['-', '0'],
                ],                 
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'bookseries' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.bookseries',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_extbookdatabase_domain_model_bookseries',
                'items' => [
                    ['-', '0'],
                ],                 
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'personborrowed' => [
            'exclude' => true,
            'label' => 'LLL:EXT:extbookdatabase/Resources/Private/Language/locallang_db.xlf:tx_extbookdatabase_domain_model_book.personborrowed',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_extbookdatabase_domain_model_personborrowed',
                'items' => [
                    ['-', '0'],
                ],                   
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],

    ],
];

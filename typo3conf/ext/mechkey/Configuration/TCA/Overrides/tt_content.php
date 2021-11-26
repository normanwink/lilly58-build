<?php

$GLOBALS['TCA']['tt_content']['columns']['tx_mechkey_prevpage'] = array(
  'label' => 'LLL:EXT:mechkey/Resources/Private/Language/locallang_db.xlf:ce.prevnext.prev',
	'config' => [
		'type' => 'group',
    'internal_type' => 'db',
    'allowed' => 'pages',
    'size' => 1,
    'maxitems' => 1,
    'minitems' => 0,
    'suggestOptions' => [
      'default' => [
        'additionalSearchFields' => 'nav_title, url',
        'addWhere' => ' AND pages.uid != ###THIS_UID###'
      ]
    ],
    'default' => 0,
    'behaviour' => [
      'allowLanguageSynchronization' => true
    ],
  ]
);

$GLOBALS['TCA']['tt_content']['columns']['tx_mechkey_nextpage'] = array(
  'label' => 'LLL:EXT:mechkey/Resources/Private/Language/locallang_db.xlf:ce.prevnext.next',
  'config' => [
		'type' => 'group',
    'internal_type' => 'db',
    'allowed' => 'pages',
    'size' => 1,
    'maxitems' => 1,
    'minitems' => 0,
    'suggestOptions' => [
      'default' => [
        'additionalSearchFields' => 'nav_title, url',
        'addWhere' => ' AND pages.uid != ###THIS_UID###'
      ]
    ],
    'default' => 0,
    'behaviour' => [
      'allowLanguageSynchronization' => true
    ],
  ]
);

$GLOBALS['TCA']['tt_content']['palettes']['prevnext'] = array(
	'label' => 'LLL:EXT:mechkey/Resources/Private/Language/locallang_db.xlf:ce.prevnext.title',
	'showitem' => '
		tx_mechkey_prevpage,
		tx_mechkey_nextpage,
	'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:mechkey/Resources/Private/Language/locallang_db.xlf:ce.hero.title',
		'hero',
		'EXT:core/Resources/Public/Icons/T3Icons/svgs/content/content-image.svg'
	),
	'CType',
	'mechkey'
);
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['hero'] = 'content-image';
$GLOBALS['TCA']['tt_content']['types']['prevnext'] = array(
	'showitem' => '
		--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
			--palette--;;general,
			--palette--;;header,
			image;LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images,
      bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
      --linebreak--,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
			--palette--;;frames,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
			--palette--;;language,
		--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
			--palette--;;hidden,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
        rowDescription,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
	',
  'columnsOverrides' => [
    'bodytext' => [
      'config' => [
        'enableRichtext' => true,
      ]
    ],
		'image' => [
			'config' => [
				'maxitems' => 1
			]
		]
  ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:mechkey/Resources/Private/Language/locallang_db.xlf:ce.prevnext.title',
		'prevnext',
		'EXT:core/Resources/Public/Icons/T3Icons/svgs/content/content-menu-related.svg'
	),
	'CType',
	'mechkey'
);
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['prevnext'] = 'content-menu-related';
$GLOBALS['TCA']['tt_content']['types']['prevnext'] = array(
	'showitem' => '
		--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
			--palette--;;general,
			--palette--;;header,
      --linebreak--,
			--palette--;;prevnext,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
			--palette--;;frames,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
			--palette--;;language,
		--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
			--palette--;;hidden,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
        rowDescription,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
	',
  'columnsOverrides' => [
    'bodytext' => [
      'config' => [
        'enableRichtext' => true,
      ]
    ]
  ]
);

 ?>

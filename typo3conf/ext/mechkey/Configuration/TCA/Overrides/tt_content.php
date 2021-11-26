<?php

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
$GLOBALS['TCA']['tt_content']['types']['hero'] = array(
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

 ?>

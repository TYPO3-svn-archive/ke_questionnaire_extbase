<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_kequestionnaireextbase_domain_model_subquestion'] = array(
	'ctrl' => $TCA['tx_kequestionnaireextbase_domain_model_subquestion']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title_line,title,text,image,image_position'
	),
	'types' => array(
		'1' => array('showitem' => 'title_line,title,text,image,image_position')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_kequestionnaireextbase_domain_model_subquestion',
				'foreign_table_where' => 'AND tx_kequestionnaireextbase_domain_model_subquestion.uid=###REC_FIELD_l18n_parent### AND tx_kequestionnaireextbase_domain_model_subquestion.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'title_line' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_subquestion.title_line',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_subquestion.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'text' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_subquestion.text',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'image' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_subquestion.image',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'image_position' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_subquestion.image_position',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'question' => array(
			'config' => array(
				'type' => 'passthrough',
			)
		),
	),
);
?>
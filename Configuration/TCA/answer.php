<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_kequestionnaireextbase_domain_model_answer'] = array(
	'ctrl' => $TCA['tx_kequestionnaireextbase_domain_model_answer']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title,value,correct_answer,text,helptext,image,image_position,finish_page_uid,show_input'
	),
	'types' => array(
		'1' => array('showitem' => 'title,value,correct_answer,text,helptext,image,image_position,finish_page_uid,show_input')
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
				'foreign_table' => 'tx_kequestionnaireextbase_domain_model_answer',
				'foreign_table_where' => 'AND tx_kequestionnaireextbase_domain_model_answer.uid=###REC_FIELD_l18n_parent### AND tx_kequestionnaireextbase_domain_model_answer.sys_language_uid IN (-1,0)',
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
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_answer.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'value' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_answer.value',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'correct_answer' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_answer.correct_answer',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'text' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_answer.text',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'helptext' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_answer.helptext',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'image' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_answer.image',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'image_position' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_answer.image_position',
			'config'  => array(
				'type' => 'select',
				'items' => array (
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			)
		),
		'finish_page_uid' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_answer.finish_page_uid',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'show_input' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_answer.show_input',
			'config'  => array(
				'type' => 'check',
				'default' => 0
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
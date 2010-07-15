<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_kequestionnaireextbase_domain_model_authcode'] = array(
	'ctrl' => $TCA['tx_kequestionnaireextbase_domain_model_authcode']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'qpid,authcode,email,feuser'
	),
	'types' => array(
		'1' => array('showitem' => 'qpid,authcode,email,feuser')
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
				'foreign_table' => 'tx_kequestionnaireextbase_domain_model_authcode',
				'foreign_table_where' => 'AND tx_kequestionnaireextbase_domain_model_authcode.uid=###REC_FIELD_l18n_parent### AND tx_kequestionnaireextbase_domain_model_authcode.sys_language_uid IN (-1,0)',
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
		'qpid' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_authcode.qpid',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'authcode' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_authcode.authcode',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'email' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_authcode.email',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'feuser' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_db.xml:tx_kequestionnaireextbase_domain_model_authcode.feuser',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
	),
);
?>
<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Nadine Schwingler <schwingler@kennziffer.com>, kennziffer.com
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * questionType
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_KeQuestionnaireExtbase_Utility_QuestionType {
    function tcaList (&$params,&$pObj){
		//$params['items'][] = array('open','Tx_KeQuestionnaireExtbase_Domain_Model_Question_OpenQuestion');
        //$params['items'][] = array('closed','Tx_KeQuestionnaireExtbase_Domain_Model_Question_ClosedQuestion');
        
		$extbase_config = $this->loadExtBaseSetup();
		//t3lib_div::debug($extbase_config,'extbase_config');
		foreach ($extbase_config['persistence.']['classes.']['Tx_KeQuestionnaireExtbase_Domain_Model_Question.']['subclasses.'] as $key => $sub){
			$params['items'][] = array($GLOBALS['LANG']->sL("LLL:EXT:ke_questionnaire_extbase/Resources/Private/Language/locallang_question_types.xml:".$key), $sub);
		}
    }
	
	/**
	* Loads the TypoScript for the given extension prefix, e.g. tx_cspuppyfunctions_pi1, for use in a backend module.
	*
	* @param string $extKey
	* @return array
	*/
    function loadExtBaseSetup() {
		global $TYPO3_CONF_VARS;
		require_once(PATH_t3lib . 'class.t3lib_page.php');
		require_once(PATH_t3lib . 'class.t3lib_tstemplate.php');
		require_once(PATH_t3lib . 'class.t3lib_tsparser_ext.php');
		list($page) = t3lib_BEfunc::getRecordsByField('pages', 'pid', 0);
		$pageUid = intval($page['uid']);
		//$pageUid = 3;
		$sysPageObj = t3lib_div::makeInstance('t3lib_pageSelect');
		$rootLine = $sysPageObj->getRootLine($pageUid);
		$TSObj = t3lib_div::makeInstance('t3lib_tsparser_ext');
		$TSObj->tt_track = 0;
		$TSObj->init();
		$TSObj->runThroughTemplates($rootLine);
		$TSObj->generateConfig();
		//t3lib_div::devLog('test '.$pageUid, 'test', 0, $TSObj->flatSetup);
		//t3lib_div::debug($TSObj);
		//return $TSObj->flatSetup;
		return $TSObj->setup['config.']['tx_extbase.'];
	}
}
?>
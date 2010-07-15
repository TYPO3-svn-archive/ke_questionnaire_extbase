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
 * dependancies
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaireExtbase_Domain_Model_Dependancy extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * activating formula
	 * @var string
	 */
	protected $activating_formula;
	
	/**
	 * dependantQuestion
	 * @var Tx_KeQuestionnaireExtbase_Domain_Model_question
	 */
	protected $dependant_question;
	
	/**
	 * activatingQuestion
	 * @var Tx_KeQuestionnaireExtbase_Domain_Model_question
	 */
	protected $activating_question;
	
	/**
	 * activatingValue
	 * @var Tx_KeQuestionnaireExtbase_Domain_Model_Answer
	 */
	protected $activating_value;
	
	
	
	/**
	 * Setter for activatingFormula
	 *
	 * @param string $activatingFormula activating formula
	 * @return void
	 */
	public function setActivatingFormula($activatingFormula) {
		$this->activatingFormula = $activatingFormula;
	}

	/**
	 * Getter for activatingFormula
	 *
	 * @return string activating formula
	 */
	public function getActivatingFormula() {
		return $this->activatingFormula;
	}
	
	/**
	 * Setter for dependantQuestion
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_question $dependantQuestion dependantQuestion
	 * @return void
	 */
	public function setDependantQuestion(Tx_KeQuestionnaireExtbase_Domain_Model_question $dependantQuestion) {
		$this->dependantQuestion = $dependantQuestion;
	}

	/**
	 * Getter for dependantQuestion
	 *
	 * @return Tx_KeQuestionnaireExtbase_Domain_Model_question dependantQuestion
	 */
	public function getDependantQuestion() {
		return $this->dependantQuestion;
	}
	
	/**
	 * Setter for activatingQuestion
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_question $activatingQuestion activatingQuestion
	 * @return void
	 */
	public function setActivatingQuestion(Tx_KeQuestionnaireExtbase_Domain_Model_question $activatingQuestion) {
		$this->activatingQuestion = $activatingQuestion;
	}

	/**
	 * Getter for activatingQuestion
	 *
	 * @return Tx_KeQuestionnaireExtbase_Domain_Model_question activatingQuestion
	 */
	public function getActivatingQuestion() {
		return $this->activatingQuestion;
	}
	
	/**
	 * Setter for activatingValue
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_Answer $activatingValue activatingValue
	 * @return void
	 */
	public function setActivatingValue(Tx_KeQuestionnaireExtbase_Domain_Model_Answer $activatingValue) {
		$this->activatingValue = $activatingValue;
	}

	/**
	 * Getter for activatingValue
	 *
	 * @return Tx_KeQuestionnaireExtbase_Domain_Model_Answer activatingValue
	 */
	public function getActivatingValue() {
		return $this->activatingValue;
	}
	
}
?>
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
 * Controller for the question object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

// TODO: As your extension matures, you should use Tx_Extbase_MVC_Controller_ActionController as base class, instead of the ScaffoldingController used below.
class Tx_KeQuestionnaireExtbase_Controller_questionController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_KeQuestionnaireExtbase_Domain_Repository_questionRepository
	 */
	protected $questionRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->questionRepository = t3lib_div::makeInstance('Tx_KeQuestionnaireExtbase_Domain_Repository_questionRepository');
	}
	/**
	 * List action for this controller. Displays all questions.
	 */
	public function indexAction() {
		$questions = $this->questionRepository->findAll();
		$this->view->assign('questions', $questions);
	}

	/**
	 * Action that displays a single question
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_question $question The question to display
	 */
	public function showAction(Tx_KeQuestionnaireExtbase_Domain_Model_question $question) {
		$this->view->assign('question', $question);
	}

	/**
	 * Displays a form for creating a new question
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_question $newquestion A fresh question object taken as a basis for the rendering
	 * @dontvalidate $newquestion
	 */
	public function newAction(Tx_KeQuestionnaireExtbase_Domain_Model_question $newquestion = NULL) {
		$this->view->assign('newquestion', $newquestion);
	}

	/**
	 * Creates a new question and forwards to the index action.
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_question $newquestion A fresh question object which has not yet been added to the repository
	 */
	public function createAction(Tx_KeQuestionnaireExtbase_Domain_Model_question $newquestion) {
		$this->questionRepository->add($newquestion);
		$this->flashMessageContainer->add('Your new question was created.');
		$this->redirect('index');
	}

	/**
	 * Displays a form to edit an existing question
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_question $question The question to display
	 * @dontvalidate $question
	 */
	public function editAction(Tx_KeQuestionnaireExtbase_Domain_Model_question $question) {
		$this->view->assign('question', $question);
	}

	/**
	 * Updates an existing question and forwards to the index action afterwards.
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_question $question The question to display
	 */
	public function updateAction(Tx_KeQuestionnaireExtbase_Domain_Model_question $question) {
		$this->questionRepository->update($question);
		$this->flashMessageContainer->add('Your question was updated.');
		$this->redirect('index');
	}

	/**
	 * Deletes an existing question
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_question $question The question to be deleted
	 */
	public function deleteAction(Tx_KeQuestionnaireExtbase_Domain_Model_question $question) {
		$this->questionRepository->remove($question);
		$this->flashMessageContainer->add('Your question was removed.');
		$this->redirect('index');
	}
	

	
}
?>
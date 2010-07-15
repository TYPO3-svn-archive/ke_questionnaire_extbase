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
 * Controller for the authcode object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

// TODO: As your extension matures, you should use Tx_Extbase_MVC_Controller_ActionController as base class, instead of the ScaffoldingController used below.
class Tx_KeQuestionnaireExtbase_Controller_authcodeController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_KeQuestionnaireExtbase_Domain_Repository_authcodeRepository
	 */
	protected $authcodeRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->authcodeRepository = t3lib_div::makeInstance('Tx_KeQuestionnaireExtbase_Domain_Repository_authcodeRepository');
	}
	/**
	 * List action for this controller. Displays all authcodes.
	 */
	public function indexAction() {
		$authcodes = $this->authcodeRepository->findAll();
		$this->view->assign('authcodes', $authcodes);
	}

	/**
	 * Action that displays a single authcode
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_authcode $authcode The authcode to display
	 */
	public function showAction(Tx_KeQuestionnaireExtbase_Domain_Model_authcode $authcode) {
		$this->view->assign('authcode', $authcode);
	}

	/**
	 * Displays a form for creating a new authcode
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_authcode $newauthcode A fresh authcode object taken as a basis for the rendering
	 * @dontvalidate $newauthcode
	 */
	public function newAction(Tx_KeQuestionnaireExtbase_Domain_Model_authcode $newauthcode = NULL) {
		$this->view->assign('newauthcode', $newauthcode);
	}

	/**
	 * Creates a new authcode and forwards to the index action.
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_authcode $newauthcode A fresh authcode object which has not yet been added to the repository
	 */
	public function createAction(Tx_KeQuestionnaireExtbase_Domain_Model_authcode $newauthcode) {
		$this->authcodeRepository->add($newauthcode);
		$this->flashMessageContainer->add('Your new authcode was created.');
		$this->redirect('index');
	}

	/**
	 * Displays a form to edit an existing authcode
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_authcode $authcode The authcode to display
	 * @dontvalidate $authcode
	 */
	public function editAction(Tx_KeQuestionnaireExtbase_Domain_Model_authcode $authcode) {
		$this->view->assign('authcode', $authcode);
	}

	/**
	 * Updates an existing authcode and forwards to the index action afterwards.
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_authcode $authcode The authcode to display
	 */
	public function updateAction(Tx_KeQuestionnaireExtbase_Domain_Model_authcode $authcode) {
		$this->authcodeRepository->update($authcode);
		$this->flashMessageContainer->add('Your authcode was updated.');
		$this->redirect('index');
	}

	/**
	 * Deletes an existing authcode
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_authcode $authcode The authcode to be deleted
	 */
	public function deleteAction(Tx_KeQuestionnaireExtbase_Domain_Model_authcode $authcode) {
		$this->authcodeRepository->remove($authcode);
		$this->flashMessageContainer->add('Your authcode was removed.');
		$this->redirect('index');
	}
	

	
}
?>
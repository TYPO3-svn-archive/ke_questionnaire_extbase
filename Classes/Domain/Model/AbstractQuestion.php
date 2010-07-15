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
 * questions
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
abstract class Tx_KeQuestionnaireExtbase_Domain_Model_abstractQuestion extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * question type
	 * @var string
	 * @validate NotEmpty
	 */
	protected $type;
	
	/**
	 * title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * show title
	 * @var boolean
	 */
	protected $show_title;
	
	/**
	 * text
	 * @var string
	 */
	protected $text;
	
	/**
	 * helptext
	 * @var string
	 */
	protected $help_text;
	
	/**
	 * image
	 * @var string
	 */
	protected $image;
	
	/**
	 * image position
	 * @var string
	 */
	protected $image_position;
	
	/**
	 * mandatory
	 * @var boolean
	 */
	protected $mandatory;
	
	/**
	 * mandatory correct
	 * @var boolean
	 */
	protected $mandatory_correct;
	
	/**
	 * dependant show
	 * @var integer
	 */
	protected $dependant_show;
	
	/**
	 * open type
	 * @var string
	 */
	protected $open_type;
	
	/**
	 * open pre text
	 * @var string
	 */
	protected $open_pre_text;
	
	/**
	 * open in text
	 * @var string
	 */
	protected $open_in_text;
	
	/**
	 * open post text
	 * @var string
	 */
	protected $open_post_text;
	
	/**
	 * open validation
	 * @var string
	 */
	protected $open_validation;
	
	/**
	 * open validation text
	 * @var string
	 */
	protected $open_validation_text;
	
	/**
	 * closed type
	 * @var string
	 */
	protected $closed_type;
	
	/**
	 * closed selectsize
	 * @var integer
	 */
	protected $closed_size;
	
	/**
	 * closed max answers
	 * @var integer
	 */
	protected $closed_max_answers;
	
	/**
	 * closed random answers
	 * @var boolean
	 */
	protected $closed_random_answers;
	
	/**
	 * closed inputfield
	 * @var integer
	 */
	protected $closed_inputfield;
	
	/**
	 * matrix type
	 * @var string
	 */
	protected $matrix_type;
	
	/**
	 * matrix validation
	 * @var string
	 */
	protected $matrix_validation;
	
	/**
	 * matrix max answers
	 * @var integer
	 */
	protected $matrix_max_answers;
	
	/**
	 * matrix inputfield
	 * @var integer
	 */
	protected $matrix_inputfield;
	
	/**
	 * demographic type
	 * @var string
	 */
	protected $demographic_type;
	
	/**
	 * demographic fields
	 * @var string
	 */
	protected $demographic_fields;
	
	/**
	 * demographic address fields
	 * @var string
	 */
	protected $demographic_address_fields;
	
	/**
	 * privacy post
	 * @var string
	 */
	protected $privacy_post;
	
	/**
	 * privacy link
	 * @var string
	 */
	protected $privacy_link;
	
	/**
	 * privacy file
	 * @var string
	 */
	protected $privacy_file;
	
	/**
	 * dependancy simple
	 * @var boolean
	 */
	protected $dependancy_simple;
	
	/**
	 * answers
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Answer>
	 */
	protected $answers;
	
	/**
	 * columns
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Column>
	 */
	protected $columns;
	
	/**
	 * subquestions
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Subquestion>
	 */
	protected $subquestions;
	
	/**
	 * sublines
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Subline>
	 */
	protected $sublines;
	
	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		$this->answers = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->columns = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->subquestions = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->sublines = new Tx_Extbase_Persistence_ObjectStorage();
	}
	
	/**
	 * Setter for type
	 *
	 * @param string $type question type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Getter for type
	 *
	 * @return string question type
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Setter for title
	 *
	 * @param string $title title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Getter for title
	 *
	 * @return string title
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * Setter for showTitle
	 *
	 * @param boolean $showTitle show title
	 * @return void
	 */
	public function setShowTitle($showTitle) {
		$this->showTitle = $showTitle;
	}

	/**
	 * Getter for showTitle
	 *
	 * @return boolean show title
	 */
	public function getShowTitle() {
		return $this->showTitle;
	}
	
	/**
	 * Returns the boolean state of showTitle
	 *
	 * @return bool The state of showTitle
	 */
	public function isShowTitle() {
		$this->getShowTitle();
	}
	
	/**
	 * Setter for text
	 *
	 * @param string $text text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
	 * Getter for text
	 *
	 * @return string text
	 */
	public function getText() {
		return $this->text;
	}
	
	/**
	 * Setter for helpText
	 *
	 * @param string $helpText helptext
	 * @return void
	 */
	public function setHelpText($helpText) {
		$this->helpText = $helpText;
	}

	/**
	 * Getter for helpText
	 *
	 * @return string helptext
	 */
	public function getHelpText() {
		return $this->helpText;
	}
	
	/**
	 * Setter for image
	 *
	 * @param string $image image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Getter for image
	 *
	 * @return string image
	 */
	public function getImage() {
		return $this->image;
	}
	
	/**
	 * Setter for imagePosition
	 *
	 * @param string $imagePosition image position
	 * @return void
	 */
	public function setImagePosition($imagePosition) {
		$this->imagePosition = $imagePosition;
	}

	/**
	 * Getter for imagePosition
	 *
	 * @return string image position
	 */
	public function getImagePosition() {
		return $this->imagePosition;
	}
	
	/**
	 * Setter for mandatory
	 *
	 * @param boolean $mandatory mandatory
	 * @return void
	 */
	public function setMandatory($mandatory) {
		$this->mandatory = $mandatory;
	}

	/**
	 * Getter for mandatory
	 *
	 * @return boolean mandatory
	 */
	public function getMandatory() {
		return $this->mandatory;
	}
	
	/**
	 * Returns the boolean state of mandatory
	 *
	 * @return bool The state of mandatory
	 */
	public function isMandatory() {
		$this->getMandatory();
	}
	
	/**
	 * Setter for mandatoryCorrect
	 *
	 * @param boolean $mandatoryCorrect mandatory correct
	 * @return void
	 */
	public function setMandatoryCorrect($mandatoryCorrect) {
		$this->mandatoryCorrect = $mandatoryCorrect;
	}

	/**
	 * Getter for mandatoryCorrect
	 *
	 * @return boolean mandatory correct
	 */
	public function getMandatoryCorrect() {
		return $this->mandatoryCorrect;
	}
	
	/**
	 * Returns the boolean state of mandatoryCorrect
	 *
	 * @return bool The state of mandatoryCorrect
	 */
	public function isMandatoryCorrect() {
		$this->getMandatoryCorrect();
	}
	
	/**
	 * Setter for dependantShow
	 *
	 * @param integer $dependantShow dependant show
	 * @return void
	 */
	public function setDependantShow($dependantShow) {
		$this->dependantShow = $dependantShow;
	}

	/**
	 * Getter for dependantShow
	 *
	 * @return integer dependant show
	 */
	public function getDependantShow() {
		return $this->dependantShow;
	}
	
	/**
	 * Setter for openType
	 *
	 * @param string $openType open type
	 * @return void
	 */
	public function setOpenType($openType) {
		$this->openType = $openType;
	}

	/**
	 * Getter for openType
	 *
	 * @return string open type
	 */
	public function getOpenType() {
		return $this->openType;
	}
	
	/**
	 * Setter for openPreText
	 *
	 * @param string $openPreText open pre text
	 * @return void
	 */
	public function setOpenPreText($openPreText) {
		$this->openPreText = $openPreText;
	}

	/**
	 * Getter for openPreText
	 *
	 * @return string open pre text
	 */
	public function getOpenPreText() {
		return $this->openPreText;
	}
	
	/**
	 * Setter for openInText
	 *
	 * @param string $openInText open in text
	 * @return void
	 */
	public function setOpenInText($openInText) {
		$this->openInText = $openInText;
	}

	/**
	 * Getter for openInText
	 *
	 * @return string open in text
	 */
	public function getOpenInText() {
		return $this->openInText;
	}
	
	/**
	 * Setter for openPostText
	 *
	 * @param string $openPostText open post text
	 * @return void
	 */
	public function setOpenPostText($openPostText) {
		$this->openPostText = $openPostText;
	}

	/**
	 * Getter for openPostText
	 *
	 * @return string open post text
	 */
	public function getOpenPostText() {
		return $this->openPostText;
	}
	
	/**
	 * Setter for openValidation
	 *
	 * @param string $openValidation open validation
	 * @return void
	 */
	public function setOpenValidation($openValidation) {
		$this->openValidation = $openValidation;
	}

	/**
	 * Getter for openValidation
	 *
	 * @return string open validation
	 */
	public function getOpenValidation() {
		return $this->openValidation;
	}
	
	/**
	 * Setter for openValidationText
	 *
	 * @param string $openValidationText open validation text
	 * @return void
	 */
	public function setOpenValidationText($openValidationText) {
		$this->openValidationText = $openValidationText;
	}

	/**
	 * Getter for openValidationText
	 *
	 * @return string open validation text
	 */
	public function getOpenValidationText() {
		return $this->openValidationText;
	}
	
	/**
	 * Setter for closedType
	 *
	 * @param string $closedType closed type
	 * @return void
	 */
	public function setClosedType($closedType) {
		$this->closedType = $closedType;
	}

	/**
	 * Getter for closedType
	 *
	 * @return string closed type
	 */
	public function getClosedType() {
		return $this->closedType;
	}
	
	/**
	 * Setter for closedSize
	 *
	 * @param integer $closedSize closed selectsize
	 * @return void
	 */
	public function setClosedSize($closedSize) {
		$this->closedSize = $closedSize;
	}

	/**
	 * Getter for closedSize
	 *
	 * @return integer closed selectsize
	 */
	public function getClosedSize() {
		return $this->closedSize;
	}
	
	/**
	 * Setter for closedMaxAnswers
	 *
	 * @param integer $closedMaxAnswers closed max answers
	 * @return void
	 */
	public function setClosedMaxAnswers($closedMaxAnswers) {
		$this->closedMaxAnswers = $closedMaxAnswers;
	}

	/**
	 * Getter for closedMaxAnswers
	 *
	 * @return integer closed max answers
	 */
	public function getClosedMaxAnswers() {
		return $this->closedMaxAnswers;
	}
	
	/**
	 * Setter for closedRandomAnswers
	 *
	 * @param boolean $closedRandomAnswers closed random answers
	 * @return void
	 */
	public function setClosedRandomAnswers($closedRandomAnswers) {
		$this->closedRandomAnswers = $closedRandomAnswers;
	}

	/**
	 * Getter for closedRandomAnswers
	 *
	 * @return boolean closed random answers
	 */
	public function getClosedRandomAnswers() {
		return $this->closedRandomAnswers;
	}
	
	/**
	 * Returns the boolean state of closedRandomAnswers
	 *
	 * @return bool The state of closedRandomAnswers
	 */
	public function isClosedRandomAnswers() {
		$this->getClosedRandomAnswers();
	}
	
	/**
	 * Setter for closedInputfield
	 *
	 * @param integer $closedInputfield closed inputfield
	 * @return void
	 */
	public function setClosedInputfield($closedInputfield) {
		$this->closedInputfield = $closedInputfield;
	}

	/**
	 * Getter for closedInputfield
	 *
	 * @return integer closed inputfield
	 */
	public function getClosedInputfield() {
		return $this->closedInputfield;
	}
	
	/**
	 * Setter for matrixType
	 *
	 * @param string $matrixType matrix type
	 * @return void
	 */
	public function setMatrixType($matrixType) {
		$this->matrixType = $matrixType;
	}

	/**
	 * Getter for matrixType
	 *
	 * @return string matrix type
	 */
	public function getMatrixType() {
		return $this->matrixType;
	}
	
	/**
	 * Setter for matrixValidation
	 *
	 * @param string $matrixValidation matrix validation
	 * @return void
	 */
	public function setMatrixValidation($matrixValidation) {
		$this->matrixValidation = $matrixValidation;
	}

	/**
	 * Getter for matrixValidation
	 *
	 * @return string matrix validation
	 */
	public function getMatrixValidation() {
		return $this->matrixValidation;
	}
	
	/**
	 * Setter for matrixMaxAnswers
	 *
	 * @param integer $matrixMaxAnswers matrix max answers
	 * @return void
	 */
	public function setMatrixMaxAnswers($matrixMaxAnswers) {
		$this->matrixMaxAnswers = $matrixMaxAnswers;
	}

	/**
	 * Getter for matrixMaxAnswers
	 *
	 * @return integer matrix max answers
	 */
	public function getMatrixMaxAnswers() {
		return $this->matrixMaxAnswers;
	}
	
	/**
	 * Setter for matrixInputfield
	 *
	 * @param integer $matrixInputfield matrix inputfield
	 * @return void
	 */
	public function setMatrixInputfield($matrixInputfield) {
		$this->matrixInputfield = $matrixInputfield;
	}

	/**
	 * Getter for matrixInputfield
	 *
	 * @return integer matrix inputfield
	 */
	public function getMatrixInputfield() {
		return $this->matrixInputfield;
	}
	
	/**
	 * Setter for demographicType
	 *
	 * @param string $demographicType demographic type
	 * @return void
	 */
	public function setDemographicType($demographicType) {
		$this->demographicType = $demographicType;
	}

	/**
	 * Getter for demographicType
	 *
	 * @return string demographic type
	 */
	public function getDemographicType() {
		return $this->demographicType;
	}
	
	/**
	 * Setter for demographicFields
	 *
	 * @param string $demographicFields demographic fields
	 * @return void
	 */
	public function setDemographicFields($demographicFields) {
		$this->demographicFields = $demographicFields;
	}

	/**
	 * Getter for demographicFields
	 *
	 * @return string demographic fields
	 */
	public function getDemographicFields() {
		return $this->demographicFields;
	}
	
	/**
	 * Setter for demographicAddressFields
	 *
	 * @param string $demographicAddressFields demographic address fields
	 * @return void
	 */
	public function setDemographicAddressFields($demographicAddressFields) {
		$this->demographicAddressFields = $demographicAddressFields;
	}

	/**
	 * Getter for demographicAddressFields
	 *
	 * @return string demographic address fields
	 */
	public function getDemographicAddressFields() {
		return $this->demographicAddressFields;
	}
	
	/**
	 * Setter for privacyPost
	 *
	 * @param string $privacyPost privacy post
	 * @return void
	 */
	public function setPrivacyPost($privacyPost) {
		$this->privacyPost = $privacyPost;
	}

	/**
	 * Getter for privacyPost
	 *
	 * @return string privacy post
	 */
	public function getPrivacyPost() {
		return $this->privacyPost;
	}
	
	/**
	 * Setter for privacyLink
	 *
	 * @param string $privacyLink privacy link
	 * @return void
	 */
	public function setPrivacyLink($privacyLink) {
		$this->privacyLink = $privacyLink;
	}

	/**
	 * Getter for privacyLink
	 *
	 * @return string privacy link
	 */
	public function getPrivacyLink() {
		return $this->privacyLink;
	}
	
	/**
	 * Setter for privacyFile
	 *
	 * @param string $privacyFile privacy file
	 * @return void
	 */
	public function setPrivacyFile($privacyFile) {
		$this->privacyFile = $privacyFile;
	}

	/**
	 * Getter for privacyFile
	 *
	 * @return string privacy file
	 */
	public function getPrivacyFile() {
		return $this->privacyFile;
	}
	
	/**
	 * Setter for dependancySimple
	 *
	 * @param boolean $dependancySimple dependancy simple
	 * @return void
	 */
	public function setDependancySimple($dependancySimple) {
		$this->dependancySimple = $dependancySimple;
	}

	/**
	 * Getter for dependancySimple
	 *
	 * @return boolean dependancy simple
	 */
	public function getDependancySimple() {
		return $this->dependancySimple;
	}
	
	/**
	 * Returns the boolean state of dependancySimple
	 *
	 * @return bool The state of dependancySimple
	 */
	public function isDependancySimple() {
		$this->getDependancySimple();
	}
	
	/**
	 * Setter for answers
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Answer> $answers answers
	 * @return void
	 */
	public function setAnswers(Tx_Extbase_Persistence_ObjectStorage $answers) {
		$this->answers = $answers;
	}

	/**
	 * Getter for answers
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Answer> answers
	 */
	public function getAnswers() {
		return $this->answers;
	}
	
	/**
	 * Adds a Answer
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_Answer The Answer to be added
	 * @return void
	 */
	public function addAnswer(Tx_KeQuestionnaireExtbase_Domain_Model_Answer $answer) {
		$this->answers->attach($answer);
	}
	
	/**
	 * Removes a Answer
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_Answer The Answer to be removed
	 * @return void
	 */
	public function removeAnswer(Tx_KeQuestionnaireExtbase_Domain_Model_Answer $answer) {
		$this->answers->detach($answer);
	}
	
	/**
	 * Setter for columns
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Column> $columns columns
	 * @return void
	 */
	public function setColumns(Tx_Extbase_Persistence_ObjectStorage $columns) {
		$this->columns = $columns;
	}

	/**
	 * Getter for columns
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Column> columns
	 */
	public function getColumns() {
		return $this->columns;
	}
	
	/**
	 * Adds a Column
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_Column The Column to be added
	 * @return void
	 */
	public function addColumn(Tx_KeQuestionnaireExtbase_Domain_Model_Column $column) {
		$this->columns->attach($column);
	}
	
	/**
	 * Removes a Column
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_Column The Column to be removed
	 * @return void
	 */
	public function removeColumn(Tx_KeQuestionnaireExtbase_Domain_Model_Column $column) {
		$this->columns->detach($column);
	}
	
	/**
	 * Setter for subquestions
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Subquestion> $subquestions subquestions
	 * @return void
	 */
	public function setSubquestions(Tx_Extbase_Persistence_ObjectStorage $subquestions) {
		$this->subquestions = $subquestions;
	}

	/**
	 * Getter for subquestions
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Subquestion> subquestions
	 */
	public function getSubquestions() {
		return $this->subquestions;
	}
	
	/**
	 * Adds a Subquestion
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_Subquestion The Subquestion to be added
	 * @return void
	 */
	public function addSubquestion(Tx_KeQuestionnaireExtbase_Domain_Model_Subquestion $subquestion) {
		$this->subquestions->attach($subquestion);
	}
	
	/**
	 * Removes a Subquestion
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_Subquestion The Subquestion to be removed
	 * @return void
	 */
	public function removeSubquestion(Tx_KeQuestionnaireExtbase_Domain_Model_Subquestion $subquestion) {
		$this->subquestions->detach($subquestion);
	}
	
	/**
	 * Setter for sublines
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Subline> $sublines sublines
	 * @return void
	 */
	public function setSublines(Tx_Extbase_Persistence_ObjectStorage $sublines) {
		$this->sublines = $sublines;
	}

	/**
	 * Getter for sublines
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaireExtbase_Domain_Model_Subline> sublines
	 */
	public function getSublines() {
		return $this->sublines;
	}
	
	/**
	 * Adds a Subline
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_Subline The Subline to be added
	 * @return void
	 */
	public function addSubline(Tx_KeQuestionnaireExtbase_Domain_Model_Subline $subline) {
		$this->sublines->attach($subline);
	}
	
	/**
	 * Removes a Subline
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_Subline The Subline to be removed
	 * @return void
	 */
	public function removeSubline(Tx_KeQuestionnaireExtbase_Domain_Model_Subline $subline) {
		$this->sublines->detach($subline);
	}
	
}
?>
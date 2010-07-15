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
 * answers
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaireExtbase_Domain_Model_Answer extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * value
	 * @var integer
	 */
	protected $value;
	
	/**
	 * correct answer
	 * @var boolean
	 */
	protected $correct_answer;
	
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
	 * finish page uid
	 * @var integer
	 */
	protected $finish_page_uid;
	
	/**
	 * show input
	 * @var boolean
	 */
	protected $show_input;
	
	
	
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
	 * Setter for value
	 *
	 * @param integer $value value
	 * @return void
	 */
	public function setValue($value) {
		$this->value = $value;
	}

	/**
	 * Getter for value
	 *
	 * @return integer value
	 */
	public function getValue() {
		return $this->value;
	}
	
	/**
	 * Setter for correctAnswer
	 *
	 * @param boolean $correctAnswer correct answer
	 * @return void
	 */
	public function setCorrectAnswer($correctAnswer) {
		$this->correctAnswer = $correctAnswer;
	}

	/**
	 * Getter for correctAnswer
	 *
	 * @return boolean correct answer
	 */
	public function getCorrectAnswer() {
		return $this->correctAnswer;
	}
	
	/**
	 * Returns the boolean state of correctAnswer
	 *
	 * @return bool The state of correctAnswer
	 */
	public function isCorrectAnswer() {
		$this->getCorrectAnswer();
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
	 * Setter for finishPageUid
	 *
	 * @param integer $finishPageUid finish page uid
	 * @return void
	 */
	public function setFinishPageUid($finishPageUid) {
		$this->finishPageUid = $finishPageUid;
	}

	/**
	 * Getter for finishPageUid
	 *
	 * @return integer finish page uid
	 */
	public function getFinishPageUid() {
		return $this->finishPageUid;
	}
	
	/**
	 * Setter for showInput
	 *
	 * @param boolean $showInput show input
	 * @return void
	 */
	public function setShowInput($showInput) {
		$this->showInput = $showInput;
	}

	/**
	 * Getter for showInput
	 *
	 * @return boolean show input
	 */
	public function getShowInput() {
		return $this->showInput;
	}
	
	/**
	 * Returns the boolean state of showInput
	 *
	 * @return bool The state of showInput
	 */
	public function isShowInput() {
		$this->getShowInput();
	}
	
}
?>
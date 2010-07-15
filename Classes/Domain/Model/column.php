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
 * columns
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaireExtbase_Domain_Model_column extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * different type
	 * @var string
	 */
	protected $different_type;
	
	/**
	 * maxanswers
	 * @var integer
	 */
	protected $max_answers;
	
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
	 * Setter for differentType
	 *
	 * @param string $differentType different type
	 * @return void
	 */
	public function setDifferentType($differentType) {
		$this->differentType = $differentType;
	}

	/**
	 * Getter for differentType
	 *
	 * @return string different type
	 */
	public function getDifferentType() {
		return $this->differentType;
	}
	
	/**
	 * Setter for maxAnswers
	 *
	 * @param integer $maxAnswers maxanswers
	 * @return void
	 */
	public function setMaxAnswers($maxAnswers) {
		$this->maxAnswers = $maxAnswers;
	}

	/**
	 * Getter for maxAnswers
	 *
	 * @return integer maxanswers
	 */
	public function getMaxAnswers() {
		return $this->maxAnswers;
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
	
}
?>
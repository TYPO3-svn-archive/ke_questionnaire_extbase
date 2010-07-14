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
 * subquestions
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaireExtbase_Domain_Model_subquestion extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * title_line
	 * @var boolean
	 */
	protected $title_line;
	
	/**
	 * title
	 * @var string
	 */
	protected $title;
	
	/**
	 * text
	 * @var string
	 */
	protected $text;
	
	/**
	 * image
	 * @var string
	 */
	protected $image;
	
	/**
	 * image_position
	 * @var string
	 */
	protected $image_position;
	
	
	
	/**
	 * Setter for title_line
	 *
	 * @param boolean $title_line title_line
	 * @return void
	 */
	public function setTitle_line($title_line) {
		$this->title_line = $title_line;
	}

	/**
	 * Getter for title_line
	 *
	 * @return boolean title_line
	 */
	public function getTitle_line() {
		return $this->title_line;
	}
	
	/**
	 * Returns the boolean state of title_line
	 *
	 * @return bool The state of title_line
	 */
	public function isTitle_line() {
		$this->getTitle_line();
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
	 * Setter for image_position
	 *
	 * @param string $image_position image_position
	 * @return void
	 */
	public function setImage_position($image_position) {
		$this->image_position = $image_position;
	}

	/**
	 * Getter for image_position
	 *
	 * @return string image_position
	 */
	public function getImage_position() {
		return $this->image_position;
	}
	
}
?>
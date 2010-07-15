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
 * results
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaireExtbase_Domain_Model_result extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * start tstamp
	 * @var integer
	 */
	protected $start_tstamp;
	
	/**
	 * last tstamp
	 * @var integer
	 */
	protected $last_tstamp;
	
	/**
	 * finished tstamp
	 * @var integer
	 */
	protected $finished_tstamp;
	
	/**
	 * xmldata
	 * @var string
	 */
	protected $xmldata;
	
	/**
	 * ip
	 * @var string
	 */
	protected $ip;
	
	/**
	 * mailsent_ stamp
	 * @var string
	 */
	protected $mailsent_tstamp;
	
	/**
	 * auth
	 * @var Tx_KeQuestionnaireExtbase_Domain_Model_authcode
	 */
	protected $auth;
	
	
	
	/**
	 * Setter for startTstamp
	 *
	 * @param integer $startTstamp start tstamp
	 * @return void
	 */
	public function setStartTstamp($startTstamp) {
		$this->startTstamp = $startTstamp;
	}

	/**
	 * Getter for startTstamp
	 *
	 * @return integer start tstamp
	 */
	public function getStartTstamp() {
		return $this->startTstamp;
	}
	
	/**
	 * Setter for lastTstamp
	 *
	 * @param integer $lastTstamp last tstamp
	 * @return void
	 */
	public function setLastTstamp($lastTstamp) {
		$this->lastTstamp = $lastTstamp;
	}

	/**
	 * Getter for lastTstamp
	 *
	 * @return integer last tstamp
	 */
	public function getLastTstamp() {
		return $this->lastTstamp;
	}
	
	/**
	 * Setter for finishedTstamp
	 *
	 * @param integer $finishedTstamp finished tstamp
	 * @return void
	 */
	public function setFinishedTstamp($finishedTstamp) {
		$this->finishedTstamp = $finishedTstamp;
	}

	/**
	 * Getter for finishedTstamp
	 *
	 * @return integer finished tstamp
	 */
	public function getFinishedTstamp() {
		return $this->finishedTstamp;
	}
	
	/**
	 * Setter for xmldata
	 *
	 * @param string $xmldata xmldata
	 * @return void
	 */
	public function setXmldata($xmldata) {
		$this->xmldata = $xmldata;
	}

	/**
	 * Getter for xmldata
	 *
	 * @return string xmldata
	 */
	public function getXmldata() {
		return $this->xmldata;
	}
	
	/**
	 * Setter for ip
	 *
	 * @param string $ip ip
	 * @return void
	 */
	public function setIp($ip) {
		$this->ip = $ip;
	}

	/**
	 * Getter for ip
	 *
	 * @return string ip
	 */
	public function getIp() {
		return $this->ip;
	}
	
	/**
	 * Setter for mailsentTstamp
	 *
	 * @param string $mailsentTstamp mailsent_ stamp
	 * @return void
	 */
	public function setMailsentTstamp($mailsentTstamp) {
		$this->mailsentTstamp = $mailsentTstamp;
	}

	/**
	 * Getter for mailsentTstamp
	 *
	 * @return string mailsent_ stamp
	 */
	public function getMailsentTstamp() {
		return $this->mailsentTstamp;
	}
	
	/**
	 * Setter for auth
	 *
	 * @param Tx_KeQuestionnaireExtbase_Domain_Model_authcode $auth auth
	 * @return void
	 */
	public function setAuth(Tx_KeQuestionnaireExtbase_Domain_Model_authcode $auth) {
		$this->auth = $auth;
	}

	/**
	 * Getter for auth
	 *
	 * @return Tx_KeQuestionnaireExtbase_Domain_Model_authcode auth
	 */
	public function getAuth() {
		return $this->auth;
	}
	
}
?>
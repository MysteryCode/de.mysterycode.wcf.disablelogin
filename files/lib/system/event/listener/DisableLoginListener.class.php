<?php

namespace wcf\system\event\listener;
use wcf\system\event\IEventListener;
use wcf\system\exception\PermissionDeniedException;
use wcf\system\WCF;

/**
 * Redirects guests to the login form
 *
 * @author	Florian Gail
 * @copyright	2013 Florian Gail <http://www.mysterycode.de/>
 * @license	Creative Commons <by-nc-nd> <http://creativecommons.org/licenses/by-nc-nd/4.0/legalcode>
 * @package	de.mysterycode.wcf.disablelogin
 * @category	WCF
 */
class DisableLoginListener implements IEventListener {
	/**
	 * @see \wcf\system\event\IEventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (WCF::getUser()->userID == 0)
			throw new PermissionDeniedException();
	}
}

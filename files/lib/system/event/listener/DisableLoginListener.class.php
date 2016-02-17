<?php

namespace wcf\system\event\listener;
use wcf\system\event\listener\IParameterizedEventListener;
use wcf\system\exception\PermissionDeniedException;
use wcf\system\WCF;

/**
 * Denies access to the login form
 *
 * @author	Florian Gail
 * @copyright	2013-2016 Florian Gail <http://www.mysterycode.de/>
 * @license	Kostenlose Plugins <https://downloads.mysterycode.de/license/6-kostenlose-plugins/>
 * @package	de.mysterycode.wcf.disablelogin
 * @category	WCF
 */
class DisableLoginListener implements IParameterizedEventListener {
	/**
	 * @see \wcf\system\event\listener\IParameterizedEventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName, array &$parameters) {
		if (WCF::getUser()->userID == 0)
			throw new PermissionDeniedException();
	}
}

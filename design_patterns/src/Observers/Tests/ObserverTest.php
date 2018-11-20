<?php

namespace DesignPatterns\Observers\Tests;

use DesignPatterns\Observers\MessageQueueSystem\User;
use DesignPatterns\Observers\MessageQueueSystem\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
	public function testChangeInUserLeadsToObserverBeingNotified()
	{
		$observer = new UserObserver();

		$user = new User();
		$user->attach($observer);

		$user->changeEmail('foo@gmail.com');
		$this->assertCount(1, $observer->getChangedUsers());
	}
}
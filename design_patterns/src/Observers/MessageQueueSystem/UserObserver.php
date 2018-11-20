<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 20.11.18.
 * Time: 10.44
 */

namespace DesignPatterns\Observers\MessageQueueSystem;


use SplSubject;

class UserObserver implements \SplObserver
{
	private $changedUsers = [];

	public function update(SplSubject $subject)
	{
		$this->changedUsers[] = clone $subject;
	}

	public function getChangedUsers(): array
	{
		return $this->changedUsers;
	}

}
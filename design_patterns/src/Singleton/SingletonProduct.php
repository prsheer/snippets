<?php

namespace DesignPatterns\Singleton;

final class SingletonProduct
{
	private static $instance;

	public $mix;

	public static function getInstance() {

		if (!(self::$instance instanceof self)) {
			self::$instance = new self();
		}

	}

	private function __construct() {
	}

	private function __clone() {
	}
}
<?php
declare(strict_types=1);

namespace MultiSearch;


/**
 * Provides and holds needles bundles during whole php-fpm worker life time
 */
class NeedlesBundleRepository
{
	/** @var NeedlesBundleRepository */
	private static $instance;


	/**
	 * @throws MultiSearchException
	 */
	private function __construct()
	{
		throw new MultiSearchException('Not implemented');
	}


	/**
	 * @throws MultiSearchException
	 */
	public function fromFile(string $filepath): NeedlesBundle
	{
		throw new MultiSearchException('Not implemented');
	}

	public function dispose(NeedlesBundle $needlesBundle): void
	{
		throw new MultiSearchException('Not implemented');
	}


	public static function getInstance(): self
	{
		throw new MultiSearchException('Not implemented');
	}
}


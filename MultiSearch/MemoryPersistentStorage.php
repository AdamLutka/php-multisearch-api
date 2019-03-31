<?php
declare(strict_types=1);

namespace MultiSearch;


/**
 * Provides and holds needles bundles during whole php-fpm worker life time
 */
class MemoryPersistentStorage implements NeedlesBundleStorageInterface
{
	/**
	 * @throws MultiSearchException
	 */
	private function __construct()
	{
		throw new MultiSearchException('Not implemented');
	}


	public function setNeedlesBundle(string $name, NeedlesBundle $needlesBundle, int $validityStamp = 0): void
	{
		throw new MultiSearchException('Not implemented');
	}

	/**
	 * @param int $validityStamp needles bundle with smaller validity stamp is ignored
	 * @throws MultiSearchException is thrown if needles bundle isn't found
	 */
	public function getNeedlesBundle(string $name, int $validityStamp = 0): NeedlesBundle
	{
		throw new MultiSearchException('Not implemented');
	}

	/**
	 * @see getNeedlesBundle for validityStamp explanation
	 */
	public function hasNeedlesBundle(string $name, int $validityStamp = 0): bool
	{
		throw new MultiSearchException('Not implemented');
	}

	public function removeNeedlesBundle(string $name): void
	{
		throw new MultiSearchException('Not implemented');
	}


	public static function getInstance(): self
	{
		throw new MultiSearchException('Not implemented');
	}
}


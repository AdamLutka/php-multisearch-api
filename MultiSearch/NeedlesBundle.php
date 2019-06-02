<?php
declare(strict_types=1);

namespace MultiSearch;


/**
 * The group of needles that can be searched for at one time
 */
class NeedlesBundle
{
	public function __construct()
	{
		throw new MultiSearchException('Not implemented');
	}


	/**
	 * If needle with given key exists, its value will be overwritten.
	 */
	public function insert(string $key, string $value = ''): void
	{
		throw new MultiSearchException('Not implemented');
	}

	/**
	 * Marks needle with given key as removed, so it won't be searched for
	 * in the future, but memory stay used.
	 * Returns TRUE if there was needle with given key in the bundle.
	 */
	public function remove(string $key): bool
	{
		throw new MultiSearchException('Not implemented');
	}

	/**
	 * @return Needle[] alphabetically sorted needles
	 */
	public function getNeedles(): array
	{
		throw new MultiSearchException('Not implemented');
	}

	/**
	 * @throws MultiSearchException if there is no needle with given key
	 */
	public function getNeedle(string $key): Needle
	{
		throw new MultiSearchException('Not implemented');
	}

	public function hasNeedle(string $key): bool
	{
		throw new MultiSearchException('Not implemented');
	}

	/**
	 * @return SearchHit[] sorted by position and key length
	 */
	public function searchIn(string $haystack): array
	{
		throw new MultiSearchException('Not implemented');
	}
}


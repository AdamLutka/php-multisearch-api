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


	public function insert(string $key, string $value = ''): void
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


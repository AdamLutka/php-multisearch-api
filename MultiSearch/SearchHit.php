<?php
declare(strict_types=1);

namespace MultiSearch;


/**
 * Represents found needle in haystack
 */
class SearchHit
{
	/** @var int */
	private $position;

	/** @var string */
	private $key;

	/** @var string */
	private $value;


	public function __construct(int $position, string $key, string $value = '')
	{
		throw new MultiSearchException('Not implemented');
	}


	public function getPosition(): int
	{
		throw new MultiSearchException('Not implemented');
	}

	public function getKey(): string
	{
		throw new MultiSearchException('Not implemented');
	}

	public function getValue(): string
	{
		throw new MultiSearchException('Not implemented');
	}
}


<?php
declare(strict_types=1);

namespace MultiSearch;


/**
 * Represents a string that is searched for
 */
class Needle
{
	/** @var string */
	private $key;

	/** @var string */
	private $value;


	public function __construct(string $key, string $value = '')
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


<?php
declare(string_types=1);

namespace MultiSearch;


interface NeedlesBundleStorageInterface
{
	public function setNeedlesBundle(string $name, NeedlesBundle $needlesBundle, int $validityStamp = 0): void;

	/**
	 * @throws MultiSearchException
	 */
	public function getNeedlesBundle(string $name, int $validityStamp = 0): NeedlesBundle;

	public function hasNeedlesBundle(string $name, int $validityStamp = 0): bool;

	public function removeNeedlesBundle(string $name): void;
}


<?php
declare(strict_types=1);

namespace MultiSearch;


interface NeedlesBundleLoaderInterface
{
	public function loadFromFile(string $filepath): NeedlesBundle;
}


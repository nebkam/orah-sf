<?php

namespace App\Controller;

use DirectoryIterator;

class Helper
	{
	public static function getFilenames(string $path): array
		{
		$filenames = [];
		foreach (new DirectoryIterator($path) as $iterator)
			{
			/** @var DirectoryIterator $iterator */
			if ($iterator->isDir() || $iterator->isDot())
				{
				continue;
				}
			$filenames[] = $iterator->getFilename();
			}

		return $filenames;
		}
	}

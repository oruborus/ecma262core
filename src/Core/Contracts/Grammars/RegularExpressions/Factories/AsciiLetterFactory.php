<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\AsciiLetter;

interface AsciiLetterFactory
{
    /** @param int<65, 90>|int<97, 122> $codePoint */
    public function create(int $codePoint): AsciiLetter;
}

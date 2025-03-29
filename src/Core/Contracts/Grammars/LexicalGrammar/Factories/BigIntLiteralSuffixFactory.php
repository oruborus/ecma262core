<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\BigIntLiteralSuffix;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface BigIntLiteralSuffixFactory
{
    public function create(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): BigIntLiteralSuffix;
}

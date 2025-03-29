<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NumericLiteralSeparator;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface NumericLiteralSeparatorFactory
{
    public function create(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NumericLiteralSeparator;
}

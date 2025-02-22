<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DoubleStringCharacters;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleStringCharacters;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\StringLiteral;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface StringLiteralFactory
{
    public function create(
        SingleStringCharacters|DoubleStringCharacters $characters,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): StringLiteral;

    public function createEmpty(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): StringLiteral;
}

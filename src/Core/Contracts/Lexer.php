<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElement;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface Lexer
{
    public function tokenize(SourceText $sourceText, Position $position, Parameters $parameters): ?InputElement;
}

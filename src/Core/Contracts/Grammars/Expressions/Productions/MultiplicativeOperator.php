<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;

interface MultiplicativeOperator extends Node
{
    /** @param InputElementType::Asterisk|InputElementType::Solidus|InputElementType::Percent $operator */
    public InputElementType $operator { get; }
}

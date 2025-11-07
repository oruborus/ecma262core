<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;

interface AssignmentOperator extends Node
{
    /** @param InputElementType::AsteriskEquals|InputElementType::SolidusEquals|InputElementType::PercentEquals|InputElementType::PlusEquals|InputElementType::MinusEquals|InputElementType::DoubleLessThanEquals|InputElementType::DoubleGreaterThanEquals|InputElementType::TripleGreaterThanEquals|InputElementType::AmpersandEquals|InputElementType::CircumflexEquals|InputElementType::PipeEquals|InputElementType::DoubleAsteriskEquals $operator */
    public InputElementType $operator { get; }
}

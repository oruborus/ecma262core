<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;

interface HasIs
{
    public function is(InputElementType $value): bool;
}

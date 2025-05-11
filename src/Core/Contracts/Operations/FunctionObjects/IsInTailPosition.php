<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface IsInTailPosition
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-isintailposition
     */
    public function __invoke(Node $call): BooleanValue;
}

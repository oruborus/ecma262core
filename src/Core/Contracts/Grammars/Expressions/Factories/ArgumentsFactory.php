<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ArgumentList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;

interface ArgumentsFactory
{
    public function create(?ArgumentList $argumentList): Arguments;
}

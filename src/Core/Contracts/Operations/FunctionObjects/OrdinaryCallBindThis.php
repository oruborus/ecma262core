<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ExecutionContext;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface OrdinaryCallBindThis
{
    /**
     * @see https://tc39.es/ecma262/#sec-ordinarycallbindthis
     */
    public function __invoke(Agent $agent, ObjectValue $f, ExecutionContext $calleeContext, LanguageValue $thisArgument): UnusedValue;
}

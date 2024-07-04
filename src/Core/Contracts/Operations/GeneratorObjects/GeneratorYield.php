<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface GeneratorYield
{
    /**
     * @see https://tc39.es/ecma262/#sec-generatoryield
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $iterNextObj): LanguageValue;
}

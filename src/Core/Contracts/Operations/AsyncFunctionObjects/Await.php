<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AsyncFunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface Await
{
    /**
     * @see https://tc39.es/ecma262/#await
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $value): LanguageValue;
}

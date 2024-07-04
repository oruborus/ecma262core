<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Promises;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface IsPromise
{
    /**
     * @see https://tc39.es/ecma262/#sec-ispromise
     */
    public function __invoke(Agent $agent, LanguageValue $x): BooleanValue;
}

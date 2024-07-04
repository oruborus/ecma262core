<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Promises;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface FulfillPromise
{
    /**
     * @see https://tc39.es/ecma262/#sec-fulfillpromise
     */
    public function __invoke(Agent $agent, ObjectValue $promise, LanguageValue $value): UnusedValue;
}

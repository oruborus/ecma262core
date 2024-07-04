<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Promises;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\PromiseReaction;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface TriggerPromiseReactions
{
    /**
     * @see https://tc39.es/ecma262/#sec-triggerpromisereactions
     *
     * @param ListValue<int, PromiseReaction> $reactions
     */
    public function __invoke(Agent $agent, ListValue $reactions, LanguageValue $argument): UnusedValue;
}

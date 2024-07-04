<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\JobsAndHostOperations;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface HostEnqueueTimeoutJob
{
    /**
     * @see https://tc39.es/ecma262/#sec-hostenqueuetimeoutjob
     * 
     * @param callable(Agent):LanguageValue $job
     */
    public function __invoke(Agent $agent, callable $timeoutJob, NullValue|RealmRecord $realm, NumberValue $miliseconds): UnusedValue;
}

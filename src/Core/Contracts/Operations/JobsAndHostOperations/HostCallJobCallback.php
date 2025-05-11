<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\JobsAndHostOperations;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\JobCallback;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface HostCallJobCallback
{
    /**
     * @see https://tc39.es/ecma262/#sec-hostcalljobcallback
     *
     * @param ListValue<LanguageValue> $argumentsList
     *
     * @throws AbruptCompletion
     */
    public function __invoke(JobCallback $jobCallback, LanguageValue $v, ListValue $argumentsList): LanguageValue;
}

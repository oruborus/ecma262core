<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Promises;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\JobCallback;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PromiseReactionJob;

interface NewPromiseResolveThenableJob
{
    /**
     * @see https://tc39.es/ecma262/#sec-newpromiseresolvethenablejob
     *
     * @throws AbruptCompletion 
     */
    public function __invoke(ObjectValue $promiseToResolve, ObjectValue $thenable, JobCallback $then): PromiseReactionJob;
}

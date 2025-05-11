<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\JobsAndHostOperations;

use Oru\EcmaScript\Core\Contracts\Values\JobCallback;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface HostMakeJobCallback
{
    /**
     * @see https://tc39.es/ecma262/#sec-hostmakejobcallback
     */
    public function __invoke(ObjectValue $callback): JobCallback;
}

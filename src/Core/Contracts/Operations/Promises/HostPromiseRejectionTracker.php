<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Promises;

use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface HostPromiseRejectionTracker
{
    /**
     * @see https://tc39.es/ecma262/#sec-host-promise-rejection-tracker
     */
    public function __invoke(ObjectValue $promise, StringValue $operation): UnusedValue;
}

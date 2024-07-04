<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Iteration;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\IteratorRecord;

interface CreateAsyncFromSyncIterator
{
    /**
     * @see https://tc39.es/ecma262/#sec-createasyncfromsynciterator
     */
    public function __invoke(Agent $agent, IteratorRecord $syncIteratorRecord): IteratorRecord;
}

<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ImportEntry;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ImportedLocalNames
{
    /**
     * @see https://tc39.es/ecma262/#sec-importedlocalnames
     *
     * @param ListValue<int, ImportEntry> $importEntries
     * @return ListValue<int, StringValue>
     */
    public function __invoke(Agent $agent, ListValue $importEntries): ListValue;
}

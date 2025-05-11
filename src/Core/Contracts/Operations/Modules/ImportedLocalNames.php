<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Values\ImportEntry;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ImportedLocalNames
{
    /**
     * @see https://tc39.es/ecma262/#sec-importedlocalnames
     *
     * @param ListValue<ImportEntry> $importEntries
     * @return ListValue<StringValue>
     */
    public function __invoke(ListValue $importEntries): ListValue;
}

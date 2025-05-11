<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\ExportEntry;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ExportFromClause extends Node, HasContains
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-exportednames
     *
     * @return ListValue<StringValue>
     */
    public function exportedNames(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-exportentriesformodule
     *
     * @return ListValue<ExportEntry>
     */
    public function exportEntriesForModule(StringValue|NullValue $module): ListValue;
}

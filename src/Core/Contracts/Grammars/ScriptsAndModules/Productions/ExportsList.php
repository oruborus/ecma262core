<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\ExportEntry;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ExportsList extends Node
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-exportedbindings
     *
     * @return ListValue<int, StringValue>
     */
    public function exportedBindings(Agent $agent): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-exportednames
     *
     * @return ListValue<int, StringValue>
     */
    public function exportedNames(Agent $agent): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-exportentriesformodule
     *
     * @return ListValue<int, ExportEntry>
     */
    public function exportEntriesForModule(Agent $agent, StringValue|NullValue $module): ListValue;
}

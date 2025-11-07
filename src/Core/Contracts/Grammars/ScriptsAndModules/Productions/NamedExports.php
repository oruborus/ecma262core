<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\StringLiteral;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface NamedExports extends ExportFromClause
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-exportedbindings
     *
     * @return ListValue<StringValue>
     */
    public function exportedBindings(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-referencedbindings
     *
     * @return ListValue<IdentifierName|StringLiteral>
     */
    public function referencedBindings(): ListValue;
}

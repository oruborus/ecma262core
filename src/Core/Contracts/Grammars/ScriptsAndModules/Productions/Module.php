<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\ExportEntry;
use Oru\EcmaScript\Core\Contracts\Values\ImportEntry;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface Module extends Node, HasContains
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-lexicallydeclarednames
     *
     * @return ListValue<StringValue>
     */
    public function lexicallyDeclaredNames(): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-lexicallyscopeddeclarations
     *
     * @return ListValue<Declaration>
     */
    public function lexicallyScopedDeclarations(): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-vardeclarednames
     *
     * @return ListValue<StringValue>
     */
    public function varDeclaredNames(): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-varscopeddeclarations
     *
     * @return ListValue<Declaration>
     */
    public function varScopedDeclarations(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-importedlocalnames
     *
     * @param ListValue<ImportEntry> $importEntries
     * @return ListValue<StringValue>
     */
    public function importedLocalNames(ListValue $importEntries): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-modulerequests
     *
     * @return ListValue<StringValue>
     */
    public function moduleRequests(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-importentries
     *
     * @return ListValue<ImportEntry>
     */
    public function importEntries(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-exportedbindings
     *
     * @return ListValue<StringValue>
     */
    public function exportedBindings(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-exportednames
     *
     * @return ListValue<StringValue>
     */
    public function exportedNames(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-exportentries
     *
     * @return ListValue<ExportEntry>
     */
    public function exportEntries(): ListValue;
}

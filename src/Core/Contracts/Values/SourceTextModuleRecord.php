<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\Module;

/**
 * @see https://tc39.es/ecma262/#table-additional-fields-of-source-text-module-records
 */
interface SourceTextModuleRecord extends CyclicModuleRecord
{
    public function ecmaScriptCode(): Module;

    public function context(null|ExecutionContext|EmptyValue $context = null): ExecutionContext|EmptyValue;

    public function importMeta(null|ObjectValue|EmptyValue $importMeta = null): ObjectValue|EmptyValue;

    /**
     * @param ?ListValue<int, ImportEntry> $importEntries
     * @return ListValue<int, ImportEntry>
     */
    public function importEntries(?ListValue $importEntries = null): ListValue;

    /**
     * @param ?ListValue<int, ExportEntry> $localExportEntries
     * @return ListValue<int, ExportEntry>
     */
    public function localExportEntries(?ListValue $localExportEntries = null): ListValue;

    /**
     * @param ?ListValue<int, ExportEntry> $indirectExportEntries
     * @return ListValue<int, ExportEntry>
     */
    public function indirectExportEntries(?ListValue $indirectExportEntries = null): ListValue;

    /**
     * @param ?ListValue<int, ExportEntry> $starExportEntries
     * @return ListValue<int, ExportEntry>
     */
    public function starExportEntries(?ListValue $starExportEntries = null): ListValue;
}

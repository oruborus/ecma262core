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
     * @param ?ListValue<ImportEntry> $importEntries
     * @return ListValue<ImportEntry>
     */
    public function importEntries(?ListValue $importEntries = null): ListValue;

    /**
     * @param ?ListValue<ExportEntry> $localExportEntries
     * @return ListValue<ExportEntry>
     */
    public function localExportEntries(?ListValue $localExportEntries = null): ListValue;

    /**
     * @param ?ListValue<ExportEntry> $indirectExportEntries
     * @return ListValue<ExportEntry>
     */
    public function indirectExportEntries(?ListValue $indirectExportEntries = null): ListValue;

    /**
     * @param ?ListValue<ExportEntry> $starExportEntries
     * @return ListValue<ExportEntry>
     */
    public function starExportEntries(?ListValue $starExportEntries = null): ListValue;
}

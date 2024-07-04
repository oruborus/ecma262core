<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

/**
 * @see https://tc39.es/ecma262/#table-module-record-fields
 * @see https://tc39.es/ecma262/#table-abstract-methods-of-module-records
 */
interface ModuleRecord extends SpecificationValue
{
    public function realm(): RealmRecord;

    public function environment(null|EnvironmentRecord|EmptyValue $environment = null): EnvironmentRecord|EmptyValue;

    public function DFSIndex(null|NumberValue|EmptyValue $dfsIndex = null): NumberValue|EmptyValue;

    public function DFSAncestorIndex(null|NumberValue|EmptyValue $dfsAncestorIndex = null): NumberValue|EmptyValue;

    /**
     * @param ?ListValue<int, StringValue> $requestedModules
     * @return ListValue<int, StringValue>
     */
    public function requestedModules(?ListValue $requestedModules = null): ListValue;

    /**
     * @param ?ListValue<int, SpecifierModulePair> $loadedModules
     * @return ListValue<int, SpecifierModulePair>
     */
    public function loadedModules(?ListValue $loadedModules = null): ListValue;

    public function cycleRoot(null|CyclicModuleRecord|EmptyValue $cycleRoot = null): CyclicModuleRecord|EmptyValue;

    public function hasTLA(): BooleanValue;

    public function asyncEvaluation(?BooleanValue $asyncEvaluation = null): BooleanValue;

    public function topLevelCapability(null|PromiseCapabilityRecord|EmptyValue $topLevelCapability = null): PromiseCapabilityRecord|EmptyValue;

    /**
     * @param ?ListValue<int, CyclicModuleRecord> $asyncParentModules
     * @return ListValue<int, CyclicModuleRecord>
     */
    public function asyncParentModules(?ListValue $asyncParentModules = null): ListValue;

    public function pendingAsyncDependencies(null|NumberValue|EmptyValue $pendingAsyncDependencies = null): NumberValue|EmptyValue;

    /**
     * Prepares the module for linking by recursively loading all its dependencies, and returns a promise.
     */
    public function loadRequestedModules(Agent $agent, mixed $hostDefined = null): ObjectValue;

    /**
     * Return a list of all names that are either directly or indirectly exported from this module.
     *
     * LoadRequestedModules must have completed successfully prior to invoking this method.
     * 
     * @throws AbruptCompletion
     *
     * @param ?ListValue<int, SourceTextModuleRecord> $exportStarSet
     * @return ListValue<int, StringValue>
     */
    public function getExportedNames(Agent $agent, ?ListValue $exportStarSet = null): ListValue;

    /**
     * Return the binding of a name exported by this module. Bindings are represented by a ResolvedBinding Record, 
     * of the form { [[Module]]: Module Record, [[BindingName]]: String | namespace }.
     * If the export is a Module Namespace Object without a direct binding in any module,
     * [[BindingName]] will be set to namespace. Return null if the name cannot be resolved, or ambiguous if multiple bindings were found.
     * Each time this operation is called with a specific exportName, resolveSet pair as arguments it must return the same result.
     *
     * LoadRequestedModules must have completed successfully prior to invoking this method.
     *
     * @param ?ListValue<int, ModuleExportNamePair> $resolveSet
     * @return ResolvedBinding|NullValue|EntryResult::AMBIGUOUS
     */
    public function resolveExport(Agent $agent, StringValue $exportName, ?ListValue $resolveSet = null): ResolvedBinding|NullValue|EntryResult;

    /**
     * Prepare the module for evaluation by transitively resolving all module dependencies and
     * creating a Module Environment Record.
     *
     * LoadRequestedModules must have completed successfully prior to invoking this method.
     * 
     * @throws AbruptCompletion
     */
    public function link(Agent $agent): UnusedValue;

    /**
     * Returns a promise for the evaluation of this module and its dependencies,
     * resolving on successful evaluation or if it has already been evaluated successfully,
     * and rejecting for an evaluation error or if it has already been evaluated unsuccessfully.
     * If the promise is rejected, hosts are expected to handle the promise rejection and
     * rethrow the evaluation error.
     * 
     * Link must have completed successfully prior to invoking this method.
     */
    public function evaluate(Agent $agent): ObjectValue;
}

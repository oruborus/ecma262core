<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\FieldName;
use Oru\EcmaScript\Core\Contracts\Nodes\Module;
use Oru\EcmaScript\Core\Contracts\Nodes\Node;
use Oru\EcmaScript\Core\Contracts\ParameterName;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Stringable;

/**
 * @psalm-import-type UnspecifiedInterval from CharSet
 */
interface ValueFactory
{
    public function createAlreadyResolvedRecord(BooleanValue $value): AlreadyResolvedRecord;

    public function createAsyncGeneratorRequest(null|LanguageValue|AbruptCompletion $completion, PromiseCapabilityRecord $capability): AsyncGeneratorRequest;

    public function createBigInt(string|Stringable $value): BigIntValue;

    public function createBoolean(bool $value): BooleanValue;

    public function createBreakCompletion(LanguageValue $value, null|EmptyValue|StringValue $target = null): BreakCompletion;

    /**
     * @param int|UnspecifiedInterval[] $charSet
     */
    public function createCharSet(int|array $charSet = []): CharSet;

    public function createCodePointRecord(int $codePoint, int $codeUnitCount, bool $isUnpairedSurrogate): CodePointRecord;

    public function createContinueCompletion(LanguageValue $value, null|EmptyValue|StringValue $target = null): ContinueCompletion;

    public function createDeclarativeEnvironmentRecord(null|NullValue|EnvironmentRecord $outerEnv = null): DeclarativeEnvironmentRecord;

    public function createDataBlock(int $size): DataBlock;

    public function createEmpty(): EmptyValue;

    public function createEnvironment(): EnvironmentRecord;

    public function createExecutionContext(ObjectValue|NullValue $function, RealmRecord $realm, ScriptRecord|ModuleRecord|NullValue $scriptOrModule, null|NullValue|EnvironmentRecord $lexicalEnvironment = null, null|NullValue|EnvironmentRecord $variableEnvironment = null, null|UndefinedValue|ObjectValue $generator = null): ExecutionContext;

    /**
     * @param StringValue|NullValue|ImportName::ALL|ImportName::ALL_BUT_DEFAULT $importName
     */
    public function createExportEntry(StringValue|NullValue $exportName, StringValue|NullValue $moduleRequest, StringValue|NullValue|ImportName $importName, StringValue|NullValue $localName): ExportEntry;

    /**
     * @param "uninitialized"|"initialized"|"lexical" $thisBindingStatus
     */
    public function createFunctionEnvironmentRecord(ObjectValue $functionObject, ObjectValue|UndefinedValue $newTarget, NullValue|EnvironmentRecord $outerEnv, string $thisBindingStatus): FunctionEnvironmentRecord;

    /**
     * @param ListValue<int, StringValue> $varNames
     */
    public function createGlobalEnvironmentRecord(ObjectEnvironmentRecord $objectRecord, ObjectValue $globalThisValue, DeclarativeEnvironmentRecord $declarativeRecord, NullValue|EnvironmentRecord $outerEnv, ListValue $varNames): GlobalEnvironmentRecord;

    /**
     * @template TNode of Node
     * @param class-string<TNode> $node
     * @return GoalSymbol<TNode>
     */
    public function createGoalSymbol(string $node, ParameterName ...$parameterNames): GoalSymbol;

    /**
     * @param ListValue<int, CyclicModuleRecord> $visited
     */
    public function createGraphLoadingState(PromiseCapabilityRecord $promiseCapability, BooleanValue $isLoading, NumberValue $pendingModulesCount, ListValue $visited, mixed $hostDefined = null): GraphLoadingState;

    public function createIteratorRecord(ObjectValue $iterator, ObjectValue $nextMethod, BooleanValue $done): IteratorRecord;

    public function createJobCallback(ObjectValue $callback, mixed $hostDefined): JobCallback;

    /**
     * @template TKey
     * @template TValue
     * @param array<TKey, TValue> $value
     * @return ListValue<TKey, TValue>
     */
    public function createList(array $value = []): ListValue;

    public function createMathematicalValue(Stringable|string $integerPart = '0', Stringable|string $decimalPart = '0', Stringable|string $exponentPart = '0'): MathematicalValue;

    public function createMethodDefinitionRecord(StringValue|SymbolValue $key, ObjectValue $closure): MethodDefinitionRecord;

    public function createModuleEnvironmentRecord(): ModuleEnvironmentRecord;

    public function createModuleExportNamePair(ModuleRecord $module, StringValue $specifier): ModuleExportNamePair;

    public function createNormalCompletion(LanguageValue $value, ?StringValue $target = null): NormalCompletion;

    public function createNull(): NullValue;

    public function createNumber(int|float $value): NumberValue;

    /**
     * @param ListValue<int, FieldName> $internalSlotsList
     */
    public function createObject(ListValue $internalSlotsList): ObjectValue;

    public function createObjectEnvironmentRecord(
        ObjectValue $bindingObject,
        BooleanValue $isWithEnvironment,
        NullValue|EnvironmentRecord $outerEnv
    ): ObjectEnvironmentRecord;

    public function createParameters(ParameterName ...$parameterNames): Parameters;

    public function createPatternEvaluationResult(CharSet $charSet, BooleanValue $invert): PatternEvaluationResult;

    public function createPromiseCapabilityRecord(ObjectValue $promise, ObjectValue $resolve, ObjectValue $reject): PromiseCapabilityRecord;

    public function createPromiseReaction(UndefinedValue|PromiseCapabilityRecord $capability, PromiseReactionType $type, EmptyValue|JobCallback $handler): PromiseReaction;

    /**
     * @param callable(Agent):LanguageValue $job
     */
    public function createPromiseReactionJob(callable $job, NullValue|RealmRecord $realm): PromiseReactionJob;

    public function createPropertyDescriptor(
        ?LanguageValue $value = null,
        null|ObjectValue|UndefinedValue $get = null,
        null|ObjectValue|UndefinedValue $set = null,
        ?BooleanValue $writable = null,
        ?BooleanValue $enumerable = null,
        ?BooleanValue $configurable = null,
    ): PropertyDescriptor;

    public function createQuantifierEvaluationResult(int $min, int|float $max, bool $greedy): QuantifierEvaluationResult;

    public function createQuantifierPrefixEvaluationResult(int $min, int|float $max): QuantifierPrefixEvaluationResult;

    public function createRealm(): RealmRecord;

    /**
     * @param StringValue|ImportName::NAMESPACE $bindingName
     */
    public function createResolvedBinding(ModuleRecord $module, StringValue|ImportName $bindingName): ResolvedBinding;

    public function createResolveRejectRecord(UndefinedValue|ObjectValue $resolve, UndefinedValue|ObjectValue $reject): ResolveRejectRecord;

    public function createReturnCompletion(LanguageValue $value, ?StringValue $target = null): ReturnCompletion;

    public function createScriptRecord(): ScriptRecord;

    /**
     * @param ListValue<int, StringValue> $requestedModules
     * @param ListValue<int, SpecifierModulePair> $loadedModules
     * @param ListValue<int, CyclicModuleRecord> $asyncParentModules
     * @param ListValue<int, ImportEntry> $importEntries
     * @param ListValue<int, ExportEntry> $localExportEntries
     * @param ListValue<int, ExportEntry> $indirectExportEntries
     * @param ListValue<int, ExportEntry> $starExportEntries
     */
    public function createSourceTextModuleRecord(
        RealmRecord $realm,
        EnvironmentRecord|EmptyValue $environment,
        ObjectValue|EmptyValue $namespace,
        mixed $hostDefined,
        Status $status,
        ThrowCompletion|EmptyValue $evaluationError,
        NumberValue|EmptyValue $dfsIndex,
        NumberValue|EmptyValue $dfsAncestorIndex,
        ListValue $requestedModules,
        ListValue $loadedModules,
        CyclicModuleRecord|EmptyValue $cycleRoot,
        BooleanValue $hasTLA,
        BooleanValue $asyncEvaluation,
        PromiseCapabilityRecord|EmptyValue $topLevelCapability,
        ListValue $asyncParentModules,
        NumberValue|EmptyValue $pendingAsyncDependencies,
        Module $ecmaScriptCode,
        ExecutionContext|EmptyValue $context,
        ObjectValue|EmptyValue $importMeta,
        ListValue $importEntries,
        ListValue $localExportEntries,
        ListValue $indirectExportEntries,
        ListValue $starExportEntries
    ): SourceTextModuleRecord;

    public function createSpecifierModulePair(StringValue $specifier, ModuleRecord $module): SpecifierModulePair;

    /**
     * @param (ListValue<int, int>|UndefinedValue)[] $captures
     */
    public function createState(int $endIndex, array $captures): State;

    /**
     * @param array<int, int>|string|Stringable $value
     */
    public function createString(string|array|Stringable $value): StringValue;

    public function createSymbol(null|string|StringValue|UndefinedValue $description = null): SymbolValue;

    public function createThrowCompletion(LanguageValue $value, ?StringValue $target = null): ThrowCompletion;

    public function createTypedArrayType(string $case): TypedArrayType;

    public function createUndefined(): UndefinedValue;

    public function createUnused(): UnusedValue;

    public function createReferenceRecord(
        null|LanguageValue|EnvironmentRecord $base,
        StringValue|SymbolValue $referencedName,
        BooleanValue $strict,
        ?LanguageValue $thisValue = null
    ): ReferenceRecord;
}

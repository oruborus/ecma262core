<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ExecutionContext;
use Oru\EcmaScript\Core\Contracts\Values\GoalSymbol;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

/**
 * @see https://tc39.es/ecma262/#sec-agent-record
 * @see https://tc39.es/ecma262/#table-agent-record
 */
interface Agent
{
    public BooleanValue $littleEndian { get; }

    public BooleanValue $canBlock { get; set; }

    public string $signifier { get; }

    public BooleanValue $isLockFree1 { get; }

    public BooleanValue $isLockFree2 { get; }

    public BooleanValue $isLockFree8 { get; }

    // FIXME: Implement Agent::[[CandidateExecution]]
    // public CandidateExecutionRecord $candidateExecution { get; set; }

    /** @var ListValue<ObjectValue|SymbolValue> $keptAlive */
    public ListValue $keptAlive { get; set; }

    public int $moduleAsyncEvaluationCount { get; set; }

    public GoalSymbol $goalSymbol { get; set; }

    public bool $inIterationStatement { get; set; }

    public bool $inSwitchStatement { get; set; }

    public bool $strict { get; set; }

    public bool $inEval { get; set; }

    /** @var string[] $currentLabelSet */
    public array $currentLabelSet { get; set; }

    public ?string $currentFile { get; set; }

    public ?SourceText $currentSourceText { get; set; }

    /** @var ListValue<array{key: StringValue, symbol: SymbolValue}> $globalSymbolRegistry */
    public ListValue $globalSymbolRegistry { get; }

    public function getRunningExecutionContext(): ExecutionContext;

    /** @return ExecutionContext[] */
    public function getExecutionContextStack(): array;

    public function popExecutionContextStack(ExecutionContext $executionContext): ExecutionContext;

    public function pushExecutionContextStack(ExecutionContext $executionContext): void;

    /** @param array<string, SymbolValue> $wellKnownSymbols */
    public function setWellKnownSymbols(array $wellKnownSymbols): void;

    public function getWellKnownSymbol(WellKnownSymbol $wellKnownSymbol): SymbolValue;

    public function getSpecificationNameForWellKnownSymbol(SymbolValue $symbol): ?string;
}

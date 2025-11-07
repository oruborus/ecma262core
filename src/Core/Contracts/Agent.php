<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ExecutionContext;
use Oru\EcmaScript\Core\Contracts\Values\GoalSymbol;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface Agent extends Container
{
    public GoalSymbol $goalSymbol { get; set; }

    public function setStrict(bool $strict): void;

    public function isStrictCode(): bool;

    public function setInEval(bool $inEval): void;

    public function inEval(): bool;

    /** @param string[] $currentLabelSet */
    public function setCurrentLabelSet(array $currentLabelSet): void;

    /** @return string[] */
    public function currentLabelSet(): array;

    public function setInIterationOrSwitchStatement(bool $inIterationOrSwitchStatement): void;

    public function inIterationOrSwitchStatement(): bool;

    public function setCurrentFile(?string $file = null): void;

    public function getCurrentFile(): ?string;

    public function setCurrentSourceText(?SourceText $sourceText = null): void;

    public function getCurrentSourceText(): ?SourceText;

    public function engine(): Engine;

    public function getRunningExecutionContext(): ExecutionContext;

    /**
     * @return ExecutionContext[]
     */
    public function getExecutionContextStack(): array;

    public function popExecutionContextStack(ExecutionContext $executionContext): ExecutionContext;

    public function pushExecutionContextStack(ExecutionContext $executionContext): void;

    /**
     * @param array<string, SymbolValue> $wellKnownSymbols
     */
    public function setWellKnownSymbols(array $wellKnownSymbols): void;

    /** @var ListValue<array{key: StringValue, symbol: SymbolValue}> $globalSymbolRegistry */
    public ListValue $globalSymbolRegistry { get; }

    public function getLittleEndian(): BooleanValue;

    public function getWellKnownSymbol(WellKnownSymbol $wellKnownSymbol): SymbolValue;

    public function getSpecificationNameForWellKnownSymbol(SymbolValue $symbol): ?string;
}

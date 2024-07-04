<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ExecutionContext;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface Agent extends Container
{
    public function setCurrentFile(?string $file = null): void;

    public function getCurrentFile(): ?string;

    public function engine(): Engine;

    public function getRunningExecutionContext(): ExecutionContext;

    /**
     * @return ExecutionContext[]
     */
    public function getExecutionContextStack(): array;

    public function popExecutionContextStack(ExecutionContext $executionContext): ExecutionContext;

    public function pushExecutionContextStack(ExecutionContext $executionContext): void;

    public function getParser(): Parser;

    public function setParser(Parser $parser): void;

    /**
     * @param array<string, SymbolValue> $wellKnownSymbols
     */
    public function setWellKnownSymbols(array $wellKnownSymbols): void;

    public function getInterpreter(): Interpreter;

    /**
     * @return ListValue<string, SymbolValue>
     */
    public function getGlobalSymbolRegistry(): ListValue;

    public function createError(string $type = 'AggregateError', string $message = '', ?ObjectValue $errors = null): ObjectValue;

    public function createErrorThrowCompletion(string $type = 'AggregateError', string $message = '', ?ObjectValue $errors = null): ThrowCompletion;

    public function createSyntaxError(string $message, ?PositionalInformation $positionalInformation = null): ThrowCompletion;

    public function getLittleEndian(): BooleanValue;

    public function getWellKnownSymbol(WellKnownSymbol $wellKnownSymbol): SymbolValue;

    public function getSpecificationNameForWellKnownSymbol(SymbolValue $symbol): ?string;
}

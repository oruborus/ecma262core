<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface EnvironmentRecord extends SpecificationValue
{
    public function setOuterEnv(NullValue|EnvironmentRecord $v): void;

    public function getOuterEnv(): NullValue|EnvironmentRecord;

    /**
     * @throws AbruptCompletion
     */
    public function hasBinding(StringValue $n): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function createMutableBinding(StringValue $n, BooleanValue $d): UnusedValue;

    /**
     * @throws AbruptCompletion
     */
    public function createImmutableBinding(StringValue $n, BooleanValue $s): UnusedValue;

    /**
     * @throws AbruptCompletion
     */
    public function initializeBinding(StringValue $n, LanguageValue $v): UnusedValue;

    /**
     * @throws AbruptCompletion
     */
    public function setMutableBinding(StringValue $n, LanguageValue $v, BooleanValue $s): UnusedValue;

    /**
     * @throws AbruptCompletion
     */
    public function getBindingValue(StringValue $n, BooleanValue $s): LanguageValue;

    /**
     * @throws AbruptCompletion
     */
    public function deleteBinding(StringValue $n): BooleanValue;

    public function hasThisBinding(): BooleanValue;

    public function hasSuperBinding(): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function getThisBinding(): LanguageValue;

    public function withBaseObject(): ObjectValue|UndefinedValue;
}

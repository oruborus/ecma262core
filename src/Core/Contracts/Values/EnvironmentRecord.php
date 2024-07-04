<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface EnvironmentRecord extends SpecificationValue
{
    public function setOuterEnv(NullValue|EnvironmentRecord $v): void;

    public function getOuterEnv(Agent $agent): NullValue|EnvironmentRecord;

    /**
     * @throws AbruptCompletion
     */
    public function hasBinding(Agent $agent, StringValue $n): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function createMutableBinding(Agent $agent, StringValue $n, BooleanValue $d): UnusedValue;

    /**
     * @throws AbruptCompletion
     */
    public function createImmutableBinding(Agent $agent, StringValue $n, BooleanValue $s): UnusedValue;

    /**
     * @throws AbruptCompletion
     */
    public function initializeBinding(Agent $agent, StringValue $n, LanguageValue $v): UnusedValue;

    /**
     * @throws AbruptCompletion
     */
    public function setMutableBinding(Agent $agent, StringValue $n, LanguageValue $v, BooleanValue $s): UnusedValue;

    /**
     * @throws AbruptCompletion
     */
    public function getBindingValue(Agent $agent, StringValue $n, BooleanValue $s): LanguageValue;

    /**
     * @throws AbruptCompletion
     */
    public function deleteBinding(Agent $agent, StringValue $n): BooleanValue;

    public function hasThisBinding(Agent $agent): BooleanValue;

    public function hasSuperBinding(Agent $agent): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function getThisBinding(Agent $agent): LanguageValue;

    public function withBaseObject(Agent $agent): ObjectValue|UndefinedValue;
}

<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface FunctionEnvironmentRecord extends DeclarativeEnvironmentRecord
{
    public function setThisValue(LanguageValue $value): void;

    public function getThisValue(): LanguageValue;

    /**
     * @param "uninitialized"|"initialized"|"lexical" $value
     */
    public function setThisBindingStatus(string $value): void;

    /**
     * @return "uninitialized"|"initialized"|"lexical"
     */
    public function getThisBindingStatus(): string;

    public function setFunctionObject(ObjectValue $value): void;

    public function getFunctionObject(): ObjectValue;

    public function setNewTarget(ObjectValue|UndefinedValue $value): void;

    public function getNewTarget(): ObjectValue|UndefinedValue;

    /**
     * @throws AbruptCompletion
     */
    public function bindThisValue(Agent $agent, LanguageValue $v): LanguageValue;

    /**
     * @throws AbruptCompletion
     */
    public function getThisBinding(Agent $agent): LanguageValue;

    /**
     * @throws AbruptCompletion
     */
    public function getSuperBase(Agent $agent): ObjectValue|NullValue|UndefinedValue;
}

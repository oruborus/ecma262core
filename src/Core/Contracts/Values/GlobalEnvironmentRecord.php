<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface GlobalEnvironmentRecord extends EnvironmentRecord
{
    /**
     * @throws AbruptCompletion
     */
    public function hasBinding(Agent $agent, StringValue $n): BooleanValue;

    public function setObjectRecord(ObjectEnvironmentRecord $value): void;

    public function getObjectRecord(): ObjectEnvironmentRecord;

    public function setGlobalThisValue(ObjectValue $value): void;

    public function getGlobalThisValue(): ObjectValue;

    public function setDeclarativeRecord(DeclarativeEnvironmentRecord $value): void;

    public function getDeclarativeRecord(): DeclarativeEnvironmentRecord;

    /**
     * @param ListValue<int, StringValue> $value
     */
    public function setVarNames(ListValue $value): void;

    /**
     * @return ListValue<int, StringValue>
     */
    public function getVarNames(Agent $agent): ListValue;

    public function getThisBinding(Agent $agent): ObjectValue;

    public function hasVarDeclaration(Agent $agent, StringValue $n): BooleanValue;

    public function hasLexicalDeclaration(Agent $agent, StringValue $n): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function hasRestrictedGlobalProperty(Agent $agent, StringValue $n): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function canDeclareGlobalVar(Agent $agent, StringValue $n): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function canDeclareGlobalFunction(Agent $agent, StringValue $n): BooleanValue;

    public function createGlobalVarBinding(Agent $agent, StringValue $n, BooleanValue $d): ?AbruptCompletion;

    public function createGlobalFunctionBinding(Agent $agent, StringValue $n, ObjectValue $v, BooleanValue $d): ?AbruptCompletion;
}

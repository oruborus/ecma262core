<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface GlobalEnvironmentRecord extends EnvironmentRecord
{
    /**
     * @throws AbruptCompletion
     */
    public function hasBinding(StringValue $n): BooleanValue;

    public function setObjectRecord(ObjectEnvironmentRecord $value): void;

    public function getObjectRecord(): ObjectEnvironmentRecord;

    public function setGlobalThisValue(ObjectValue $value): void;

    public function getGlobalThisValue(): ObjectValue;

    public function setDeclarativeRecord(DeclarativeEnvironmentRecord $value): void;

    public function getDeclarativeRecord(): DeclarativeEnvironmentRecord;

    /**
     * @param ListValue<StringValue> $value
     */
    public function setVarNames(ListValue $value): void;

    /**
     * @return ListValue<StringValue>
     */
    public function getVarNames(): ListValue;

    public function getThisBinding(): ObjectValue;

    public function hasVarDeclaration(StringValue $n): BooleanValue;

    public function hasLexicalDeclaration(StringValue $n): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function hasRestrictedGlobalProperty(StringValue $n): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function canDeclareGlobalVar(StringValue $n): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function canDeclareGlobalFunction(StringValue $n): BooleanValue;

    public function createGlobalVarBinding(StringValue $n, BooleanValue $d): ?AbruptCompletion;

    public function createGlobalFunctionBinding(StringValue $n, ObjectValue $v, BooleanValue $d): ?AbruptCompletion;
}

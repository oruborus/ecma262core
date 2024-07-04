<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\FieldName;

interface ObjectValue extends LanguageValue
{
    public function hasInternalSlot(FieldName $slot): bool;

    // FIXME: Define internal slot as getter/setter pairs
    public function setInternalSlot(FieldName $slot, mixed $value): void;

    public function getInternalSlot(FieldName $slot): mixed;

    public function setPropertyDescriptor(Agent $agent, StringValue|SymbolValue $propertyKey, PropertyDescriptor $propertyDescriptor): void;

    public function getPropertyDescriptor(Agent $agent, StringValue|SymbolValue $propertyKey): ?PropertyDescriptor;

    public function deletePropertyDescriptor(Agent $agent, StringValue|SymbolValue $propertyKey): void;

    /**
     * @return ListValue<StringValue|SymbolValue, PropertyDescriptor>
     */
    public function getAllPropertyDescriptors(): ListValue;

    /**
     * @throws AbruptCompletion
     */
    public function getPrototypeOf(Agent $agent): ObjectValue|NullValue;

    /**
     * @throws AbruptCompletion
     */
    public function setPrototypeOf(Agent $agent, ObjectValue|NullValue $v): LanguageValue;

    public function isExtensible(Agent $agent): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function preventExtensions(Agent $agent): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function getOwnProperty(Agent $agent, StringValue|SymbolValue $p): PropertyDescriptor|UndefinedValue;

    /**
     * @throws AbruptCompletion
     */
    public function defineOwnProperty(Agent $agent, StringValue|SymbolValue $p, PropertyDescriptor $desc): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function hasProperty(Agent $agent, StringValue|SymbolValue $p): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function get(Agent $agent, StringValue|SymbolValue $p, LanguageValue $receiver): LanguageValue;

    /**
     * @throws AbruptCompletion
     */
    public function set(Agent $agent, StringValue|SymbolValue $p, LanguageValue $v, LanguageValue $receiver): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function delete(Agent $agent, StringValue|SymbolValue $p): BooleanValue;

    /**
     * @return ListValue<int, StringValue|SymbolValue>
     * @throws AbruptCompletion
     */
    public function ownPropertyKeys(Agent $agent): ListValue;

    /**
     * @param ListValue<int, LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function call(Agent $agent, LanguageValue $thisArgument, ListValue $argumentsList): LanguageValue;

    /**
     * @param ListValue<int, LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function construct(Agent $agent, ListValue $argumentsList, UndefinedValue|ObjectValue $newTarget): LanguageValue;

    /**
     * @psalm-mutation-free
     */
    public function thisArgument(): LanguageValue;

    /**
     * @psalm-mutation-free
     */
    public function newTarget(): UndefinedValue|ObjectValue;

    public function prepareBuiltinCallOrConstruct(Agent $agent, LanguageValue $thisArgument, UndefinedValue|ObjectValue $newTarget): void;

    /**
     * @param ListValue<int, LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function builtinCall(Agent $agent, ListValue $argumentsList, LanguageValue $thisArgument): LanguageValue;

    /**
     * @param ListValue<int, LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function builtinConstruct(Agent $agent, ListValue $argumentsList, UndefinedValue|ObjectValue $newTarget): LanguageValue;
}

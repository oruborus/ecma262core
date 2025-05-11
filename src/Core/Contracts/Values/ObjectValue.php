<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Closure;
use Generator;
use Oru\EcmaScript\Core\Contracts\FieldName;

interface ObjectValue extends LanguageValue
{
    public function hasInternalSlot(FieldName $slot): bool;

    // FIXME: Define internal slot as getter/setter pairs
    public function setInternalSlot(FieldName $slot, mixed $value): void;

    public function getInternalSlot(FieldName $slot): mixed;

    public function setPropertyDescriptor(StringValue|SymbolValue $propertyKey, PropertyDescriptor $propertyDescriptor): void;

    public function getPropertyDescriptor(StringValue|SymbolValue $propertyKey): ?PropertyDescriptor;

    public function deletePropertyDescriptor(StringValue|SymbolValue $propertyKey): void;

    /** @return Generator<StringValue|SymbolValue, PropertyDescriptor> */
    public function getAllPropertyDescriptors(): Generator;

    /**
     * @throws AbruptCompletion
     */
    public function getPrototypeOf(): ObjectValue|NullValue;

    /**
     * @throws AbruptCompletion
     */
    public function setPrototypeOf(ObjectValue|NullValue $v): LanguageValue;

    public function isExtensible(): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function preventExtensions(): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function getOwnProperty(StringValue|SymbolValue $p): PropertyDescriptor|UndefinedValue;

    /**
     * @throws AbruptCompletion
     */
    public function defineOwnProperty(StringValue|SymbolValue $p, PropertyDescriptor $desc): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function hasProperty(StringValue|SymbolValue $p): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function get(StringValue|SymbolValue $p, LanguageValue $receiver): LanguageValue;

    /**
     * @throws AbruptCompletion
     */
    public function set(StringValue|SymbolValue $p, LanguageValue $v, LanguageValue $receiver): BooleanValue;

    /**
     * @throws AbruptCompletion
     */
    public function delete(StringValue|SymbolValue $p): BooleanValue;

    /**
     * @return ListValue<StringValue|SymbolValue>
     * @throws AbruptCompletion
     */
    public function ownPropertyKeys(): ListValue;

    /**
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function call(LanguageValue $thisArgument, ListValue $argumentsList): LanguageValue;

    /**
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function construct(ListValue $argumentsList, UndefinedValue|ObjectValue $newTarget): LanguageValue;

    /**
     * @psalm-mutation-free
     */
    public function thisArgument(): LanguageValue;

    /**
     * @psalm-mutation-free
     */
    public function newTarget(): UndefinedValue|ObjectValue;

    /**
     * @param Closure(LanguageValue...):LanguageValue $behaviour
     *
     * @throws RuntimeException
     */
    public function setBehaviour(Closure $behaviour): void;

    public function prepareBuiltinCallOrConstruct(LanguageValue $thisArgument, UndefinedValue|ObjectValue $newTarget): void;

    /**
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function builtinCall(ListValue $argumentsList, LanguageValue $thisArgument): LanguageValue;

    /**
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function builtinConstruct(ListValue $argumentsList, UndefinedValue|ObjectValue $newTarget): LanguageValue;
}

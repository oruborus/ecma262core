<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface PropertyDescriptor extends SpecificationValue
{
    public function isAccessorDescriptor(): BooleanValue;

    public function isDataDescriptor(): BooleanValue;

    public function isGenericDescriptor(): BooleanValue;

    public function fromPropertyDescriptor(): ObjectValue;

    public static function toPropertyDescriptor(ObjectValue $object): PropertyDescriptor;

    public function completePropertyDescriptor(): BooleanValue;

    public function hasValue(): bool;

    public function getValue(): LanguageValue;

    public function setValue(LanguageValue $value): void;

    public function hasGet(): bool;

    public function getGet(): ObjectValue|UndefinedValue;

    public function setGet(ObjectValue|UndefinedValue $value): void;

    public function hasSet(): bool;

    public function getSet(): ObjectValue|UndefinedValue;

    public function setSet(ObjectValue|UndefinedValue $value): void;

    public function hasWritable(): bool;

    public function getWritable(): BooleanValue;

    public function setWritable(BooleanValue $value): void;

    public function hasEnumerable(): bool;

    public function getEnumerable(): BooleanValue;

    public function setEnumerable(BooleanValue $value): void;

    public function hasConfigurable(): bool;

    public function getConfigurable(): BooleanValue;

    public function setConfigurable(BooleanValue $value): void;
}

<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface PropertyDescriptor extends SpecificationValue
{
    public function isAccessorDescriptor(Agent $agent): BooleanValue;

    public function isDataDescriptor(Agent $agent): BooleanValue;

    public function isGenericDescriptor(Agent $agent): BooleanValue;

    public function fromPropertyDescriptor(Agent $agent): ObjectValue;

    public static function toPropertyDescriptor(Agent $agent, ObjectValue $object): PropertyDescriptor;

    public function completePropertyDescriptor(Agent $agent): BooleanValue;

    public function hasValue(): bool;

    public function getValue(Agent $agent): LanguageValue;

    public function setValue(LanguageValue $value): void;

    public function hasGet(): bool;

    public function getGet(Agent $agent): ObjectValue|UndefinedValue;

    public function setGet(ObjectValue|UndefinedValue $value): void;

    public function hasSet(): bool;

    public function getSet(Agent $agent): ObjectValue|UndefinedValue;

    public function setSet(ObjectValue|UndefinedValue $value): void;

    public function hasWritable(): bool;

    public function getWritable(Agent $agent): BooleanValue;

    public function setWritable(BooleanValue $value): void;

    public function hasEnumerable(): bool;

    public function getEnumerable(Agent $agent): BooleanValue;

    public function setEnumerable(BooleanValue $value): void;

    public function hasConfigurable(): bool;

    public function getConfigurable(Agent $agent): BooleanValue;

    public function setConfigurable(BooleanValue $value): void;
}

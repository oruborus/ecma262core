<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface PropertyDescriptor extends SpecificationValue
{
    public LanguageValue $value { get; set; }
    public ObjectValue|UndefinedValue $get { get; set; }
    public ObjectValue|UndefinedValue $set { get; set; }
    public BooleanValue $writable { get; set; }
    public BooleanValue $enumerable { get; set; }
    public BooleanValue $configurable { get; set; }
}

<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface RegExpRecord extends SpecificationValue
{
    public BooleanValue $ignoreCase { get; }
    public BooleanValue $multiline { get; }
    public BooleanValue $dotAll { get; }
    public BooleanValue $unicode { get; }
    public BooleanValue $unicodeSets { get; }
    public NumberValue  $capturingGroupsCount { get; }
}

<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface PrivateEnvironmentRecord extends SpecificationValue
{
    public NullValue|PrivateEnvironmentRecord $outerPrivateEnvironment { get; }

    /** @property ListValue<PrivateName> */
    public ListValue $names { get; }
}

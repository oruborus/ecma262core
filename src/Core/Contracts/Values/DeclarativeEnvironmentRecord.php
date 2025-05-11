<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface DeclarativeEnvironmentRecord extends EnvironmentRecord
{
    public function hasBinding(StringValue $n): BooleanValue;
}

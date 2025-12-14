<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\PropertyDescriptors;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;

interface IsGenericDescriptor
{
    /** @see https://tc39.es/ecma262/#sec-isgenericdescriptor */
    public function __invoke(PropertyDescriptor $desc): BooleanValue;
}

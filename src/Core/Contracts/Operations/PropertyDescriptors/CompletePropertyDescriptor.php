<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\PropertyDescriptors;

use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface CompletePropertyDescriptor
{
    /** @see https://tc39.es/ecma262/#sec-completepropertydescriptor */
    public function __invoke(PropertyDescriptor $desc): UnusedValue;
}

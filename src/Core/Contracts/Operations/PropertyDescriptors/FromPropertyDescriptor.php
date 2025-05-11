<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\PropertyDescriptors;

use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface FromPropertyDescriptor
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-frompropertydescriptor
     */
    public function __invoke(UndefinedValue|PropertyDescriptor $desc): ObjectValue|UndefinedValue;
}

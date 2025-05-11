<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\PropertyDescriptors;

use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;

interface CompletePropertyDescriptor
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-completepropertydescriptor
     */
    public function __invoke(PropertyDescriptor $desc): PropertyDescriptor;
}

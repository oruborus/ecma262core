<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\PropertyDescriptors;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;

interface ToPropertyDescriptor
{
    /**
     * @see https://tc39.es/ecma262/#sec-topropertydescriptor
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $obj): PropertyDescriptor;
}

<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ProxyObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface ProxyCreate
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-proxycreate
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $target, LanguageValue $handler): ObjectValue;
}

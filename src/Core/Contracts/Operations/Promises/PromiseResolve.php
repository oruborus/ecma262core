<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Promises;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface PromiseResolve
{
    /**
     * @see https://tc39.es/ecma262/#sec-promise-resolve
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $c, LanguageValue $x): ObjectValue;
}

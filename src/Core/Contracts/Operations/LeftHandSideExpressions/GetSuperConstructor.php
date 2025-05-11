<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\LeftHandSideExpressions;

use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface GetSuperConstructor
{
    /**
     * @see https://tc39.es/ecma262/#sec-getsuperconstructor
     */
    public function __invoke(): LanguageValue;
}

<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface OrdinaryHasInstance
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-ordinaryhasinstance
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $c, LanguageValue $o): BooleanValue;
}

<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ExecutionContexts;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface ResolveThisBinding
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-resolvethisbinding
     *
     * @throws AbruptCompletion
     */
    public function __invoke(): LanguageValue;
}

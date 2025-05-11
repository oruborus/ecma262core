<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface RegExpExec
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-regexpexec
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $r, StringValue $s): ObjectValue|NullValue;
}

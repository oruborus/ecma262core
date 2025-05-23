<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SharedArrayBufferObjects;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface IsSharedArrayBuffer
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-issharedarraybuffer
     */
    public function __invoke(LanguageValue $obj): BooleanValue;
}

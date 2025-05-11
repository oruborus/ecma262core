<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface AsyncConciseBody extends ConciseBody
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-asyncconcisebodycontainsusestrict
     */
    public function asyncConciseBodyContainsUseStrict(): BooleanValue;
}

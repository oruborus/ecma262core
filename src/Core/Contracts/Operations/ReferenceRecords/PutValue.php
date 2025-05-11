<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ReferenceRecords;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;

interface PutValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-putvalue
     *
     * @psalm-assert ReferenceRecord $v
     * @psalm-assert LanguageValue $w
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ReferenceRecord|AbruptCompletion $v, LanguageValue|AbruptCompletion $w): LanguageValue;
}

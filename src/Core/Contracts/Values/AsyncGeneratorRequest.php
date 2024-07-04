<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface AsyncGeneratorRequest extends SpecificationValue
{
    public function completion(): null|LanguageValue|AbruptCompletion;

    public function capabiliy(): PromiseCapabilityRecord;
}

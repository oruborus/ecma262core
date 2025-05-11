<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AsyncGeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\GeneratorBrand;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface AsyncGeneratorEnqueue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-asyncgeneratorenqueue
     */
    public function __invoke(ObjectValue $generator, null|LanguageValue|AbruptCompletion $completion, GeneratorBrand $generatorBrand): ObjectValue;
}

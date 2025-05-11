<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AsyncGeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\GeneratorBrand;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface AsyncGeneratorValidate
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-asyncgeneratorvalidate
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $generator, GeneratorBrand $generatorBrand): UnusedValue;
}

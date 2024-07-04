<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

interface IsIDStart
{
    /**
     * NOTE: The spec demands he support of the latest version (15.0) of the Unicode Standard and ISO/IEC 10646.
     *       This can be achieved by using the `unicodeData` function. This is slow.
     *       A faster way is the use of `\IntlChar`.
     *       The used version of ICU in intl is 70.1 with unicode 14.0 and therefore spec conformance not guaranteed.
     *
     * @see https://262.ecma-international.org/12.0/#sec-conformance
     * @see https://www.php.net/manual/de/intro.intl.php
     * @see https://icu.unicode.org/
     */
    public function __invoke(int $codePoint): bool;
}

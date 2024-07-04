<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Errors;

use ReflectionClass;
use RuntimeException;

use function debug_backtrace;

use const DEBUG_BACKTRACE_IGNORE_ARGS;
use const DEBUG_BACKTRACE_PROVIDE_OBJECT;

final class Unimplemented extends RuntimeException
{
    public static function throw(): never
    {
        $trace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT | DEBUG_BACKTRACE_IGNORE_ARGS, 2)[1];

        if (isset($trace['class'])) {
            $class = (new ReflectionClass($trace['class']))->getShortName();
            throw new static("`{$class}::{$trace['function']}` is not implemented yet");
        }

        throw new static("`{$trace['function']}` is not implemented yet");
    }
}

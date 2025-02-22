<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

/**
 * @see https://tc39.es/ecma262/#sec-well-known-symbols
 */
enum WellKnownSymbol: string
{
    // A method that returns the default AsyncIterator for an object.
    // Called by the semantics of the for-await-of statement.
    case ＠＠asyncIterator      = 'Symbol.asyncIterator';

        // A method that determines if a constructor object recognizes an object as one of the constructor's instances.
        // Called by the semantics of the instanceof operator.
    case ＠＠hasInstance        = 'Symbol.hasInstance';

        // A Boolean valued property that if true indicates that an object should be flattened to its
        // array elements by Array.prototype.concat.
    case ＠＠isConcatSpreadable = 'Symbol.isConcatSpreadable';

        // A method that returns the default Iterator for an object.
        // Called by the semantics of the for-of statement.
    case ＠＠iterator           = 'Symbol.iterator';

        // A regular expression method that matches the regular expression against a string.
        // Called by the String.prototype.match method.
    case ＠＠match              = 'Symbol.match';

        // A regular expression method that returns an iterator,
        // that yields matches of the regular expression against a string.
        // Called by the String.prototype.matchAll method.
    case ＠＠matchAll           = 'Symbol.matchAll';

        // A regular expression method that replaces matched substrings of a string.
        // Called by the String.prototype.replace method.
    case ＠＠replace            = 'Symbol.replace';

        // A regular expression method that returns the index within a string that matches the regular expression.
        // Called by the String.prototype.search method.
    case ＠＠search             = 'Symbol.search';

        // A function valued property that is the constructor function that is used to create derived objects.
    case ＠＠species            = 'Symbol.species';

        // A regular expression method that splits a string at the indices that match the regular expression.
        // Called by the String.prototype.split method.
    case ＠＠split              = 'Symbol.split';

        // A method that converts an object to a corresponding primitive value.
        // Called by the ToPrimitive abstract operation.
    case ＠＠toPrimitive        = 'Symbol.toPrimitive';

        // A String valued property that is used in the creation of the default string description of an object.
        // Accessed by the built-in method Object.prototype.toString.
    case ＠＠toStringTag        = 'Symbol.toStringTag';

        // An object valued property whose own and inherited property names are property names that are excluded
        // from the with environment bindings of the associated object.
    case ＠＠unscopables        = 'Symbol.unscopables';
}

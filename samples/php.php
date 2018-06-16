<?php

namespace Vendor\Package;

use BarClass as Bar;
use FooInterface;
use OtherVendor\OtherPackage\BazClass;

class Foo extends Bar implements FooInterface
{
    public function sampleMethod($a, $b = null)
    {
        if ($a === $b && $b instanceof Bar) {
            bar();
        } elseif ($a > $b) {
            $foo->bar(42);
        } else {
            BazClass::bar('foo', $b);
        }
    }

    final public static function bar()
    {
        // method body
    }
}

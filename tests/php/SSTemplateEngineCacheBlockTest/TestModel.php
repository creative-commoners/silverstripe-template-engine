<?php

namespace SilverStripe\View\Tests\SSTemplateEngineCacheBlockTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class TestModel extends DataObject implements TestOnly
{
    private static $table_name = 'SSTemplateEngineCacheBlockTest_Model';

    public function Test($arg = null)
    {
        return $this;
    }

    public function Foo()
    {
        return 'Bar';
    }

    public function True()
    {
        return true;
    }

    public function False()
    {
        return false;
    }
}

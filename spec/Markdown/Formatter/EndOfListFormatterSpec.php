<?php

namespace spec\Markdown\Formatter;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EndOfListFormatterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Markdown\Formatter\EndOfListFormatter');
    }
}

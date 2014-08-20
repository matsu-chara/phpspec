<?php

namespace spec\Markdown;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StreamSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Markdown\Stream');
    }

    function it_has_no_next_line()
    {
        $this->getNextLine()->shouldReturn("");
    }
}

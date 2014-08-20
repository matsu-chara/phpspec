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

    function it_adds_a_end_of_list_to_markup(Stream $stream)
    {
        $stream->getNextLine()->willReturn("");
        $this->format(" * Hi,there", $stream)->shouldReturn("</li></ul>");
    }
}

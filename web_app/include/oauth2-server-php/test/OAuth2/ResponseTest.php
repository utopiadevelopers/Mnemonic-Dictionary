<?php

namespace OAuth2;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testRenderAsXml()
    {
        $response = new Response(array(
            'foo' => 'bar',
            'halland' => 'oates',
        ));

        $string = $response->getResponseBody('xml');
        $this->assertContains('<response><bar>foo</bar><oates>halland</oates></response>', $string);
    }
}

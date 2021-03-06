<?php

/*
 * This file is part of the XabbuhPandaClient package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\PandaClient\Tests\Transformer;

use Xabbuh\PandaClient\Transformer\EncodingTransformer;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class EncodingTransformerTest extends TransformerTest
{
    protected function setUp()
    {
        $this->transformer = new EncodingTransformer();

        parent::setUp();
    }

    public function testFromJSON()
    {
        $this->serializer
            ->expects($this->once())
            ->method('deserialize')
            ->with('foo', 'Encoding')
            ->will($this->returnValue('bar'));

        $this->assertEquals('bar', $this->transformer->stringToEncoding('foo'));
    }

    public function testFromJSONCollection()
    {
        $this->serializer
            ->expects($this->once())
            ->method('deserialize')
            ->with('foo', 'Encoding')
            ->will($this->returnValue('bar'));

        $this->assertEquals('bar', $this->transformer->stringToEncodingCollection('foo'));
    }
}

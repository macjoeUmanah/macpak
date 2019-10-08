<?php

namespace MacjoeUmanah\MacPak\Tests;

use PHPUnit\Framework\TestCase;
use MacjoeUmanah\MacPak\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes=new JokeFactory([

        	'This is a joke'

        ]);

        $joke=$jokes->getRandomJoke();


        $this->assertSame('This is a joke',$joke);
    }
}

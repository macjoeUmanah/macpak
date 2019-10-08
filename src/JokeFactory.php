<?php

namespace MacjoeUmanah\MacPak;

class JokeFactory
{

	protected $jokes=[];

	public function __construct(array $jokes=null){


		$this->jokes=$jokes;


	}
    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}

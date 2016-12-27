<?php
/**
 * PsySH sample
 * @see https://www.wikiee.com/piko/psysh
 */

namespace Zoo;

class Animal
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param  string  $name
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * get animal's name
     *
     * @return string
     */
    public function getName(): string
    {
        // breakpoint
        eval(\Psy\sh());

        return $this->name;
    }
}

echo (new Animal('cat'))->getName();

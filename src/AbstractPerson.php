<?php

abstract class AbstractPerson
{
    protected $surename;

    public function __construct(string $surename)
    {
        $this->surename = $surename;
    }

    abstract protected function getTitle();

    public function getNameAndTitle()
    {
        return $this->getTitle().' '.$this->surename;
    }
}

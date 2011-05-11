<?php

namespace Versionable\Zendesk\Tag;

class Tag implements TagInterface
{
    protected $name;

    protected $id;

    protected $count;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

    public function getCount()
    {
        return (int)$this->count;
    }
}
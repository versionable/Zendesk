<?php

namespace Versionable\Zendesk\Group;

class Group implements GroupInterface
{
    protected $name;

    protected $id;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return '<group>'.$this->id.'</group>';
    }
}
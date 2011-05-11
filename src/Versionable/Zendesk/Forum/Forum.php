<?php

namespace Versionable\Zendesk\Forum;

use Versionable\Zendesk\Forum\Entry\CollectionInterface as EntryCollectionInterface;

class Forum implements ForumInterface
{
    protected $name;

    protected $id;

    protected $description;

    protected $locked;

    protected $public;

    protected $posts;

    protected $entries;

    protected $visibility;

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

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setIsLocked($locked)
    {
        $this->locked = $locked;
    }

    public function getIsLocked(){
        return (bool)$this->locked;
    }

    public function setIsPublic($public)
    {
        $this->public = $public;
    }

    public function getIsPublic()
    {
        return (bool)$this->public;
    }

    public function setEntries(EntryCollectionInterface $entries)
    {
        $this->entries = $entries;
    }

    public function getEntries()
    {
        return $this->entries;
    }

    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }
}
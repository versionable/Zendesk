<?php

namespace Versionable\Zendesk\Organization;

class Collection implements CollectionInterface, \Iterator, \SeekableIterator, \Countable, \ArrayAccess
{
    protected $organizations = array();

    protected $position = 0;

    public function has($name)
    {
        return isset($this->organizations[$name]);
    }

    public function get($name)
    {
        if ($this->has($name)) {
            return $this->organizations[$name];
        }

        return false;
    }

    public function add(OrganizationInterface $organization)
    {
        $this->organizations[$organization->getName()] = $organization;
    }

    public function remove($name)
    {
        if ($this->has($name)) {
            unset($this->organizations[$name]);

            return true;
        }

        return false;
    }

    public function rewind()
    {
        $this->setPosition(0);

        return reset($this->organizations);
    }

    public function next()
    {
        $pos = $this->getPostion();
        $this->setPosition(--$pos);

        return next($this->organizations);
    }

    public function current()
    {
        return current($this->organizations);
    }

    public function key()
    {
        return key($this->organizations);
    }

    public function valid()
    {
        return $this->current() !== false;
    }

    public function count()
    {
        return count($this->organizations);
    }

    public function seek($position)
    {
        if (isset($this->organizations[$position])) {
            return $this->organizations[$position];
        }

        return false;
    }

    public function offsetSet($offset, $value)
    {
        $this->organizations[$offset] = $value;
    }

    public function offsetExists($offset)
    {
        return isset($this->organizations[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->organizations[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->seek($offset);
    }

    protected function setPosition($position)
    {
        $this->position = (int)$position;
    }

    protected function getPostion()
    {
        return $this->position;
    }

    public function toArray()
    { }
}
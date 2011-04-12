<?php

namespace Versionable\Zendesk\Group;

class Collection implements CollectionInterface, \Iterator, \SeekableIterator, \Countable, \ArrayAccess
{
    protected $groups = array();

    protected $position = 0;

    public function has($name)
    {

    }

    public function get()
    {
        return $this->groups;
    }

    public function add(GroupInterface $group)
    {
        $this->groups[$group->getName()] = $group;
    }

    public function remove($name)
    {
        if ($this->has($name)) {
            unset($this->groups[$name]);

            return true;
        }

        return false;
    }

    public function rewind()
    {
        $this->setPosition(0);

        return reset($this->groups);
    }

    public function next()
    {
        $pos = $this->getPostion();
        $this->setPosition(--$pos);

        return next($this->groups);
    }

    public function current()
    {
        return current($this->groups);
    }

    public function key()
    {
        return key($this->groups);
    }

    public function valid()
    {
        return $this->current() !== false;
    }

    public function count()
    {
        return count($this->groups);
    }

    public function seek($position)
    {
        if (isset($this->groups[$position])) {
            return $this->groups[$position];
        }

        return false;
    }

    public function offsetSet($offset, $value)
    {
        $this->groups[$offset] = $value;
    }

    public function offsetExists($offset)
    {
        return isset($this->groups[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->groups[$offset]);
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
    {
        $groups = array();

        foreach ($this->groups as $group) {
            $groups[] = array(
                'id'   => $group->getId(),
                'name' => $group->getName(),
            );
        }

        return $groups;
    }

    public function __toString()
    {
        $groups = "<groups type='array'>";
        foreach ($this->groups as $group) {
            $groups .= $group->__toString();
        }
        $groups .= "</groups>";

        return $groups;
    }
}
<?php

namespace Versionable\Zendesk\Forum;

class Collection implements CollectionInterface, \Iterator, \SeekableIterator, \Countable, \ArrayAccess
{
    protected $forums = array();

    protected $position = 0;

    public function has($name)
    {
        return isset($this->forums[$name]);
    }

    public function get($name)
    {
        if ($this->has($name)) {
            return $this->forums[$name];
        }

        return false;
    }

    public function add(ForumInterface $forum)
    {
        $this->forums[$forum->getName()] = $forum;
    }

    public function remove($name)
    {
        if ($this->has($name)) {
            unset($this->forums[$name]);

            return true;
        }

        return false;
    }

    public function rewind()
    {
        $this->setPosition(0);

        return reset($this->forums);
    }

    public function next()
    {
        $pos = $this->getPostion();
        $this->setPosition(--$pos);

        return next($this->forums);
    }

    public function current()
    {
        return current($this->forums);
    }

    public function key()
    {
        return key($this->forums);
    }

    public function valid()
    {
        return $this->current() !== false;
    }

    public function count()
    {
        return count($this->forums);
    }

    public function seek($position)
    {
        if (isset($this->forums[$position])) {
            return $this->forums[$position];
        }

        return false;
    }

    public function offsetSet($offset, $value)
    {
        $this->forums[$offset] = $value;
    }

    public function offsetExists($offset)
    {
        return isset($this->forums[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->forums[$offset]);
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
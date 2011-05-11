<?php

namespace Versionable\Zendesk\Forum\Entry;

class Collection implements CollectionInterface, \Iterator, \SeekableIterator, \Countable, \ArrayAccess
{
    protected $entries = array();

    protected $position = 0;

    public function has($name)
    {
        return isset($this->entries[$name]);
    }

    public function get($name)
    {
        if ($this->has($name)) {
            return $this->entries[$name];
        }

        return false;
    }

    public function add(EntryInterface $entry)
    {
        $this->entries[$entry->getTitle()] = $entry;
    }

    public function remove($name)
    {
        if ($this->has($name)) {
            unset($this->entries[$name]);

            return true;
        }

        return false;
    }

    public function rewind()
    {
        $this->setPosition(0);

        return reset($this->entries);
    }

    public function next()
    {
        $pos = $this->getPostion();
        $this->setPosition(--$pos);

        return next($this->entries);
    }

    public function current()
    {
        return current($this->entries);
    }

    public function key()
    {
        return key($this->entries);
    }

    public function valid()
    {
        return $this->current() !== false;
    }

    public function count()
    {
        return count($this->entries);
    }

    public function seek($position)
    {
        if (isset($this->entries[$position])) {
            return $this->entries[$position];
        }

        return false;
    }

    public function offsetSet($offset, $value)
    {
        $this->entries[$offset] = $value;
    }

    public function offsetExists($offset)
    {
        return isset($this->entries[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->entries[$offset]);
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
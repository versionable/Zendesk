<?php

namespace Versionable\Zendesk\Tag;

class Collection implements CollectionInterface, \Iterator, \SeekableIterator, \Countable, \ArrayAccess
{
    protected $tags = array();

    protected $position = 0;

    public function has($name)
    {
        return isset($this->tags[$name]);
    }

    public function get($name)
    {
        if ($this->has($name)) {
            return $this->tags[$name];
        }

        return false;
    }

    public function add(TagInterface $tag)
    {
        $this->tags[$tag->getName()] = $tag;
    }

    public function remove($name)
    {
        if ($this->has($name)) {
            unset($this->tags[$name]);

            return true;
        }

        return false;
    }

    public function rewind()
    {
        $this->setPosition(0);

        return reset($this->tags);
    }

    public function next()
    {
        $pos = $this->getPostion();
        $this->setPosition(--$pos);

        return next($this->tags);
    }

    public function current()
    {
        return current($this->tags);
    }

    public function key()
    {
        return key($this->tags);
    }

    public function valid()
    {
        return $this->current() !== false;
    }

    public function count()
    {
        return count($this->tags);
    }

    public function seek($position)
    {
        if (isset($this->tags[$position])) {
            return $this->tags[$position];
        }

        return false;
    }

    public function offsetSet($offset, $value)
    {
        $this->tags[$offset] = $value;
    }

    public function offsetExists($offset)
    {
        return isset($this->tags[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->tags[$offset]);
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
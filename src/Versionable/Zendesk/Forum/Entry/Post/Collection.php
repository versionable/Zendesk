<?php

namespace Versionable\Zendesk\Forum\Entry\Post;

class Collection implements CollectionInterface, \Iterator, \SeekableIterator, \Countable, \ArrayAccess
{
    protected $posts = array();

    protected $position = 0;

    public function has($name)
    {
        return isset($this->posts[$name]);
    }

    public function get($name)
    {
        if ($this->has($name)) {
            return $this->posts[$name];
        }

        return false;
    }

    public function add(PostInterface $post)
    {
        $this->posts[$post->getId()] = $post;
    }

    public function remove($name)
    {
        if ($this->has($name)) {
            unset($this->posts[$name]);

            return true;
        }

        return false;
    }

    public function rewind()
    {
        $this->setPosition(0);

        return reset($this->posts);
    }

    public function next()
    {
        $pos = $this->getPostion();
        $this->setPosition(--$pos);

        return next($this->posts);
    }

    public function current()
    {
        return current($this->posts);
    }

    public function key()
    {
        return key($this->posts);
    }

    public function valid()
    {
        return $this->current() !== false;
    }

    public function count()
    {
        return count($this->posts);
    }

    public function seek($position)
    {
        if (isset($this->posts[$position])) {
            return $this->posts[$position];
        }

        return false;
    }

    public function offsetSet($offset, $value)
    {
        $this->posts[$offset] = $value;
    }

    public function offsetExists($offset)
    {
        return isset($this->posts[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->posts[$offset]);
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
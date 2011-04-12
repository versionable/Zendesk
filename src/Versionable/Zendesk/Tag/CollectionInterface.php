<?php

namespace Versionable\Zendesk\Tag;

interface CollectionInterface
{
    public function add(TagInterface $tag);

    public function remove($name);

    public function get($name);

    public function has($name);

    public function toArray();
}
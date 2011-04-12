<?php

namespace Versionable\Zendesk\Forum\Entry;

interface CollectionInterface
{
    public function add(EntryInterface $entry);

    public function remove($name);

    public function get($name);

    public function has($name);

    public function toArray();
}
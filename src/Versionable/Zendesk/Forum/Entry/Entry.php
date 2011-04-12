<?php

namespace Versionable\Zendesk\Forum\Entry;

use Versionable\Zendesk\Forum\Entry\Post\CollectionInterface as PostCollectionInterface;

class Entry implements EntryInterface
{
    protected $id;

    protected $forum_id;

    protected $title;

    protected $body;

    protected $created_at;

    protected $updated_at;

    protected $hits;

    protected $posts;

    protected $locked;

    protected $pinned;

    protected $public;

    protected $submitter_id;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getForumId()
    {
        return $this->forum_id;
    }

    public function setForumId($forum_id)
    {
        $this->forum_id = $forum_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function getHits()
    {
        return $this->hits;
    }

    public function setHits($hits)
    {
        $this->hits = $hits;
    }

    public function getPosts()
    {
        return $this->posts;
    }

    public function setPosts(PostCollectionInterface $posts)
    {
        $this->posts = $posts;
    }

    public function getIsLocked()
    {
        return (bool)$this->locked;
    }

    public function setIsLocked($locked)
    {
        $this->locked = $locked;
    }

    public function getIsPinned()
    {
        return (bool)$this->pinned;
    }

    public function setIsPinned($pinned)
    {
        $this->pinned = $pinned;
    }

    public function getIsPublic()
    {
        return (bool)$this->public;
    }

    public function setIsPublic($public)
    {
        $this->public = $public;
    }

    public function getSubmitterId()
    {
        return $this->submitter_id;
    }

    public function setSubmitterId($submitter_id)
    {
        $this->submitter_id = $submitter_id;
    }
}
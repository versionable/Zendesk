<?php

namespace Versionable\Zendesk\Forum\Entry\Post;

class Post implements PostInterface
{
    protected $id;

    protected $forum_id;

    protected $entry_id;

    protected $body;

    protected $created_at;

    protected $updated_at;

    protected $account_id;

    protected $informative;

    protected $user_id;

    public function __construct($body)
    {
        $this->body = $body;
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

    public function getAccountId()
    {
        return $this->title;
    }

    public function setAccountId($account_id)
    {
        $this->account_id = $account_id;
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

    public function getEntryId()
    {
        return $this->entry_id;
    }

    public function setEntryId($entry_id)
    {
        $this->entry_id = $entry_id;
    }

    public function getIsinformative()
    {
        return (bool)$this->informative;
    }

    public function setIsInformative($informative)
    {
        $this->informative = $informative;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}
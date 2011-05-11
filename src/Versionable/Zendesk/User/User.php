<?php

namespace Versionable\Zendesk\User;

class User
{
    protected $role;

    protected $email;

    protected $name;

    protected $roles;

    protected $restriction_id;

    protected $groups;

    public function __construct()
    {
        $this->role = 0;
        $this->restriction_id = 1;
    }

    public function getRole() {
        return $this->role;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getName() {
        return $this->name;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function getRestriction_id() {
        return $this->restriction_id;
    }

    public function getGroups() {
        return $this->groups;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setRoles($roles) {
        $this->roles = $roles;
    }

    public function setRestriction_id($restriction_id) {
        $this->restriction_id = $restriction_id;
    }

    public function setGroups($groups) {
        $this->groups = $groups;
    }

    public function toArray()
    {
        return array(
            'user' => array(
                'email'                 => $this->email,
                'name'                  => $this->name,
                'roles'                 => $this->role,
                'restriction-id'        => $this->restriction_id,
                'groups type=\'array\'' => $this->groups->toArray()
            )
        );
    }

    public function __toString()
    {
        $user = <<<EOF
<user>
    <email>{$this->email}</email>
    <name>{$this->name}</name>
    <roles>{$this->role}</roles>
    <restriction-id>{$this->restriction_id}</restriction-id>
    {$this->groups}
</user>
EOF;

        return $user;
    }
}
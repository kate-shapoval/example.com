<?php
// src/UserRole.php
/**
 * @Entity @Table(name="user_roles")
 **/
class UserRole
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;

    public function getIdRole()
    {
        return $this->id;
    }

    public function getNameRole()
    {
        return $this->name;
    }

    public function setNameRole($name)
    {
        $this->name = $name;
    }
}
?>
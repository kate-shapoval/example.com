<?php
require_once(DEV_ROOT_PATH.'application/data_base/Db.php');
/**
 * @Entity @Table(name="user_roles")
 **/
class UserRole extends DB
{
    /* Name of Table*/
    protected $table = "user_roles";
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
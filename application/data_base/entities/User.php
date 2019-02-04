<?php
require_once(DEV_ROOT_PATH.'application/data_base/Db.php');
/**
 * @Entity @Table(name="users")
 **/
class User extends DB
{
    /* Name of Table*/
    protected $table = "users";
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;
 /** @Column(type="string") **/
    protected $email;
     /** @Column(type="string") **/
    protected $login;
     /** @Column(type="string") **/
    protected $password;
    /**
    * @ManyToOne(targetEntity="UserRole", inversedBy="id")
    **/
    protected $id_role_fk;

    public function getIdUser()
    {
        return $this->id;
    }

    public function getNameUser()
    {
        return $this->name;
    }

    public function setNameUser($name)
    {
        $this->name = $name;
    }
    public function getEmailUser()
    {
        return $this->email;
    }

    public function setEmailUser($email)
    {
        $this->email = $email;
    }
    public function getLoginUser()
    {
        return $this->login;
    }

    public function setLoginUser($login)
    {
        $this->login = $login;
    }
    public function getPasswordUser()
    {
        return $this->password;
    }

    public function setPasswordUser($password)
    {
        $this->password = $password;
    }
    public function getIdRoleForUser()
    {
        return $this->id_role_fk;
    }
    public function setIdRoleForUser($id_role_fk)
    {
        $this->id_role_fk = $id_role_fk;
    }
}
?>
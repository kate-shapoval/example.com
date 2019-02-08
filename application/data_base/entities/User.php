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
    private $id;
    /**
    * @ManyToOne(targetEntity="UserRole", inversedBy="id")
    **/
    private $id_role_fk;
    /** @Column(type="string") **/
    private $name;
 /** @Column(type="string") **/
    private $email;
     /** @Column(type="string") **/
    private $login;
     /** @Column(type="string") **/
    private $password;
    
    public function getId()
    {
        return $this->id;
    }
    public function getIdRoleFk()
    {
        return $this->id_role_fk;
    }
    public function setIdRoleFk($id_role_fk)
    {
        $this->id_role_fk = $id_role_fk;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
?>
<?php
require_once(DEV_ROOT_PATH.'application/data_base/Db.php');
/**
 * @Entity @Table(name="visit_event")
 **/
class VisitEvent extends DB
{
    /* Name of Table*/
    protected $table = "visit_event";
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /**@ManyToOne(targetEntity="Event", inversedBy="id") **/
    protected $id_event_fk;
 /** @ManyToOne(targetEntity="User", inversedBy="id") **/
    protected $id_user_fk;
     /** @Column(type="datetime") **/
    protected $time_reminder;
     /** @Column(type="datetime") **/
   

    public function getIdEvent()
    {
        return $this->id;
    }

    public function getIdEvent()
    {
        return $this->id_event_fk;
    }

    public function setIdEvent($id_event_fk)
    {
        $this->id_event_fk = $id_event_fk;
    }
    public function getIdAuthorEvent()
    {
        return $this->id_user_fk;
    }

    public function getIdAuthorEvent($id_user_fk)
    {
        $this->id_user_fk = $id_user_fk;
    }
    public function getTimeReminder()
    {
        return $this->time_reminder;
    }

    public function setTimeReminder($time_reminder)
    {
        $this->time_reminder = $time_reminder;
    }
}
?>
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
    /** @Column(type="integer") **/
    protected $id_event_fg;
 /** @ManyToOne(targetEntity="User", inversedBy="id") **/
    protected $id_user_fg;
     /** @Column(type="datetime") **/
    protected $time_reminder;
     /** @Column(type="datetime") **/
   

    public function getIdEvent()
    {
        return $this->id;
    }

    public function getIdEvent()
    {
        return $this->id_event_fg;
    }

    public function setIdEvent($id_event_fg)
    {
        $this->id_event_fg = $id_event_fg;
    }
    public function getIdAuthorEvent()
    {
        return $this->id_user_fg;
    }

    public function getIdAuthorEvent($id_user_fg)
    {
        $this->id_user_fg = $id_user_fg;
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
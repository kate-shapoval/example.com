<?php
require_once(DEV_ROOT_PATH.'application/data_base/Db.php');
/**
 * @Entity @Table(name="events")
 **/
class Event extends DB
{
    /* Name of Table*/
    protected $table = "events";
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /**@ManyToOne(targetEntity="User", inversedBy="id") **/
    private $id_author_fk;
    /** @Column(type="string") **/
    private $title;
    /** @Column(type="text") **/
    private $short_content;
     /** @Column(type="text") **/
    private $content;
     /** @Column(type="datetime") **/
    private $start_event;
    /** @Column(type="datetime") **/
    private $stop_event;
    /** @Column(type="string") **/
    private $alias;
      /** @Column(type="string") **/
    private $preview;

    public function getId()
    {
        return $this->id;
    }
    public function getIdAuthorFk()
    {
        return $this->id_author_fk;
    }
    public function setIdAuthorFk($id_author_fk)
    {
        $this->id_author_fk = $id_author_fk;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getShortContent()
    {
        return $this->short_content;
    }

    public function setShortContent($short_content)
    {
        $this->short_content = $short_content;
    }
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getStartEvent()
    {
        return $this->start_event;
    }

    public function setStartEvent($start_event)
    {
        $this->start_event = $start_event;
    }

    public function getStopEvent()
    {
        return $this->stop_event;
    }

    public function setStopEvent($stop_event)
    {
        $this->stop_event = $stop_event;
    }

    public function getAlias()
    {
        return $this->alias;
    }

    public function setAlias($alias)
    {
        $this->alias = $alias;
    }
    public function getPreview()
    {
        return $this->preview;
    }

    public function setPreview($preview)
    {
        $this->preview = $preview;
    }
}
?>
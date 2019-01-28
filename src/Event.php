<?php
// src/Event.php
/**
 * @Entity @Table(name="events")
 **/
class Event
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $title;
 /** @Column(type="text") **/
    protected $short_content;
     /** @Column(type="text") **/
    protected $content;
     /** @Column(type="datetime") **/
    protected $start_event;
    /** @Column(type="datetime") **/
    protected $stop_event;
       /**
    * @ManyToOne(targetEntity="User", inversedBy="id")
    **/
    protected $id_author;
      /** @Column(type="string") **/
    protected $tag;
      /** @Column(type="string") **/
    protected $preview;

    public function getIdEvent()
    {
        return $this->id;
    }

    public function getTitleEvent()
    {
        return $this->title;
    }

    public function setTitleEvent($title)
    {
        $this->title = $title;
    }
    public function getShortContentEvent()
    {
        return $this->short_content;
    }

    public function setShortContentEvent($short_content)
    {
        $this->short_content = $short_content;
    }
    public function getContentEvent()
    {
        return $this->content;
    }

    public function setContentEvent($content)
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

    public function getTagEvent()
    {
        return $this->tag;
    }

    public function setTagEvent($tag)
    {
        $this->tag = $tag;
    }
    public function getPreviewEvent()
    {
        return $this->preview;
    }

    public function setPreviewEvent($preview)
    {
        $this->preview = $preview;
    }
    public function getIdAuthorEvent()
    {
        return $this->id_author;
    }
}
?>
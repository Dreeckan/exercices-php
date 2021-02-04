<?php
namespace Component;

class GraphicCard extends AbstractComponent
{
    protected $rtx;

    public function getRtx()
    {
        return $this->rtx;
    }
    public function setRtx($r)
    {
        $this->rtx = $r;
    }
    public function jsonSerialize()
    {
        $return = parent::jsonSerialize();
        $return['Rtx'] = $this->getRtx();
        return $return;
    }
    /**
     * @var string
     */
    protected $type = self::class;

    
    /**
     * Get the value of type
     *
     * @return  string
     */
    public function getType()
    {
        return $this->type;
    }
    public function setType($s)
    {
        $this->type = $s;
        return $this;
    }
}

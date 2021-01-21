<?php

namespace Device;


class Keyboard extends AbstractDevice
{

     /**
      * @var string
      */

     protected $format = "";

     /**
      * Get the value of format
      */
     public function getFormat()
     {
          return $this->format;
     }

     /**
      * Set the value of format
      *
      * @return  self
      */
     public function setFormat($format)
     {
          $this->format = $format;

          return $this;
     }

     public function jsonSerialize()
     {
          $tab = parent::jsonSerialize();
          $tab['format'] = $this->getFormat();
          return $tab;
     }
}

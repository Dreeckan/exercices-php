<?php

namespace Validator;

use Component\CPU;
use Component\GPU;
use Component\MotherBoard;
use Component\RAM;
use Computer\Computer;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;
use Interfaces\ValidatorInterface;

class ComputerValidator implements ValidatorInterface
{
    /**
     * @var string
     */
    
    protected $computer;


    
    public function validate(Computer $computer): bool
    {
        $components = $computer->getComponents();
        $devices = $computer->getDevices();
        $gpui = 0;
        $cpui = 0;
        $rami = 0;
        $motherBoardi = 0;

        foreach ($components as $component) {
            if ($component instanceof GPU) {
                $gpui++;
            }
            if ($component instanceof CPU) {
                $cpui++;
            }

            if ($component instanceof RAM) {
                $rami++;
            }
            if ($component instanceof MotherBoard) {
                $motherBoardi++;
            }
        };

        $keyboardi = 0;
        $mousei = 0;
        $speakeri = 0;

        foreach ($devices as $device) {
            if ($device instanceof Keyboard) {
                $keyboardi++;
            };
            if ($device instanceof Mouse) {
                $mousei++;
            };

            if ($device instanceof Speaker) {
                $speakeri++;
            };
        }

        if ($gpui == 1 && $cpui == 1 && $rami == 1 && $motherBoardi == 1 && $keyboardi == 1 && $mousei == 1 && ($speakeri == 0 || $speakeri == 1)) {
            return $this->computer = true;
        };

        return $this->computer = false;
    }
};

<?php

namespace Validator;

use Component\Cpu;
use Component\GraphicCard;
use Component\MotherBoard;
use Component\Ram;
use Computer;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;
use Interfaces\ValidatorInterface;

class ComputerValidator implements ValidatorInterface
{
    public function validate(Computer $computer): bool
    {
        $components = $computer->getComponents();
        $countMb = 0;
        $countCpu = 0;
        $countGraphC = 0;
        $countRam = 0;
        $devices = $computer->getDevices();
        $countKeyB = 0;
        $countMouse = 0;
        $countSpeaker = 0;
        
        foreach ($components as $component) {
            if ($component instanceof MotherBoard) {
                $countMb++;
            }
            if ($component instanceof Cpu) {
                $countCpu++;
            }
            if ($component instanceof GraphicCard) {
                $countGraphC++;
            }
            if ($component instanceof Ram) {
                $countRam++;
            }
        }
        foreach ($devices as $device) {
            if ($device instanceof Keyboard) {
                $countKeyB++;
            }
            if ($device instanceof Mouse) {
                $countMouse++;
            }
            if ($device instanceof Speaker) {
                $countSpeaker++;
            }
        }
        var_dump($devices, $components);
        if ($countMb === 1 && $countCpu === 1 && ($countGraphC === 1 ||  $countGraphC === 0) && $countRam === 1 && $countKeyB === 1 && $countMouse === 1 && ($countSpeaker === 1 || $countSpeaker === 0)) {
            return true;
        }
        /*if ($countMb != 1 || $countCpu != 1 || $countGraphC > 1 || $countRam != 1 || $countKeyB != 1 || $countMouse != 1 || $countSpeaker > 1) {
            return false;
        }*/

        return true;
    }
}

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
        $nbMb = 0;
        $nbRam = 0;
        $nbCpu = 0;
        $nbGc = 0;


        foreach ($computer->getComponents() as $values) {
            if ($values instanceof MotherBoard) {
                $nbMb ++;
            }
            if ($values instanceof Ram) {
                $nbRam ++;
            }
            if ($values instanceof Cpu) {
                $nbCpu++;
            }
            if ($values instanceof GraphicCard) {
                $nbGc ++;
            }
        }
        
        $nbKb = 0;
        $nbMouse = 0;
        $nbSpeaker = 0;

        foreach ($computer->getDevices() as $values) {
            if ($values instanceof Keyboard) {
                $nbKb ++;
            }
            if ($values instanceof Mouse) {
                $nbMouse ++;
            }
            if ($values instanceof Speaker) {
                $nbSpeaker ++;
            }
        }
        if ($nbMb === 1 && $nbRam === 1 && $nbCpu === 1 && $nbGc >= 0 && $nbGc < 2 && $nbKb === 1 && $nbMouse === 1 && $nbSpeaker >=0 && $nbSpeaker < 2) {
            return true;
        } else {
            return false;
        }
    }
}

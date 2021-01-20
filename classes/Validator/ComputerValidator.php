<?php 

namespace Validator;

use Component\Cpu as Cpu;
use Component\Ram as Ram;
use Component\MotherBoard as MotherBoard;
use Component\GraphicCard as GraphicCard;
use Device\Mouse as Mouse;
use Device\Keyboard as Keyboard;
use Device\Speaker as Speaker;
use Interfaces\ValidatorInterface;
use Computer;

class ComputerValidator implements ValidatorInterface
{
    public function validate(Computer $computer): bool
    {
        $nbCm = 0;
        $nbCpu = 0;
        $nbRam = 0;
        $nbCg = 0;

        foreach ($computer->getComponents() as $values) {
            if ($values instanceof MotherBoard) { 
                $nbCm++;
            }
            if ($values instanceof Cpu) { 
                $nbCpu++;
            }
            if ($values instanceof Ram) { 
                $nbRam++;
            }
            if ($values instanceof GraphicCard) { 
                $nbCg++;
            }
        }

        $nbMouse = 0;
        $nbKeyboard = 0;
        $nbSpeaker = 0;

        foreach ($computer->getDevices() as $values) {
            if ($values instanceof Mouse) { 
                $nbMouse++;
            }
            if ($values instanceof Keyboard) { 
                $nbKeyboard++;
            }
            if ($values instanceof Speaker) { 
                $nbSpeaker++;
            }
        }

        if ($nbCm === 1 && $nbCpu === 1 && $nbRam === 1 && $nbCg >=0 && $nbCg <2 && $nbMouse === 1 && $nbKeyboard === 1 && $nbSpeaker >=0 && $nbSpeaker <2) {
            return true;
        } else {
            return false;
        }
    }
}
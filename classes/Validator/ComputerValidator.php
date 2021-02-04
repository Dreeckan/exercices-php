<?php
namespace Validator;

use Interfaces\ValidatorInterface;
use Component\MotherBoard;
use Component\Cpu;
use Component\GraphicCard;
use Component\Ram;
use Computer\Computer;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;

class ComputerValidator implements ValidatorInterface
{
    public function validate(Computer $computer): bool
    {
        $motherBoard = 0;
        $cpu = 0;
        $graphicCard = 0;
        $ram = 0;
        $keyboard = 0;
        $mouse = 0;
        $speaker = 0;
        foreach ($computer->getComponents() as $component) {
            if ($component instanceof MotherBoard) {
                $motherBoard++;
            }
            if ($component instanceof Cpu) {
                $cpu++;
            }
            if ($component instanceof Ram) {
                $ram++;
            }
            if ($component instanceof GraphicCard) {
                $graphicCard++;
            }
        }
        if ($motherBoard < 1 || $cpu < 1 || $ram < 1 || $graphicCard < 1) {
            return false;
        } else {
            return true;
        }

        foreach ($computer->getDevices() as $component) {
            if ($component instanceof Keyboard) {
                $keyboard++;
            }
            if ($component instanceof Mouse) {
                $mouse++;
            }
            if ($component instanceof Speaker) {
                $speaker++;
            }
        }
        if ($keyboard < 1 || $mouse < 1 || $speaker < 1) {
            return false;
        } else {
            return true;
        }
    }
}

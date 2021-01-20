<?php
namespace Validator;

use Component\Cpu;
use Component\GraphicCard;
use Component\MotherBoard;
use Component\Ram;
use Computer\Computer;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;
use Interfaces\ValidatorInterface;

class ComputerValidator implements ValidatorInterface
{
    public function validate(Computer $computer): bool
    {
        $cpu = 0;
        $graphicCard = 0;
        $motherBoard = 0;
        $ram = 0;
        $keyboard = 0;
        $mouse = 0;
        $speaker = 0;

        foreach ($computer->getComponents() as $value) {
            if ($value instanceof Cpu) {
                $cpu++;
            }

            if ($value instanceof GraphicCard) {
                $graphicCard++;
            }

            if ($value instanceof MotherBoard) {
                $motherBoard++;
            }

            if ($value instanceof Ram) {
                $ram++;
            }
        }

        foreach ($computer->getDevices() as $value) {
            if ($value instanceof Keyboard) {
                $keyboard++;
            }

            if ($value instanceof Mouse) {
                $mouse++;
            }
            
            if ($value instanceof Speaker) {
                $speaker++;
            }
        }

        if ($cpu != 1 || $motherBoard != 1 || $graphicCard != 1 || $ram !=1 || $keyboard != 1 || $mouse != 1 || $speaker != 1) {
            return false;
        } else {
            return true;
        }
    }
}

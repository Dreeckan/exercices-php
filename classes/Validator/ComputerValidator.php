<?php

namespace Validator;

use Component\Cpu;
use Component\MotherBoard;
use Component\Ram;
use Device\Keyboard;
use Device\Mouse;
use Computer\AbstractComputer;
use Interfaces\ValidatorInterface;

class ComputerValidator implements ValidatorInterface
{
    public function validate(AbstractComputer $computer): bool
    {
        $iCpu = 0;
        $iMotherboard = 0;
        $iRam = 0;
        $iKeyboard = 0;
        $iMouse = 0;

        foreach ($computer->getComponents() as $value) {
            if ($value instanceof Cpu) {
                $iCpu++;
            }

            if ($value instanceof Motherboard) {
                $iMotherboard++;
            }

            if ($value instanceof Ram) {
                $iRam++;
            }
        }

        foreach ($computer->getDevices() as $value) {
            if ($value instanceof Keyboard) {
                $iKeyboard++;
            }

            if ($value instanceof Mouse) {
                $iMouse++;
            }
        }
        if ($iCpu < 1 || $iMotherboard < 1 || $iRam < 1 || $iKeyboard < 1 || $iMouse < 1) {
            return false;
        } else {
            return true;
        }
    }
}

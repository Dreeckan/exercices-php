<?php

namespace Validator;

use Component\Cpu;
use Component\GraphiCard;
use Component\Motherboard;
use Component\Ram;
use Interfaces\ValidatorInterface;
use Computer;
use Device\Keyboard;

class ComputerValidator implements ValidatorInterface
{

    public function validate(Computer $computer): bool
    {
        $iCpu = 0;
        $iMotherboard = 0;
        $iGraphiCard = 0;
        $iRam = 0;
        $iKeyboard = 0;

        foreach ($computer->getComponents() as $value) {
            if ($value instanceof Cpu) {
                $iCpu++;
            }


            if ($value instanceof Motherboard) {
                $iMotherboard++;
            }
            if ($value instanceof GraphiCard) {
                $iGraphiCard++;
            }

            if ($value instanceof Ram) {
                $iRam++;
            }
        }

        foreach ($computer->getDevices() as $value) {
            if ($value instanceof Keyboard) {
                $iKeyboard++;
            }
        }
        if ($iCpu < 1 || $iMotherboard < 1 || $iRam < 1 || $iKeyboard < 1) {
            return false;
        } else {
            return true;
        }
    }
}

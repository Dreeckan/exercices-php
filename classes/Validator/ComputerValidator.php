<?php

namespace Validator;

use Component\Ram;
use Component\Cpu;
use Component\GraphicCard;
use Component\MotherBoard;
use Interfaces\ValidatorInterface;
use Computer;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;

class ComputerValidator implements ValidatorInterface
{
    public function validate(Computer $computer): bool
    {
        $components = $computer->getComponents();
        $devices = $computer->getDevices();
        $compteurCpu = 0;
        $compteurMotherBoard = 0;
        $compteurGraphicCard = 0;
        $compteurRam = 0;
        $compteurKeyboard = 0;
        $compteurMouse = 0;
        $compteurSpeaker = 0;
        foreach ($components as $component) {
            if ($component instanceof Cpu) {
                $compteurCpu++;
            }
            if ($component instanceof MotherBoard) {
                $compteurMotherBoard++;
            }
            if ($component instanceof GraphicCard) {
                $compteurGraphicCard++;
            }
            if ($component instanceof Ram) {
                $compteurRam++;
            }
        }
        foreach ($devices as $device) {
            if ($device instanceof Keyboard) {
                $compteurKeyboard++;
            }
            if ($device instanceof Mouse) {
                $compteurMouse++;
            }
            if ($device instanceof Speaker) {
                $compteurSpeaker++;
            }
        }
        if ($compteurMotherBoard == 1 && $compteurRam == 1 && $compteurCpu == 1 && $compteurKeyboard == 1 && $compteurMouse == 1 && $compteurSpeaker == 1) {
            return true;
        } else {
            return false;
        }
    }
}

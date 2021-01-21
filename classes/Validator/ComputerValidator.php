<?php

namespace Validator;

use Component\Cpu;
use Component\MotherBoard;
use Component\Ram;
use Component\GraphicCard;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;
use Computer\AbstractComputer;
use Interfaces\ValidatorInterface;

class ComputerValidator implements ValidatorInterface
{
    public function validate(AbstractComputer $computer): bool
    {
        // On récupère la liste des composants de notre objet computer
        $components = $computer->getComponents();
        // On récupère la liste des périphériques de notre objet computer
        $devices = $computer->getDevices();

        // On va compter le nombre de nos différents composants et périphériques possibles
        $countCpu = 0;
        $countGraphicCard = 0;
        $countMotherBoard = 0;
        $countRam = 0;
        $countKeyboard = 0;
        $countMouse = 0;
        $countSpeaker = 0;
        $countErrors = 0; // On va aussi compter ceux qui sont carrément invalide (ni un composant, ni un périphérique)

        // On parcourt les composants et selon le type, on incrémente une variable différente
        foreach ($components as $component) {
            // Ici, on se sert de instanceof pour vérifier si l'objet $component est une instance de l'un de nos types
            // et qu'il est compatible avec le type d'ordinateur saisi
            if ($component->isCompatibleWith(get_class($computer))) {
                if ($component instanceof Cpu) {
                    $countCpu++;// équivalent à $countCpu = $countCpu + 1;
                } elseif ($component instanceof GraphicCard) {
                    $countGraphicCard++;
                } elseif ($component instanceof MotherBoard) {
                    $countMotherBoard++;
                } elseif ($component instanceof Ram) {
                    $countRam++;
                } else {
                    $countErrors++;
                }
            }
        }

        // On répète l'opération pour les périphériques
        foreach ($devices as $device) {
            if ($device->isCompatibleWith(get_class($computer))) {
                if ($device instanceof Keyboard) {
                    $countKeyboard++;
                } elseif ($device instanceof Mouse) {
                    $countMouse++;
                } elseif ($device instanceof Speaker) {
                    $countSpeaker++;
                } else {
                    $countErrors++;
                }
            }
        }

        if ($countErrors == 0 && $countCpu == 1 && $countMotherBoard == 1 && $countRam == 1 && $countGraphicCard <= 1 && $countKeyboard == 1 && $countMouse == 1 && $countSpeaker <= 1) {
            return true;
        }
        return false;
    }
}

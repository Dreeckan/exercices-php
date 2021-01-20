<?php

namespace Validator;

use Component\Cpu;
use Component\GraphicCard;
use Component\MotherBoard;
use Component\Ram;
use Interfaces\ValidatorInterface;
use Computer;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;

class ComputerValidator implements ValidatorInterface {

    public function validate(Computer $computer): bool
    {
       $components = $computer->getComponents();
       
       $carteGraphique = 0;
       $ram = 0;
       $cpu = 0;
       $carteMere = 0;
       
       $devices = $computer->getDevices();
       $keyboard = 0;
       $mouse = 0;
       $speaker = 0;

        foreach ($components as $component) {
            if ($component instanceof GraphicCard) {
             $carteGraphique++;
                
            }
            if ($component instanceof Ram) {
             $ram++;
                
            }
            if ($component instanceof Cpu) {
             $cpu++;
                
            }
            if ($component instanceof MotherBoard) {
             $carteMere++;
            
            }
        
        }
        foreach ($devices as $device) {
            if ($device instanceof Keyboard) {
             $keyboard++;
                
            }
            if ($device instanceof Mouse) {
             $mouse++;
                
            }
            if ($device instanceof Speaker) {
             $speaker++;
                
            }
            
        
        }
        if ($carteGraphique < 2 && $ram == 1 && $cpu == 1 && $carteMere == 1 ) {
        return true;
        }else {
        return false;
        }
        if ($keyboard < 2 && $mouse == 1 && $speaker == 1) {
        return true;
        }else {
        return false;
        }
    }   
}
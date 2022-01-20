<?php

class ValidatePassword {

        const MIN_LENGHT = 6;
        const MAX_LENGHT = 20;

        public function validLenght($pass)
        {
            $plen = strlen($pass);
            return $plen >= self::MIN_LENGHT && $plen <= self::MAX_LENGHT;
        }        
}

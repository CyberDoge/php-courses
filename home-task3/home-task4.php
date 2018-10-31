<?php
function dec2binInteger(int $decimalInt)
{
    $neg = $decimalInt < 0;
    $decimalInt = abs($decimalInt);
    $bin = '';
    while ($decimalInt != 0) {
        $bin = ($decimalInt % 2) . $bin;
        $decimalInt = $decimalInt / 2;
    }
    if ($neg) {
        $bin = '-' . $bin;
    }

    return $bin;
}
$randomInt = rand();
echo decbin($randomInt);
echo "\n";
echo dec2binInteger($randomInt);


// украдено из https://ru.stackoverflow.com/questions/484607/Как-в-при-помощи-php-перевести-из-одной-системы-счисления-в-другую
function entier_from_decimal(&$entier, $base){
    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";    // алфавит 36 символов
    $digit = bcmod($entier, $base);         // остаток      
    $entier = bcdiv($entier, $base);        // частное
    if(empty($entier)){                     // если частное нулевое
        return $chars[$digit];              // процесс закончен
    }else{                                  // иначе - рекурсивный вызов + цифра
        return entier_from_decimal($entier, $base, $scale) . $chars[$digit];
    } 
}   
function frac_from_decimal(&$frac, $base, $scale = 0){
    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";    // алфавит 36 символов
    if($scale == 0){                        // если дробная часть не нужна
        return "";                          // возвращаем пустую строку
    }                                       
    $len_frac = strlen($frac);              // запомнили длину  
    $frac = bcmul($frac, $base);            // умножили дробную часть на основание
    $digit = 0;                             // по умолчанию цифра нуль
    if(strlen($frac) > $len_frac){              // если произведение длиннее, то 
        $digit = $frac[0];                      // вырезаем первую цифру
        $frac = substr($frac, 1, $len_frac);    // и новая дробная часть - без неё
    }elseif(strlen($frac) < $len_frac){         // а если короче, то
        $frac = str_pad($frac, $len_frac, "0"); // дополняем нулями спереди     
    }

    return $chars[$digit] . frac_from_decimal($frac, $base, $scale-1);
}

function big_from_decimal($dec, $base, $scale = 0){
    if(substr($dec,0,1) == "+"){    // учёт знака "+"
        $dec = substr($dec,1,strlen($dec)-1);
        return "+".big_from_decimal($dec, $base, $scale);           
    } 
    if(substr($dec,0,1) == "-"){    // учёт знака "-"
        $dec = substr($dec,1,strlen($dec)-1);
        return "-".big_from_decimal($dec, $base, $scale);
    } 
    $frac = strstr($dec,".");       // дробная часть с точкой
    if(($frac==false) || (($len_frac = strlen($frac))<2)){
        return entier_from_decimal($dec, $base);
    }
    $frac = substr($frac, 1 , $len_frac -1);                // удаление точки
    $entier = substr($dec, 0, strlen($dec)- $len_frac);     // целая часть
    return entier_from_decimal($entier, $base). "."         // конкатенация
        .frac_from_decimal($frac, $base, $scale);           // результатов
}

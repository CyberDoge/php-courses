<?php
    function main(float $temperature, float $temperatureYesterday, float $temperatureTomorrow, bool $isRained, string $annCall)
    {
        if ($temperature < 13 && $temperatureTomorrow > 12  &&  $temperatureYesterday  > 12) {
            //написать "одень" было в задание. grammar nazi не бейте меня
            echo "одень шапку";
        }
        if ($temperatureTomorrow < 11 && $temperatureYesterday < 11) {
            echo "одень зимнюю шапку.";
        }

        if ($annCall === "холодно" || $annCall === "заморозки" || $annCall === "замерзла") {
            echo " ты хорошо оделся? ";
            if ($isRained) {
                echo " и возьми с собой зонтик";
                if ($temperature >= $temperatureTomorrow + 3) {
                    echo " и шарф";
                }
            }
            if ($temperatureYesterday > $temperature && $temperature >= $temperatureTomorrow + 5) {
                echo "\n\033[01;31m ты не пройдешь! \033[0m";
            }
        }
    }
    function FunctionName(Type $var = null) : bool
    {
        # code...
    }

main(2, 5, -4, true, "холодно");

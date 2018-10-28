<?php
    function main(float $temperature, float $temperature_yesterday, float $temperature_tomorrow, bool $is_rained, string $ann_call)
    {
        if ($temperature < 13 && $temperature_tomorrow > 12  &&  $temperature_yesterday  > 12) {
            //написать "одень" было в задание. grammar nazi не бейте меня
            echo "одень шапку";
        }
        if ($temperature_tomorrow < 11 && $temperature_yesterday < 11) {
            echo "одень зимнюю шапку.";
        }

        if ($ann_call === "холодно" || $ann_call === "заморозки" || $ann_call === "замерзла") {
            echo " ты хорошо оделся? ";
            if ($is_rained) {
                echo " и возьми с собой зонтик";
                if ($temperature >= $temperature_tomorrow + 3) {
                    echo " и шарф";
                }
            }
            if ($temperature_yesterday > $temperature && $temperature >= $temperature_tomorrow + 5) {
                echo "\n\033[01;31m ты не пройдешь! \033[0m";
            }
        }
    }

main(2, 5, -4, true, "холодно");

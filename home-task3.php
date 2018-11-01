<?php
function main(float $temperature, float $temperatureYesterday, float $temperatureTomorrow, bool $isRained, string $annCall)
{
    if ($temperature < 13) {
        //написать "одень" было в задание. grammar nazi не бейте меня
        if ($temperatureTomorrow > 11 && $temperatureYesterday > 11) {
            echo "одень шапку";
        } elseif ($temperatureTomorrow < 11 && $temperatureYesterday < 11) {
            echo "одень зимнюю шапку.";
        }
    }

    if (checkIfTemperatureDecreased($temperature, $temperatureYesterday, $temperatureTomorrow) || checkAnnCall($annCall)) {
        if (checkExtraCold($temperature, $temperatureTomorrow)) {
            echo "\n\033[01;31m ты не пройдешь! \033[0m";
            exit;
        }
        echo " ты хорошо оделся? ";

        if (checkExtraCold($temperature, $temperatureTomorrow, 3)) {
            echo " и шарф";
        }

    }
    if ($isRained) {
        echo " и возьми с собой зонтик";
    }
}

function checkIfTemperatureDecreased(float $temperature, float $temperatureYesterday, float $temperatureTomorrow): bool
{
    return $temperatureYesterday > $temperature && $temperature > $temperatureTomorrow;
}
function checkAnnCall(string $annCall): bool
{
    return $annCall === "холодно" || $annCall === "заморозки" || $annCall === "замерзла";
}
function checkExtraCold(float $temperature, float $temperatureNextDay, int $different = 5): bool
{
    return $temperature >= $temperatureNextDay + $different;
}

main(11, 12, 8, false, "холодно");

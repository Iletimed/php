<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
        <body>
            <?php

            //Рекурсия факториала

            function fact($x){
                if ($x<2){
                    return $x;
                } else {
                    return $x * fact($x-1);
                }
            }
            echo fact(5);

            //Рекурсия Фибоначчи

            function fibonacci($n)
            {
                if ($n < 3) {
                    return 1;
                }
                else {
                    return fibonacci($n-1) + fibonacci($n-2);
                }
            }
            echo "<br>";
            echo fibonacci(8);
            echo "<br>";

            //bank высчитывание сложного процента за срок в месяцах.

            function bank($srok, $summ, $prc)
            {
                if(is_int($srok) && $srok >= 1){
                    return ($summ * pow(1+$prc, $srok/12));
                } else {
                    return "как бы, что-то не то";
                }
            }
            echo bank(-1, 1000, .15) . "<br>";

//            Дата и месяц

            function data($day, $month)
            {
                $mes = " ";
                if ($day >= 1 && $day <= 31 && is_int($day)) {
                    if ($month >= 1 && $month <= 12 && is_int($month)) {
                        switch ($month) {
                            case 1:
                                $mes = "января";
                                break;
                            case 2:
                                $mes = "февраля";
                                break;
                            case 3:
                                $mes = "марта";
                                break;
                            case 4:
                                $mes = "апреля";
                                break;
                            case 5:
                                $mes = "мая";
                                break;
                            case 6:
                                $mes = "июня";
                                break;
                            case 7:
                                $mes = "июля";
                                break;
                            case 8:
                                $mes = "августа";
                                break;
                            case 9:
                                $mes = "сентября";
                                break;
                            case 10:
                                $mes = "откября";
                                break;
                            case 11:
                                $mes = "ноября";
                                break;
                            case 12:
                                $mes = "декабря";
                                break;
                        }
                    } else {
                        $month = "Неверно указаны данные в ".' $month '.", укажите целое числовое значение от 1 до 12";
                        return $month;
                    }
                } else {
                    $day = "Неверно указаные данные в".' $day '.", укажите целое числовое значение от 1 до 31";
                    return $day;
                }
                $result = $day. " " .$mes;
                return $result;
            }
            echo data(1, 1);
            ?>
        </body>
</html>
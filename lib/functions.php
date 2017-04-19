<?php
// форматирование данных (для заявки)
function clearData($data, $type="s"){
    switch ($type) {
        case "s":
            $data = trim(strip_tags($data));
            break;
        case "i":
            $data = abs((int)$data);
            break;
        default:
            echo "Ошибка в преобразовании";
            break;
    }
    return $data;
}

// определение названия файла без формата
function returnFileName($str){
    return str_replace(".php", "", $str);
}

// получение текста из файла для страницы
function getContentPage($link){
    $content = nl2br(file_get_contents($_SERVER['DOCUMENT_ROOT']."/content/".$link.".txt"));
    return $content;
}

// расчет коэфиициентов

function rateAge($age, $prava, $arrayAge){
    foreach ($arrayAge as $value){
        $age_sign = $value['age_sign'];
        $prava_sign = $value['exp_sign'];
        $age_norm = $value['age'];
        $prava_norm = $value['exp'];

        $str = "return ($age $age_sign $age_norm) && ($prava $prava_sign $prava_norm);";

        if (eval($str))
            return floatval($value['rate']);
    }

    return 0;
}

function rateCity($city, $arrayCity){
    foreach ($arrayCity as $value){
        if ($city == $value['city'])
            return floatval($value['rate']);
    }

    return 0;
}

function rateDateRate($date_rate, $arrayDateRate){
    foreach ($arrayDateRate as $value){
        if ($date_rate == $value['name_rate'])
            return floatval($value['rate']);
    }

    return 0;
}

function rateHp($hp, $arrayHp){
    foreach ($arrayHp as $value){
        if ($hp >= $value['min_hp'] && $hp <= $value['max_hp'])
            return floatval($value['rate']);
    }

    return 0;
}

function rateInsurance($insurance, $arrayInsurance){
    foreach ($arrayInsurance as $value){
        if ($insurance == $value['ins_type'])
            return floatval($value['rate']);
    }

    return 0;
}

// end расчет коэфиициентов

// минимальная сумма пакета услуг

function findCategory($category, $arrayCategory){
    foreach ($arrayCategory as $value){
        if ($category == $value['category'])
            return $value['min_price'];
    }

    return 0;
}


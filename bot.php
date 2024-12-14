<?php

require_once('simplevk-master/autoload.php');
use DigitalStar\vk_api\VK_api as vk_api; // Основной класс


const VK_KEY = "vk1.a.cdIZPUZHJWzFCf2t0yMQ54IuipEVXmyJoU3_L5Oy7g8wPdHLhcfbcKL-Hy7mBjdS3yKel-aTl9pKx72dAtk1cScuf84lfFLEBEWqU79bCHMaO0_ltxsS0a2hteC0rF29X5fGe-bE679qO8wdk88dzoN_Xe_LnMBZGUL7-RZHlQ9L_iR4nHuC56nu7TO8QXloaRCAL5x0dR-BLpnyS2_Wbw";  // Токен сообщества
const ACCESS_KEY = "9eb9c712";  // Тот самый ключ из сообщества
const VERSION = "5.126"; // Версия API VK


$vk = vk_api::create(VK_KEY, VERSION)->setConfirm(ACCESS_KEY);

$vk->initVars($peer_id, $message, $payload, $vk_id, $type, $data); // Инициализация переменных
// ====== Наши переменные ============
$id = $data->object->from_id;
$peer_id = $data->object->peer_id; // Узнаем ID пользователя, кто написал нам
$message = $data->object->text; // Само сообщение от пользователя
// ====== *************** ============

if ($data->type == 'message_new') {

    if ($message == '!бот') {
            $vk->sendMessage($peer_id, "Привет :-)");
        }

   }
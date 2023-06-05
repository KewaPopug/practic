<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
        <p>
            Если у вас есть деловые запросы или другие вопросы, пожалуйста, заполните следующую форму, чтобы связаться с нами. Спасибо.
        </p>


        <p>
            Адрес: Кабинет 207, Главный учебный корпус КарТУ
            пр. Нурсултана Назарбаева 56, г. Караганда, 100026, Казахстан

            Тел: 8 (7212) 56-75-97, вн.2000
        </p>
</div>

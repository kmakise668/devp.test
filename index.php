<?

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>
<?php
\Bitrix\Main\UI\Extension::load("ui.vue3");
?>
<div id="app">
    <counter-component></counter-component>
</div>



<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
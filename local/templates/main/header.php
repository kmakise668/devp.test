<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>

    <?php $APPLICATION->ShowHead() ?>
    <?php CJSCore::Init() ?>
    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/local/classes/Util/Assets.php');

    use Local\Util\Assets;

    $assetManager = new Assets();
    ?>

    <link rel="stylesheet" href="<?= $assetManager->getEntry('global.css') ?>">


</head>

<body class="page dark page_<?= LANGUAGE_ID ?> page_<?php $APPLICATION->ShowProperty('page_type', 'secondary') ?>">
    <?php $APPLICATION->ShowPanel() ?>


    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__top">
                    <nav class="header__nav">
                        <? $APPLICATION->SetTitle("Новая страница"); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "main-menu",
                            array(
                                "COMPONENT_TEMPLATE" => "main-menu",
                                "ROOT_MENU_TYPE" => "topmenu",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "top-menu",
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        ); ?>
                    </nav>
                    <div class="address">Lorem ipsum dolor sit amet.</div>
                    <div class="social">
                        <a href="#">vk</a>
                        <a href="#">vk</a>
                        <a href="#">vk</a>
                    </div>
                </div>
                <div class="header__bottom">
                    <div class="header__contacts">
                        <span class="time">ПН-ПТ: c 9:00 до 19:00</span>
                        <a href="tel:+7 (467) 154-74-99">7 (467) 154-74-99</a>
                    </div>
                    <div class="call-btn">Заказать звонок</div>
                    <form class="search-form">
                        <input type="text" placeholder="Поиск по сайту">
                    </form>
                    <div class="header__cart">
                        Ваша Корзина
                        <div class="price">40 000 руб.</div>
                    </div>
                    <button-counter></button-counter>

                </div>
            </div>
        </div>
    </header>


    <main>
        <section class="page__content">
            <?php if ($APPLICATION->GetCurPage(false) != SITE_DIR) : ?>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "",
                    array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                    )
                ); ?>
                <h1 class="page__title"><?php $APPLICATION->ShowTitle(false) ?></h1>
            <?php endif; ?>

            <div id="app"></div>
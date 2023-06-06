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
                    <div class="info">
                        <span class="time">ПН-ПТ: c 9:00 до 19:00</span>
                        <a href="tel:+7 (467) 154-74-99">7 (467) 154-74-99</a>
                    </div>
                    <div class="call-btn">Заказать звонок</div>
                </div>

                <? $APPLICATION->IncludeComponent(
                    "bitrix:search.title",
                    "",
                    array(
                        "SHOW_INPUT" => "Y",
                        "INPUT_ID" => "title-search-input",
                        "CONTAINER_ID" => "title-search",
                        "PRICE_CODE" => array("BASE", "RETAIL"),
                        "PRICE_VAT_INCLUDE" => "Y",
                        "PREVIEW_TRUNCATE_LEN" => "150",
                        "SHOW_PREVIEW" => "Y",
                        "PREVIEW_WIDTH" => "75",
                        "PREVIEW_HEIGHT" => "75",
                        "CONVERT_CURRENCY" => "Y",
                        "CURRENCY_ID" => "RUB",
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "NUM_CATEGORIES" => "3",
                        "TOP_COUNT" => "10",
                        "ORDER" => "date",
                        "USE_LANGUAGE_GUESS" => "Y",
                        "CHECK_DATES" => "Y",
                        "SHOW_OTHERS" => "Y",
                        "CATEGORY_0_TITLE" => "Новости",
                        "CATEGORY_0" => array("iblock_news"),
                        "CATEGORY_0_iblock_news" => array("all"),
                        "CATEGORY_1_TITLE" => "Форумы",
                        "CATEGORY_1" => array("forum"),
                        "CATEGORY_1_forum" => array("all"),
                        "CATEGORY_2_TITLE" => "Каталоги",
                        "CATEGORY_2" => array("iblock_books"),
                        "CATEGORY_2_iblock_books" => "all",
                        "CATEGORY_OTHERS_TITLE" => "Прочее"
                    )
                ); ?>

                <div class="header__cart">
                    Ваша Корзина
                    <div class="price">40 000 руб.</div>
                </div>
                <button-counter></button-counter>

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
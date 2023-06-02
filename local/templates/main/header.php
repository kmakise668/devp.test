<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>

    <?php $APPLICATION->ShowHead() ?>
    <?php
    // local/templates/your_template/header.php
    use Bitrix\Main\Page\Asset;


    ?>
    <?php CJSCore::Init() ?>

    <?php

    require_once($_SERVER['DOCUMENT_ROOT'] . '/local/classes/Util/Assets.php');

    use Local\Util\Assets;

    $assetManager = new Assets();
    ?>

    <link rel="stylesheet" href="<?= $assetManager->getEntry('global.css') ?>">


</head>

<body class="page page_<?= LANGUAGE_ID ?> page_<?php $APPLICATION->ShowProperty('page_type', 'secondary') ?>">
    <?php $APPLICATION->ShowPanel() ?>

    <div class="page__top">
        <header class="header">
            <div class="header__inner">
                <nav class="header__nav">
                    <? $APPLICATION->SetTitle("Новая страница"); ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "main-menu",
                        array(
                            "COMPONENT_TEMPLATE" => "main-menu",
                            "ROOT_MENU_TYPE" => "top-menu",
                            "MENU_CACHE_TYPE" => "N",
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
                <button class="btn primary send-btn" color="primary"><span class="text">Применить</span></button>
                <div class="vue-component" data-component="DemoApp" data-initial='{"test": "data"}'>vdfvdfbdf</div>


            </div>
        </header>

        <main class="page__middle">

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
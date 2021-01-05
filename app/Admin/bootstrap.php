<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:33:02
 * @LastEditTime: 2021-01-05 18:20:52
 * @LastEditors: your name
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\bootstrap.php
 */

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

Encore\Admin\Form::forget(['editor']);

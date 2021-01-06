<?php
/*
 * @Author: your name
 * @Date: 2021-01-06 14:29:59
 * @LastEditTime: 2021-01-06 14:48:48
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\Controllers\BasicConfigController.php
 */

namespace App\Admin\Controllers;

use App\BasicConfig;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BasicConfigController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '基础配置';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BasicConfig());

        // $grid->column('id', __('Id'));
        $grid->column('config_item', __('Config item'));
        $grid->column('contents', __('Contents'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(BasicConfig::findOrFail($id));

        // $show->field('id', __('Id'));
        $show->field('config_item', __('Config item'));
        $show->field('contents', __('Contents'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BasicConfig());

        $form->text('config_item', __('Config item'));
        $form->text('contents', __('Contents'));

        return $form;
    }
}

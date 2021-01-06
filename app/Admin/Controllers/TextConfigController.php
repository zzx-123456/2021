<?php
/*
 * @Author: your name
 * @Date: 2021-01-06 14:29:27
 * @LastEditTime: 2021-01-06 14:51:58
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\Controllers\TextConfigController.php
 */

namespace App\Admin\Controllers;

use App\TextConfig;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TextConfigController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '文本配置';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TextConfig());

        // $grid->column('id', __('Id'));
        $grid->column('text_item', __('Text item'));
        $grid->column('update_at', __('Update at'));
        // $grid->column('contents', __('Contents'));

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
        $show = new Show(TextConfig::findOrFail($id));

        // $show->field('id', __('Id'));
        $show->field('text_item', __('Text item'));
        $show->field('update_at', __('Update at'));
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
        $form = new Form(new TextConfig());

        $form->text('text_item', __('Text item'));
        $form->datetime('update_at', __('Update at'))->default(date('Y-m-d H:i:s'));
        $form->textarea('contents', __('Contents'));

        return $form;
    }
}

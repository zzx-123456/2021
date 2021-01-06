<?php
/*
 * @Author: your name
 * @Date: 2021-01-06 14:30:47
 * @LastEditTime: 2021-01-06 14:41:20
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\Controllers\ServiceTimeController.php
 */

namespace App\Admin\Controllers;

use App\ServiceTime;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ServiceTimeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '运营时间';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ServiceTime());

        // $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('start_time', __('Start time'));
        $grid->column('end_time', __('End time'));

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
        $show = new Show(ServiceTime::findOrFail($id));

        // $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('start_time', __('Start time'));
        $show->field('end_time', __('End time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ServiceTime());

        $form->text('title', __('Title'));
        $form->datetime('start_time', __('Start time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('end_time', __('End time'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}

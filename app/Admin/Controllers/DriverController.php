<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:52:51
 * @LastEditTime: 2021-01-04 10:36:34
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\Controllers\DriverController.php
 */

namespace App\Admin\Controllers;

use App\Driver;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DriverController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '安全员';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Driver());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('number', __('Number'));
        // $grid->column('password', __('Password'));
        $grid->column('phone', __('Phone'));
        $grid->column('manage_car', __('Manage car'));
        $grid->column('add_time', __('Add time'));
        // $grid->column('remember_token', __('Remember token'));
        $grid->column('num_state', __('Num state'))->switch();

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
        $show = new Show(Driver::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('number', __('Number'));
        $show->field('password', __('Password'));
        $show->field('phone', __('Phone'));
        $show->field('manage_car', __('Manage car'));
        $show->field('add_time', __('Add time'));
        // $show->field('remember_token', __('Remember token'));
        $show->field('num_state', __('Num state'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Driver());

        $form->text('name', __('Name'));
        $form->text('number', __('Number'));
        $form->password('password', __('Password'));
        $form->mobile('phone', __('Phone'));
        $form->text('manage_car', __('Manage car'));
        // $form->datetime('add_time', __('Add time'))->default(date('Y-m-d H:i:s'));
        // $form->text('remember_token', __('Remember token'));
        $form->text('num_state', __('Num state'))->default('1');

        return $form;
    }
}

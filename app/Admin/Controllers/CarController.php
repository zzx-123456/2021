<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:53:03
 * @LastEditTime: 2021-01-03 14:19:05
 * @LastEditors: your name
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\Controllers\CarController.php
 */

namespace App\Admin\Controllers;

use App\Car;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CarController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '车辆';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Car());

        $grid->column('id', __('Id'));
        $grid->column('order_num', __('Order num'));
        $grid->column('plate_num', __('Plate num'));
        $grid->column('color', __('Color'));
        $grid->column('type', __('Type'));
        $grid->column('car_state', __('Car state'));
        $grid->column('use_state', __('Use state'));
        $grid->column('seat_num', __('Seat num'));
        $grid->column('add_time', __('Add time'));

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
        $show = new Show(Car::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('order_num', __('Order num'));
        $show->field('plate_num', __('Plate num'));
        $show->field('color', __('Color'));
        $show->field('type', __('Type'));
        $show->field('car_state', __('Car state'));
        $show->field('use_state', __('Use state'));
        $show->field('seat_num', __('Seat num'));
        $show->field('add_time', __('Add time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Car());

        $form->text('order_num', __('Order num'));
        $form->text('plate_num', __('Plate num'));
        $form->color('color', __('Color'));
        $form->text('type', __('Type'));
        $form->text('car_state', __('Car state'))->default('2');
        $form->text('use_state', __('Use state'))->default('2');
        $form->text('seat_num', __('Seat num'));
        $form->datetime('add_time', __('Add time'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}

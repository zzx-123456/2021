<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:53:03
 * @LastEditTime: 2021-01-05 20:21:31
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\Controllers\CarController.php
 */

namespace App\Admin\Controllers;

use App\Car;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Post\Detail;

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
        $grid->column('car_num', __('Car num'));
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
        $show->field('car_num', __('Car num'));
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

        $form->text('car_num', __('Car num'));
        $form->text('plate_num', __('Plate num'));
        $form->text('color', __('Color'));
        $form->radioButton('type', __('Type'))->options([
            '小型汽车' => '小型汽车',
            '中型汽车' => '中型汽车',
            '大型汽车' => '大型汽车',
            ]);
        $form->radioButton('car_state', __('Car state'))->options([
            '正常' => '正常',
            '故障' => '故障',
            ]);
        $form->radioButton('use_state', __('Use state'))->options([
            '闲置' => '闲置',
            '约车使用中' => '约车使用中',
            ]);
        $form->text('seat_num', __('Seat num'));
        $form->datetime('add_time', __('Add time'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}

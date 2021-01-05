<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:53:10
 * @LastEditTime: 2021-01-05 23:30:56
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\Controllers\OrderController.php
 */

namespace App\Admin\Controllers;

use App\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '订单';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('Id'));
        $grid->column('order_num', __('Order num'));
        $grid->column('plate_num', __('Plate num'));
        $grid->column('user', __('User'));
        $grid->column('station_up', __('Station up'));
        $grid->column('station_down', __('Station down'));
        $grid->column('people_num', __('People num'));
        $grid->column('order_time', __('Order time'));
        $grid->column('order_state', __('Order state'));

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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('order_num', __('Order num'));
        $show->field('plate_num', __('Plate num'));
        $show->field('user', __('User'));
        $show->field('station_up', __('Station up'));
        $show->field('station_down', __('Station down'));
        $show->field('people_num', __('People num'));
        $show->field('order_time', __('Order time'));
        $show->field('order_state', __('Order state'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());

        $form->text('order_num', __('Order num'));
        $form->text('plate_num', __('Plate num'));
        $form->text('user', __('User'));
        $form->radioButton('station_up', __('Station up'))->options([
            '站点1' => '站点1',
            '站点2' => '站点2',
            '站点3' => '站点3',
            '站点4' => '站点4',
            '站点5' => '站点5',
            ]);
        $form->radioButton('station_down', __('Station down'))->options([
            '站点1' => '站点1',
            '站点2' => '站点2',
            '站点3' => '站点3',
            '站点4' => '站点4',
            '站点5' => '站点5',
            ]);
        $form->text('people_num', __('People num'));
        $form->datetime('order_time', __('Order time'))->default(date('Y-m-d H:i:s'));
        $form->radioButton('order_state', __('Order state'))->options([
            '进行中' => '进行中',
            '约车成功' => '约车成功',
            '约车失败' => '约车失败',
            ]);

        return $form;
    }
}

<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:52:57
 * @LastEditTime: 2021-01-03 14:18:48
 * @LastEditors: your name
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\Controllers\StationController.php
 */

namespace App\Admin\Controllers;

use App\Station;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '站点';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Station());

        $grid->column('id', __('Id'));
        $grid->column('station_name', __('Station name'));
        $grid->column('serial_num', __('Serial num'));
        $grid->column('circle_num', __('Circle num'));
        $grid->column('location', __('Location'));
        $grid->column('longitute', __('Longitute'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Station::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('station_name', __('Station name'));
        $show->field('serial_num', __('Serial num'));
        $show->field('circle_num', __('Circle num'));
        $show->field('location', __('Location'));
        $show->field('longitute', __('Longitute'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Station());

        $form->text('station_name', __('Station name'));
        $form->text('serial_num', __('Serial num'));
        $form->text('circle_num', __('Circle num'));
        $form->text('location', __('Location'));
        $form->decimal('longitute', __('Longitute'));

        return $form;
    }
}

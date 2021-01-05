<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:53:17
 * @LastEditTime: 2021-01-05 23:28:30
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\Controllers\EvaluationController.php
 */

namespace App\Admin\Controllers;

use App\Evaluation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EvaluationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '订单评价';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Evaluation());

        $grid->column('id', __('Id'));
        $grid->column('order_num', __('Order num'));
        $grid->column('driver', __('Driver'));
        $grid->column('user', __('User'));
        $grid->column('grade', __('Grade'));
        $grid->column('content', __('Content'));
        $grid->column('evaluate_time', __('Evaluate time'));

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
        $show = new Show(Evaluation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('order_num', __('Order num'));
        $show->field('driver', __('Driver'));
        $show->field('user', __('User'));
        $show->field('grade', __('Grade'));
        $show->field('content', __('Content'));
        $show->field('evaluate_time', __('Evaluate time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Evaluation());

        $form->text('order_num', __('Order num'));
        $form->text('driver', __('Driver'));
        $form->text('user', __('User'));
        $form->radioButton('grade', __('Grade'))->options([
            '一星' => '一星',
            '二星' => '二星',
            '三星' => '三星',
            '四星' => '四星',
            '五星' => '五星',
            ]);
        $form->textarea('content', __('Content'));
        $form->datetime('evaluate_time', __('Evaluate time'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}

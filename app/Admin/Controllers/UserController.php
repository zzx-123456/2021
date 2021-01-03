<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:52:38
 * @LastEditTime: 2021-01-03 14:17:50
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\Controllers\UserController.php
 */

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('nickname', __('Nickname'));
        // $grid->column('password', __('Password'));
        $grid->column('avatar', __('Avatar'))->image('/upload/', 60, 60);
        $grid->column('phone', __('Phone'));
        $grid->column('reg_time', __('Reg time'));
        // $grid->column('remember_token', __('Remember token'));
        $grid->column('user_state', __('User state'))->switch();

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nickname', __('Nickname'));
        $show->field('password', __('Password'));
        $show->field('avatar', __('Avatar'));
        $show->field('phone', __('Phone'));
        $show->field('reg_time', __('Reg time'));
        $show->field('remember_token', __('Remember token'));
        $show->field('user_state', __('User state'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('nickname', __('Nickname'));
        $form->password('password', __('Password'));
        $form->image('avatar', __('Avatar'));
        $form->mobile('phone', __('Phone'));
        $form->datetime('reg_time', __('Reg time'))->default(date('Y-m-d H:i:s'));
        $form->text('remember_token', __('Remember token'));
        $form->text('user_state', __('User state'))->default('1');
        return $form;
    }
}

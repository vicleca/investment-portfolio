<?php

namespace App\Admin\Controllers;

use App\Models\Account;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AccountController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Account';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Account());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('url', __('Url'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(Account::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('url', __('Url'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Account());

        $form->text('name', __('Name'));
        $form->textarea('description', __('Description'));
        $form->url('url', __('Url'));

        return $form;
    }
}

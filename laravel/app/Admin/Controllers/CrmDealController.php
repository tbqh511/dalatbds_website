<?php

namespace App\Admin\Controllers;

use App\Models\CrmDeal;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CrmDealController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CrmDeal';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CrmDeal());

        $grid->column('id', __('Id'));
        $grid->column('customer_id', __('Customer id'));
        $grid->column('notes', __('Notes'));
        $grid->column('status', __('Status'));
        $grid->column('amount', __('Amount'));
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
        $show = new Show(CrmDeal::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customer_id', __('Customer id'));
        $show->field('notes', __('Notes'));
        $show->field('status', __('Status'));
        $show->field('amount', __('Amount'));
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
        $form = new Form(new CrmDeal());

        $form->number('customer_id', __('Customer id'));
        $form->text('notes', __('Notes'));
        $form->text('status', __('Status'));
        $form->decimal('amount', __('Amount'));

        return $form;
    }
}

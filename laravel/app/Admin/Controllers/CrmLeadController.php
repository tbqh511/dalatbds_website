<?php

namespace App\Admin\Controllers;

use App\Models\CrmLead;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CrmLeadController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CrmLead';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CrmLead());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('customer_id', __('Customer id'));
        $grid->column('source_id', __('Source id'));
        $grid->column('demand_rate_min', __('Demand rate min'));
        $grid->column('demand_rate_max', __('Demand rate max'));
        $grid->column('property_purpose', __('Property purpose'));
        $grid->column('demand_product_type', __('Demand product type'));
        $grid->column('demand_legal', __('Demand legal'));
        $grid->column('notes', __('Notes'));
        $grid->column('status', __('Status'));
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
        $show = new Show(CrmLead::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('customer_id', __('Customer id'));
        $show->field('source_id', __('Source id'));
        $show->field('demand_rate_min', __('Demand rate min'));
        $show->field('demand_rate_max', __('Demand rate max'));
        $show->field('property_purpose', __('Property purpose'));
        $show->field('demand_product_type', __('Demand product type'));
        $show->field('demand_legal', __('Demand legal'));
        $show->field('notes', __('Notes'));
        $show->field('status', __('Status'));
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
        $form = new Form(new CrmLead());

        $form->number('user_id', __('User id'));
        $form->number('customer_id', __('Customer id'));
        $form->number('source_id', __('Source id'));
        $form->decimal('demand_rate_min', __('Demand rate min'));
        $form->decimal('demand_rate_max', __('Demand rate max'));
        $form->text('property_purpose', __('Property purpose'));
        $form->text('demand_product_type', __('Demand product type'));
        $form->text('demand_legal', __('Demand legal'));
        $form->text('notes', __('Notes'));
        $form->text('status', __('Status'));

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use App\Models\CrmCustomer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CrmCustomerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CrmCustomer';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CrmCustomer());

        $grid->column('id', __('Id'));
        $grid->column('full_name', __('Full name'));
        $grid->column('gender', __('Gender'));
        $grid->column('age', __('Age'));
        $grid->column('company', __('Company'));
        $grid->column('about_customer', __('About customer'));
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
        $show = new Show(CrmCustomer::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('full_name', __('Full name'));
        $show->field('gender', __('Gender'));
        $show->field('age', __('Age'));
        $show->field('company', __('Company'));
        $show->field('about_customer', __('About customer'));
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
        $form = new Form(new CrmCustomer());

        $form->text('full_name', __('Full name'));
        $form->text('gender', __('Gender'));
        $form->number('age', __('Age'));
        $form->text('company', __('Company'));
        $form->text('about_customer', __('About customer'));

        return $form;
    }
}

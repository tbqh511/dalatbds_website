<?php

namespace App\Admin\Controllers;

use App\Models\LocationsAdministrativeUnit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LocationsAdministrativeUnitController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'LocationsAdministrativeUnit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new LocationsAdministrativeUnit());

        $grid->column('id', __('Id'));
        $grid->column('full_name', __('Full name'));
        $grid->column('full_name_en', __('Full name en'));
        $grid->column('short_name', __('Short name'));
        $grid->column('short_name_en', __('Short name en'));
        $grid->column('code_name', __('Code name'));
        $grid->column('code_name_en', __('Code name en'));
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
        $show = new Show(LocationsAdministrativeUnit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('full_name', __('Full name'));
        $show->field('full_name_en', __('Full name en'));
        $show->field('short_name', __('Short name'));
        $show->field('short_name_en', __('Short name en'));
        $show->field('code_name', __('Code name'));
        $show->field('code_name_en', __('Code name en'));
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
        $form = new Form(new LocationsAdministrativeUnit());

        $form->text('full_name', __('Full name'));
        $form->text('full_name_en', __('Full name en'));
        $form->text('short_name', __('Short name'));
        $form->text('short_name_en', __('Short name en'));
        $form->text('code_name', __('Code name'));
        $form->text('code_name_en', __('Code name en'));

        return $form;
    }
}

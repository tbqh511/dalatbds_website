<?php

namespace App\Admin\Controllers;

use App\Models\LocationsProvince;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LocationsProvinceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'LocationsProvince';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new LocationsProvince());

        $grid->column('code', __('Code'));
        $grid->column('name', __('Name'));
        $grid->column('name_en', __('Name en'));
        $grid->column('full_name', __('Full name'));
        $grid->column('full_name_en', __('Full name en'));
        $grid->column('code_name', __('Code name'));
        $grid->column('administrative_unit_id', __('Administrative unit id'));
        $grid->column('administrative_region_id', __('Administrative region id'));
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
        $show = new Show(LocationsProvince::findOrFail($id));

        $show->field('code', __('Code'));
        $show->field('name', __('Name'));
        $show->field('name_en', __('Name en'));
        $show->field('full_name', __('Full name'));
        $show->field('full_name_en', __('Full name en'));
        $show->field('code_name', __('Code name'));
        $show->field('administrative_unit_id', __('Administrative unit id'));
        $show->field('administrative_region_id', __('Administrative region id'));
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
        $form = new Form(new LocationsProvince());

        $form->text('code', __('Code'));
        $form->text('name', __('Name'));
        $form->text('name_en', __('Name en'));
        $form->text('full_name', __('Full name'));
        $form->text('full_name_en', __('Full name en'));
        $form->text('code_name', __('Code name'));
        $form->number('administrative_unit_id', __('Administrative unit id'));
        $form->number('administrative_region_id', __('Administrative region id'));

        return $form;
    }
}

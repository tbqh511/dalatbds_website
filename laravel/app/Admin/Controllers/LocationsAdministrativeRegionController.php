<?php

namespace App\Admin\Controllers;

use App\Models\LocationsAdministrativeRegion;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LocationsAdministrativeRegionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'LocationsAdministrativeRegion';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new LocationsAdministrativeRegion());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('name_en', __('Name en'));
        $grid->column('code_name', __('Code name'));
        $grid->column('code_name_en', __('Code name en'));

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
        $show = new Show(LocationsAdministrativeRegion::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('name_en', __('Name en'));
        $show->field('code_name', __('Code name'));
        $show->field('code_name_en', __('Code name en'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new LocationsAdministrativeRegion());

        $form->text('name', __('Name'));
        $form->text('name_en', __('Name en'));
        $form->text('code_name', __('Code name'));
        $form->text('code_name_en', __('Code name en'));

        return $form;
    }
}

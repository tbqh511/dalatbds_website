<?php

namespace App\Admin\Controllers;

use App\Models\LocationsWard;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LocationsWardController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'LocationsWard';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new LocationsWard());

        //HuyTBQ: get all districs of dalat city with province_code = 672
        $districtCode = config('location.district_code');
        if($districtCode!=null)
            $grid->model()->where('district_code', $districtCode);


        $grid->column('code', __('Code'));
        $grid->column('name', __('Name'));
        $grid->column('name_en', __('Name en'));
        $grid->column('full_name', __('Full name'));
        $grid->column('full_name_en', __('Full name en'));
        $grid->column('code_name', __('Code name'));
        $grid->column('district_code', __('District code'));
        $grid->column('administrative_unit_id', __('Administrative unit id'));

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
        $show = new Show(LocationsWard::findOrFail($id));

        $show->field('code', __('Code'));
        $show->field('name', __('Name'));
        $show->field('name_en', __('Name en'));
        $show->field('full_name', __('Full name'));
        $show->field('full_name_en', __('Full name en'));
        $show->field('code_name', __('Code name'));
        $show->field('district_code', __('District code'));
        $show->field('administrative_unit_id', __('Administrative unit id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new LocationsWard());

        $form->text('code', __('Code'));
        $form->text('name', __('Name'));
        $form->text('name_en', __('Name en'));
        $form->text('full_name', __('Full name'));
        $form->text('full_name_en', __('Full name en'));
        $form->text('code_name', __('Code name'));
        $form->text('district_code', __('District code'));
        $form->number('administrative_unit_id', __('Administrative unit id'));

        return $form;
    }
}

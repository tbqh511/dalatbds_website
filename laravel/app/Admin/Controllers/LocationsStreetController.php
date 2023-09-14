<?php

namespace App\Admin\Controllers;

use App\Models\LocationsStreet;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LocationsStreetController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Danh sách đường';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        $grid = new Grid(new LocationsStreet());
        //HuyTBQ
        $districtCode = config('location.district_code');
        if($districtCode!=null)
        {
            $grid->model()->where('district_code', $districtCode);
        }

        $grid->column('code', __('Mã đường'));
        $grid->column('street_name', __('Tên đưởng'));
        $grid->column('district.name', __('Thành phố'));
        $grid->column('ward.name', __('Phường / Xã'));

        $grid->filter(function ($filter) {
            $filter->like('street_name', 'Tên đường');
        });


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
        $show = new Show(LocationsStreet::findOrFail($id));

        $show->field('code', __('Code'));
        $show->field('street_name', __('Street name'));
        $show->field('district_code', __('District code'));
        $show->field('ward_code', __('Ward code'));
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
        $form = new Form(new LocationsStreet());

        $form->text('code', __('Code'));
        $form->text('street_name', __('Street name'));
        $form->text('district_code', __('District code'));
        $form->text('ward_code', __('Ward code'));

        return $form;
    }
}

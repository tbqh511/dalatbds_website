<?php

namespace App\Admin\Controllers;

use App\Models\ProductAddress;
use App\Models\LocationsStreet;
use App\Models\LocationsWard;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductAddressController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Địa chỉ bất động sản';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductAddress());

        $grid->column('id', 'ID');
        $grid->column('product_id', 'Product ID');
        $grid->column('street_number', 'Street Number');
        $grid->column('street_code', 'Street Code')->display(function ($streetCode) {
            return LocationsStreet::where('code', $streetCode)->value('street_name');
        });
        $grid->column('ward_code', 'Ward Code')->display(function ($wardCode) {
            return LocationsWard::where('code', $wardCode)->value('name');
        });
        $grid->column('created_at', 'Created At');
        $grid->column('updated_at', 'Updated At');


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
        $show = new Show(ProductAddress::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('product_id', __('Product ID'));
        $show->field('street_number', __('Street Number'));

        // Display related data from locations_streets and locations_wards tables
        $show->field('street_code', __('Street Code'))->as(function ($streetCode) {
            return LocationsStreet::where('code', $streetCode)->value('street_name');
        });
        $show->field('ward_code', __('Ward Code'))->as(function ($wardCode) {
            return LocationsWard::where('code', $wardCode)->value('name');
        });

        $show->field('created_at', __('Created At'));
        $show->field('updated_at', __('Updated At'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProductAddress());

        $form->display('id', 'ID');
        $form->select('product_id', 'Product ID')->options(function ($id) {
            $product = Product::find($id);
            if ($product) {
                return [$product->id => $product->name];
            }
        })->ajax('/admin/api/products');
        $form->text('street_number', 'Street Number');

        $form->select('street_code', 'Street Code')->options(LocationsStreet::pluck('street_name', 'code'))->ajax('/admin/api/streets');
        $form->select('ward_code', 'Ward Code')->options(LocationsWard::pluck('name', 'code'))->ajax('/admin/api/wards');

        $form->display('created_at', 'Created At');
        $form->display('updated_at', 'Updated At');


        return $form;
    }
}

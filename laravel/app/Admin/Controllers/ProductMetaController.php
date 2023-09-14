<?php

namespace App\Admin\Controllers;

use App\Models\ProductMeta;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductMetaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductMeta';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductMeta());

        $grid->column('id', __('ID'));
        $grid->column('meta_key', __('Meta Key'));
        $grid->column('meta_value', __('Meta Value'));

        $grid->column('product_id', __('Product'))->display(function ($productId) {
            // Truy vấn tên sản phẩm dựa trên product_id
            $product = Product::find($productId);
            return $product ? $product->name : '';
        });

        $grid->column('created_at', __('Created At'))->display(function ($createdAt) {
            return $createdAt->format('d/m/Y H:i:s');
        });

        $grid->column('updated_at', __('Updated At'))->display(function ($updatedAt) {
            return $updatedAt->format('d/m/Y H:i:s');
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
        $show = new Show(ProductMeta::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('meta_key', __('Meta Key'));
        $show->field('meta_value', __('Meta Value'));

        $show->field('product_id', __('Product'))->as(function ($productId) {
            // Truy vấn tên sản phẩm dựa trên product_id
            $product = Product::find($productId);
            return $product ? $product->name : '';
        });

        $show->field('created_at', __('Created At'))->as(function ($createdAt) {
            return $createdAt->format('d/m/Y H:i:s');
        });

        $show->field('updated_at', __('Updated At'))->as(function ($updatedAt) {
            return $updatedAt->format('d/m/Y H:i:s');
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProductMeta());

        $form->display('id', __('ID'));
        $form->text('meta_key', __('Meta Key'));
        $form->textarea('meta_value', __('Meta Value'));

        $form->select('product_id', __('Product'))->options(function () {
            // Truy vấn danh sách sản phẩm để tạo options cho dropdown
            return Product::pluck('name', 'id');
        });

        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));

        return $form;
    }
}

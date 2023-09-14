<?php

namespace App\Admin\Controllers;

use App\Models\ProductType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductTypeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductType';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductType());
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('Name'));
        $grid->column('parent_id', __('Parent ID'));
        $grid->column('description', __('Description'));
        $grid->column('order', __('Order'));
        $grid->column('image', __('Image'));
        $grid->column('created_at', __('Created At'))->sortable();
        $grid->column('updated_at', __('Updated At'))->sortable();
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
        $show = new Show(ProductType::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProductType());



        return $form;
    }
}

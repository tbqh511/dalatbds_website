<?php

namespace App\Admin\Controllers;

use App\Models\ProductLegal;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductLegalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Loại Pháp Lý';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductLegal());
        $grid->column('id', __('Id'));
        $grid->column('legal', __('Pháp lý'));
        $grid->column('parent_id', __('Pháp lý cha'))->display(function ($parentId) {
            $parentLegal = ProductLegal::find($parentId);
            return $parentLegal ? $parentLegal->legal : '';
        });
        $grid->column('description', __('Miêu tả'));
        $grid->column('order', __('Vị trí'));
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
        $show = new Show(ProductLegal::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('legal', __('Pháp lý'));
        $show->field('parent_id', __('Pháp lý'));
        $show->field('description', __('Miêu tả'));
        $show->field('order',__('Vị trí'));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProductLegal());
        $form->text('legal', __('Pháp lý'));
        //$form->text('parent_id', __('Pháp lý cha'));
        $form->textarea('description', __('Miêu tả'));
        $form->text('order', __('Vị trí'));
        return $form;
    }
}

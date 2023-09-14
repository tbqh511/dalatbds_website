<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('post_author', __('Post author'));
        $grid->column('post_date', __('Post date'));
        $grid->column('post_date_gmt', __('Post date gmt'));
        $grid->column('post_content', __('Post content'));
        $grid->column('post_title', __('Post title'));
        $grid->column('post_name', __('Post name'));
        $grid->column('post_excerpt', __('Post excerpt'));
        $grid->column('post_status', __('Post status'));
        $grid->column('comment_status', __('Comment status'));
        $grid->column('post_modified', __('Post modified'));
        $grid->column('post_modified_gmt', __('Post modified gmt'));
        $grid->column('post_parent', __('Post parent'));
        $grid->column('menu_order', __('Menu order'));
        $grid->column('post_type', __('Post type'));
        $grid->column('comment_count', __('Comment count'));
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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('post_author', __('Post author'));
        $show->field('post_date', __('Post date'));
        $show->field('post_date_gmt', __('Post date gmt'));
        $show->field('post_content', __('Post content'));
        $show->field('post_title', __('Post title'));
        $show->field('post_name', __('Post name'));
        $show->field('post_excerpt', __('Post excerpt'));
        $show->field('post_status', __('Post status'));
        $show->field('comment_status', __('Comment status'));
        $show->field('post_modified', __('Post modified'));
        $show->field('post_modified_gmt', __('Post modified gmt'));
        $show->field('post_parent', __('Post parent'));
        $show->field('menu_order', __('Menu order'));
        $show->field('post_type', __('Post type'));
        $show->field('comment_count', __('Comment count'));
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
        $form = new Form(new Post());

        $form->number('post_author', __('Post author'));
        $form->datetime('post_date', __('Post date'))->default(date('Y-m-d H:i:s'));
        $form->datetime('post_date_gmt', __('Post date gmt'))->default(date('Y-m-d H:i:s'));
        $form->textarea('post_content', __('Post content'));
        $form->text('post_title', __('Post title'));
        $form->text('post_name', __('Post name'));
        $form->textarea('post_excerpt', __('Post excerpt'));
        $form->text('post_status', __('Post status'))->default('publish');
        $form->text('comment_status', __('Comment status'))->default('open');
        $form->datetime('post_modified', __('Post modified'))->default(date('Y-m-d H:i:s'));
        $form->datetime('post_modified_gmt', __('Post modified gmt'))->default(date('Y-m-d H:i:s'));
        $form->number('post_parent', __('Post parent'));
        $form->number('menu_order', __('Menu order'));
        $form->number('post_type', __('Post type'));
        $form->number('comment_count', __('Comment count'));

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductLegal;
use App\Models\LocationsStreet;
use App\Models\LocationsWard;

use App\Admin\Forms\Setting;
use Encore\Admin\Traits\HasDateTimeFormat;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use Illuminate\Support\Str;
use Encore\Admin\Widgets\Link;


class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Danh sách Bất Động Sản';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());
        $grid->fixColumns(0, -1);
        //Filters
        //$grid->expandFilter();
        $grid->filter(function($filter){
            // Remove the default id filter
            $filter->disableIdFilter();

            //Columns
            $filter->column(1/2, function ($filter) {
                $filter->contains('id', 'Mã BDS')->integer();
                $filter->equal('productTypes.product_type_id', 'Loại BDS')->select(ProductType::all()->pluck('name', 'id')->toArray());
                $filter->equal('legals_id', 'Pháp lý')->select(ProductLegal::all()->pluck('legal','id')->toArray());
            });
            $filter->column(1/2, function ($filter) {
                $filter->equal('address.ward_code', 'Phường/Xã')->select(LocationsWard::where('district_code', config('location.district_code'))->pluck('name','code'));
                $filter->equal('address.street_code', 'Đường')->select(LocationsStreet::where('district_code', config('location.district_code'))->pluck('street_name','code'));
                $filter->gt('prices', 'Giá trên')->select([
                    '500000000' => '500 triệu',
                    '1000000000' => '1 tỷ',
                    '2000000000' => '2 tỷ',
                    '5000000000' => '5 tỷ',
                    '10000000000' => '10 tỷ',
                    '20000000000' => '20 tỷ',
                    '50000000000' => '50 tỷ',
                    '100000000000' => '100 tỷ',
                    '200000000000' => '200 tỷ',
                    '500000000000' => '500 tỷ',
                    '1000000000000' => '1000 tỷ',
                ]);
            });
        });
        //Columns
        $grid->id('id', __('Id'));
        $grid->column('avatarImage.meta_value', __('Hình ảnh'))->image('','100','100')->width(120);
        $grid->column('title', __('Tiêu đề'))->link(function ($title) {
            $url = route('admin.products.show', $this->getKey());
            return $url;
        })->width(200);
        $grid->column('area', __('Diện tích'))->display(function ($value) {
            return number_format($value, 1, ',', '.') . ' m2';
        })->style('text-align:right;')->sortable();
        $grid->column('prices', __('Giá'))->display(function ($price) {
            $ty = 1000000000;
            $trieu = 1000000;

            if ($price > $ty) {
                if ($price % $ty == 0) {
                    $formattedPrice = number_format($price / $ty, 0) . ' Tỷ';
                } else {
                    $formattedPrice = number_format($price / $ty, 1) . ' Tỷ';
                }
            } elseif ($price > 0) {
                $formattedPrice = number_format($price / $trieu, 0) . ' Triệu';
            } else {
                $formattedPrice = 'Giá thỏa thuận';
            }
            return $formattedPrice;
        })->style('text-align:right;')->sortable();

        //$grid->column('description', __('Description'));
        $grid->column('legal.legal', __('Pháp lý'))->style('text-align:right;')->sortable();
        //$grid->column('latitude', __('Latitude'));
        //$grid->column('longitude', __('Longitude'));
        // $grid->column('created_at', __('Ngày tạo'))->display(function ($createdAt) {
        //     if ($createdAt) {
        //         return date('H:i:s d/m/Y', strtotime($createdAt));
        //     } else {
        //         return '';
        //     }
        // })->style('text-align:right;')->sortable();
        // $grid->column('updated_at', __('Ngày chỉnh sửa'))->display(function ($updatedAt) {
        //     if ($updatedAt) {
        //         return date('H:i:s d/m/Y', strtotime($updatedAt));
        //     } else {
        //         return '';
        //     }
        // })->style('text-align:right;')->sortable();
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
        $show = new Show(Product::findOrFail($id));

        $show->divider();
        $show->field('address.street_number', __('Số nhà'));
        $show->field('address.street_code', __('Đường'))->as(function ($streetCode) {
            return LocationsStreet::where('code', $streetCode)->value('street_name');
        });
        $show->field('address.ward_code', __('Phường, Xã'))->as(function ($wardCode) {
            return LocationsWard::where('code', $wardCode)->value('name');
        });
        $show->divider();
        $show->field('id', __('Mã ID'));
        $show->field('slug', __('Slug'));
        $show->field('title', __('Title'));
        $show->field('area', __('Area'));
        $show->field('prices', __('Prices'));
        $show->field('commissions', __('Commissions'));
        $show->field('description', __('Description'));
        $show->field('legals_id', __('Legals id'));
        // $show->field('latitude', __('Latitude'));
        // $show->field('longitude', __('Longitude'));
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
        $form = new Form(new Product());

        $districtCode = config('location.district_code');

        //Owner infor
        $form->divider('Chủ bất động sản');


        //Product_Type
        $form->divider('Loại bất động sản');
        $form->multipleSelect('productTypes','Loại BDS')->options(ProductType::all()->pluck('name','id'))->required();
        $form->select('legals_id', __('Pháp lý'))->options(ProductLegal::all()->pluck('legal','id'))->required();

        //Product_Address
        $form->divider('Thông tin địa chỉ');
        $form->text('address.street_number', __('Số nhà'))->placeholder('Số nhà')->required();
        $form->select('address.street_code', __('Đường'))->options(LocationsStreet::where('district_code', $districtCode)->pluck('street_name','code'))->required();
        $form->select('address.ward_code', __('Phường, Xã'))->options(LocationsWard::where('district_code', $districtCode)->pluck('name','code'))->required();

        //Arttibutes
        $form->divider('Thông tin chi tiết');
        $form->currency('prices', __('Giá'))->required()->symbol('VND');

        $form->decimal('commissions', __('Hoa Hồng'))->required();
        $form->decimal('area', __('Diện tích'))->placeholder('Nhập diện tích')->required();
        $form->textarea('description', __('Diễn tả'))->required();
        $form->hidden('slug', __('Slug'))->required();
        $form->hidden('title', __('Title'))->required();

        //Image for product
        $form->divider('Thông tin hình ảnh');
        $form->image('avatarImage.meta_value', __('Hình ảnh avatar'));
        $form->hidden('avatarImage.meta_key')->default('avatar_image_link');

        //$form->multipleImage('images.meta_value', __('Hình ảnh BDS'))->options(['meta_key'=>'image_link'])->pathColumn('meta_value')->removable()->sortable();
        $form->multipleImage('images.meta_value', __('Hình ảnh BDS'))->removable()->sortable();
        $form->hidden('images.meta_key')->default('image_link');

        // $form->hasMany('images', "Hình ảnh BDS", function (Form\NestedForm $form) {
        //     $form->hidden('meta_key')->value('image_link');
        //     $form->multipleImage('meta_value', 'Hình ảnh BDS')->sortable()->uniqueName()->removable();
        // });


        $form->saving(function (Form $form) {
            $productType = ProductType::where('Id', $form->productTypes[0])->value('name');
            $streetName = LocationsStreet::where('code', $form->address['street_code'])->value('street_name');
            $wardName = LocationsWard::where('code', $form->address['ward_code'])->value('name');

            $title = $productType . ', ' . $streetName . ', ' . $wardName;

            // Tạo slug từ title ban đầu
            $originalSlug = Str::slug($title);
            $slug = $originalSlug;
            $counter = 1;

            // Kiểm tra và thêm số vào cuối slug nếu trùng lặp
            while (Product::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            $form->title = $title;
            $form->slug = $slug;
        });

        //config form
        $form->setTitle('Tạo BDS');
        if($form->isEditing()){
            $form->setTitle('Tùy chỉnh BDS');
        }

        $form->footer(function ($footer) {
            // disable `View` checkbox
            $footer->disableViewCheck();
            // disable `Continue editing` checkbox
            $footer->disableEditingCheck();
            // disable `Continue Creating` checkbox
            $footer->disableCreatingCheck();
        });

        return $form;
    }
}

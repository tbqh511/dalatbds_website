<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');


    //Logs module
    //$router->resource('re-logs', ReLogController::class);

    //location module
    //$router->resource('administrative-regions', LocationsAdministrativeRegionController::class);
    //$router->resource('administrative-units', LocationsAdministrativeUnitController::class);
    //$router->resource('districts', LocationsDistrictController::class);
    //$router->resource('provinces', LocationsProvinceController::class);
    $router->resource('wards', LocationsWardController::class);
    $router->resource('streets', LocationsStreetController::class);

    //  // post module
    $router->resource('posts', PostController::class);
    $router->resource('post-metas', PostMetaController::class);
    $router->resource('post-types', PostTypeController::class);

    // //product module
    $router->resource('products', ProductController::class);
    $router->resource('product-addresses', ProductAddressController::class);
    $router->resource('product-legals', ProductLegalController::class);
    $router->resource('product-metas', ProductMetaController::class);
    $router->resource('product-product-types', ProductProductTypeController::class);
    $router->resource('product-terms', ProductTermController::class);
    $router->resource('product-term-relationships', ProductTermRelationshipController::class);
    $router->resource('product-term-taxonomies', ProductTermTaxonomyController::class);
    $router->resource('product-types', ProductTypeController::class);

    // //CRM module
    $router->resource('crm-contacts', CrmContactController::class);
    $router->resource('crm-customers', CrmCustomerController::class);
    $router->resource('crm-customer-addresses', CrmCustomerAddressController::class);
    $router->resource('crm-deals', CrmDealController::class);
    $router->resource('crm-deal-assigneds', CrmDealAssignedController::class);
    $router->resource('crm-deal-commissions', CrmDealCommissionController::class);
    $router->resource('crm-deal-products', CrmDealProductController::class);
    $router->resource('crm-deal-statuses', CrmDealStatusController::class);
    $router->resource('crm-leads', CrmLeadController::class);
    $router->resource('crm-lead-sources', CrmLeadSourceController::class);
});

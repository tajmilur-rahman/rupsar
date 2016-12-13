<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin_addons_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AddonsController::loginAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addons/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_addons_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AddonsController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addons/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_catalog' => array (  0 =>   array (    0 => 'offset',    1 => 'limit',    2 => 'orderBy',    3 => 'sortOrder',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::catalogAction',    '_legacy_controller' => 'AdminProducts',    'limit' => 'last',    'offset' => 0,    'orderBy' => 'last',    'sortOrder' => 'last',  ),  2 =>   array (    'limit' => '_limit|last|\\d+',    'orderBy' => 'last|id_product|name|reference|name_category|price|sav_quantity|position|active|position_ordering',    'offset' => 'last|\\d+',    'sortOrder' => 'last|asc|desc',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'last|asc|desc',      3 => 'sortOrder',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'last|id_product|name|reference|name_category|price|sav_quantity|position|active|position_ordering',      3 => 'orderBy',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '_limit|last|\\d+',      3 => 'limit',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'last|\\d+',      3 => 'offset',    ),    4 =>     array (      0 => 'text',      1 => '/product/catalog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_catalog_filters' => array (  0 =>   array (    0 => 'quantity',    1 => 'active',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::catalogFiltersAction',    '_legacy_controller' => 'AdminProducts',    'quantity' => 'none',    'active' => 'none',  ),  2 =>   array (    'quantity' => 'none|<=\\d+|<\\d+|>\\d+|>=\\d+',    'active' => 'none|1|0',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'none|1|0',      3 => 'active',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'none|<=\\d+|<\\d+|>\\d+|>=\\d+',      3 => 'quantity',    ),    2 =>     array (      0 => 'text',      1 => '/product/catalog_filters',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_list' => array (  0 =>   array (    0 => 'offset',    1 => 'limit',    2 => 'orderBy',    3 => 'sortOrder',    4 => 'view',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::listAction',    'limit' => 'last',    'offset' => 0,    'orderBy' => 'last',    'sortOrder' => 'last',    'view' => 'full',  ),  2 =>   array (    'limit' => '_limit|last|\\d+',    'orderBy' => 'last|id_product|name|reference|name_category|price|sav_quantity|position|active|position_ordering',    'offset' => 'last|\\d+',    'sortOrder' => 'last|asc|desc',    'view' => 'full|quicknav',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'full|quicknav',      3 => 'view',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'last|asc|desc',      3 => 'sortOrder',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'last|id_product|name|reference|name_category|price|sav_quantity|position|active|position_ordering',      3 => 'orderBy',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '_limit|last|\\d+',      3 => 'limit',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => 'last|\\d+',      3 => 'offset',    ),    5 =>     array (      0 => 'text',      1 => '/product/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_form' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::formAction',    '_legacy_controller' => 'AdminProducts',    '_legacy_param_mapper_class' => 'PrestaShop\\PrestaShop\\Adapter\\Product\\AdminProductDataProvider',    '_legacy_param_mapper_method' => 'mapLegacyParametersProductForm',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/product/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_use_legacy_setter' => array (  0 =>   array (    0 => 'use',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::shouldUseLegacyPagesAction',  ),  2 =>   array (    'use' => '0|1',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '0|1',      3 => 'use',    ),    1 =>     array (      0 => 'text',      1 => '/product/uselegacy',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_bulk_action' => array (  0 =>   array (    0 => 'action',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::bulkAction',  ),  2 =>   array (    'action' => 'activate_all|deactivate_all|delete_all|duplicate_all',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'activate_all|deactivate_all|delete_all|duplicate_all',      3 => 'action',    ),    1 =>     array (      0 => 'text',      1 => '/product/bulk',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_unit_action' => array (  0 =>   array (    0 => 'action',    1 => 'id',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::unitAction',  ),  2 =>   array (    'action' => 'delete|duplicate|activate|deactivate',    'id' => '\\d+',    '_method' => 'POST|GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'delete|duplicate|activate|deactivate',      3 => 'action',    ),    2 =>     array (      0 => 'text',      1 => '/product/unit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_mass_edit_action' => array (  0 =>   array (    0 => 'action',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::massEditAction',  ),  2 =>   array (    'action' => 'sort',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'sort',      3 => 'action',    ),    1 =>     array (      0 => 'text',      1 => '/product/massedit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_export_action' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::exportAction',    '_format' => 'csv',  ),  2 =>   array (    '_format' => 'csv',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'csv',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/product/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_virtual_save_action' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::saveAction',    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/product/product/virtual/form/save',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_virtual_remove_file_action' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::removeFileAction',    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/product/product/virtual/remove/file',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_virtual_remove_action' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::removeAction',    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/product/product/virtual/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_attachement_add_action' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttachementProductController::addAction',    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/product/product/attachment/form/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_image_upload' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::uploadImageAction',    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/product/product/image/upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_image_positions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::updateImagePositionAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/product/image/positions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_image_form' => array (  0 =>   array (    0 => 'idImage',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::formAction',    'idImage' => 0,  ),  2 =>   array (    'idImage' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idImage',    ),    1 =>     array (      0 => 'text',      1 => '/product/product/image/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_product_image_delete' => array (  0 =>   array (    0 => 'idImage',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::deleteAction',    'idImage' => 0,  ),  2 =>   array (    'idImage' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idImage',    ),    1 =>     array (      0 => 'text',      1 => '/product/product/image/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_combination_generate_form' => array (  0 =>   array (    0 => 'combinationIds',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CombinationController::generateCombinationFormAction',    'combinationIds' => 0,  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'combinationIds',    ),    1 =>     array (      0 => 'text',      1 => '/combination',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_get_product_combinations' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CombinationController::getProductCombinationsAction',    '_format' => 'json',    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/combination/product-combinations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_category_simple_add_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CategoryController::addSimpleCategoryFormAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/form/add/simple',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_feature_get_feature_values' => array (  0 =>   array (    0 => 'idFeature',  ),  1 =>   array (    'idFeature' => 0,    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\FeatureController::getFeatureValuesAction',  ),  2 =>   array (    'idFeature' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idFeature',    ),    1 =>     array (      0 => 'text',      1 => '/feature/get-feature-values',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_cart' => array (  0 =>   array (    0 => 'moduleId',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::getModuleCartAction',  ),  2 =>   array (    'moduleId' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'moduleId',    ),    1 =>     array (      0 => 'text',      1 => '/module/cart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_catalog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::catalogAction',    '_legacy_controller' => 'AdminModules',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/catalog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_catalog_refresh' => array (  0 =>   array (    0 => 'category',    1 => 'keyword',  ),  1 =>   array (    'category' => NULL,    'keyword' => NULL,    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::refreshCatalogAction',    '_legacy_controller' => 'AdminModules',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'keyword',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category',    ),    2 =>     array (      0 => 'text',      1 => '/module/catalog/refresh',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_catalog_post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::getPreferredModulesAction',    '_legacy_controller' => 'AdminModules',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/catalog/recommended',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_manage' => array (  0 =>   array (    0 => 'category',    1 => 'keyword',  ),  1 =>   array (    'category' => NULL,    'keyword' => NULL,    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::manageAction',    '_legacy_controller' => 'AdminModules',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'keyword',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category',    ),    2 =>     array (      0 => 'text',      1 => '/module/manage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_manage_action' => array (  0 =>   array (    0 => 'action',    1 => 'module_name',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::moduleAction',  ),  2 =>   array (    'action' => 'install|uninstall|enable|disable|enable_mobile|disable_mobile|reset|upgrade',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'module_name',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'install|uninstall|enable|disable|enable_mobile|disable_mobile|reset|upgrade',      3 => 'action',    ),    2 =>     array (      0 => 'text',      1 => '/module/manage/action',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_configure_action' => array (  0 =>   array (    0 => 'module_name',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::configureModuleAction',    '_legacy_controller' => 'AdminModules',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'module_name',    ),    1 =>     array (      0 => 'text',      1 => '/module/manage/action/configure',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_manage_action_bulk' => array (  0 =>   array (    0 => 'action',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::moduleAction',  ),  2 =>   array (    'action' => 'install|uninstall|configure|enable|disable|reset|upgrade',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'install|uninstall|configure|enable|disable|reset|upgrade',      3 => 'action',    ),    1 =>     array (      0 => 'text',      1 => '/module/manage/bulk',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_manage_update_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::moduleAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/manage/update/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_import' => array (  0 =>   array (  ),  1 =>   array (    'module_name' => NULL,    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::importModuleAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/import',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_module_notification' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::notificationAction',    '_legacy_controller' => 'AdminModules',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_attribute_get_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::getAllAttributesAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/attribute/get-all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_attribute_generator' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::attributesGeneratorAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/attribute/generator',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_delete_attribute' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::deleteAttributeAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/attribute',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_delete_all_attributes' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::deleteAllAttributeAction',    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/attribute/delete-all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_get_form_images_combination' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::getFormImagesAction',    '_format' => 'json',    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/attribute/product-form-images',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_specific_price_list' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::listAction',    '_format' => 'json',    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/specific-price/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_specific_price_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::addAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/specific-price/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_delete_specific_price' => array (  0 =>   array (    0 => 'idSpecificPrice',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::deleteAction',    'idSpecificPrice' => 0,  ),  2 =>   array (    'idSpecificPrice' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idSpecificPrice',    ),    1 =>     array (      0 => 'text',      1 => '/specific-price/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_supplier_refresh_product_supplier_combination_form' => array (  0 =>   array (    0 => 'idProduct',    1 => 'supplierIds',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SupplierController::refreshProductSupplierCombinationFormAction',    'supplierIds' => 0,    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'supplierIds',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    2 =>     array (      0 => 'text',      1 => '/supplier/refresh-product-supplier-combination-form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_warehouse_refresh_product_warehouse_combination_form' => array (  0 =>   array (    0 => 'idProduct',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\WarehouseController::refreshProductWarehouseCombinationFormAction',    'idProduct' => 0,  ),  2 =>   array (    'idProduct' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idProduct',    ),    1 =>     array (      0 => 'text',      1 => '/warehouse/refresh-product-warehouse-combination-form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_international_translations_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::listAction',    '_legacy_controller' => 'AdminTranslations',  ),  2 =>   array (    'locale' => '\\w+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/international/translations/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_international_translations_messages_fragments' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::messagesFragmentsAction',  ),  2 =>   array (    'locale' => '\\w+',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/international/translations/messages/fragments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_international_translations_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::editAction',    '_legacy_controller' => 'AdminTranslations',  ),  2 =>   array (    'domain' => '\\w+',    'translation_key' => '\\w+',    'translation_value' => '\\w+',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/international/translations/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_international_translations_export_theme' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::exportThemeAction',    '_legacy_controller' => 'AdminTranslations',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/international/translations/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_security_compromised' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SecurityController::compromisedAccessAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/security/compromised',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_common_pagination' => array (  0 =>   array (    0 => 'offset',    1 => 'limit',    2 => 'total',    3 => 'view',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::paginationAction',    'offset' => 0,    'limit' => 20,    'total' => 0,    'view' => 'full',  ),  2 =>   array (    'offset' => '\\d+',    'limit' => '\\d+',    'total' => '\\d+',    'view' => 'full|quicknav',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'full|quicknav',      3 => 'view',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'total',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'limit',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'offset',    ),    4 =>     array (      0 => 'text',      1 => '/common/pagination',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_common_recommended_modules' => array (  0 =>   array (    0 => 'domain',    1 => 'limit',    2 => 'randomize',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::recommendedModulesAction',    'limit' => 0,    'randomize' => 0,  ),  2 =>   array (    'limit' => '\\d+',    'randomize' => '0|1',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '0|1',      3 => 'randomize',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'limit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'domain',    ),    3 =>     array (      0 => 'text',      1 => '/common/recommended_modules',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_common_sidebar' => array (  0 =>   array (    0 => 'url',    1 => 'title',    2 => 'footer',  ),  1 =>   array (    '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::renderSidebarAction',    'title' => '',    'footer' => '',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'footer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'title',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'url',    ),    3 =>     array (      0 => 'text',      1 => '/common/sidebar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

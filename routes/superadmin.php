<?php

use App\Http\Controllers\SuperadminController;
use Illuminate\Support\Facades\Route;

Route::name('superadmin.')->prefix('superadmin')->middleware('auth', 'superadmin')->group(function () {

    Route::controller(SuperadminController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('products', 'products')->name('products');
        Route::get('product-type', 'product_type')->name('product_type');

        Route::get('products/updater', 'products_updater')->name('products.updater');
        Route::post('products/updater', 'update_user_product')->name('products.updater');

        Route::get('tags', 'tags')->name('tags');
        Route::post('add-tag', 'tag_create')->name('tag_create');
        Route::post('tag-update/{id}', 'tag_update')->name('tag_update');
        Route::get('tag-delete/{id}', 'tag_delete')->name('tag_delete');
        Route::any('product/create', 'create_product')->name('create_product');
        Route::any('product/edit/{id}', 'edit_product')->name('edit_product');
        Route::any('products/sort', 'sort_products')->name('sort_products');
        Route::get('product/delete/{id}', 'product_delete')->name('product.delete');

        Route::get('documentation', 'documentation')->name('documentation');
        Route::get('topics/{slug}', 'edit_documentation')->name('edit_documentation');
        Route::any('topic/create/{slug}', 'create_topic')->name('create_topic');
        Route::any('topic/edit/{id}', 'edit_topic')->name('edit_topic');
        Route::get('topic/delete/{id}', 'topic_delete')->name('topic.delete');

        Route::any('article/create/{slug}', 'create_article')->name('create_article');
        Route::any('article/edit/{id}', 'edit_article')->name('edit_article');
        Route::get('article/delete/{id}', 'article_delete')->name('article.delete');

        Route::get('documentation_details/{id}', 'documentation_details')->name('documentation_details');
        Route::any('topic/sort/{slug}', 'sort_topics')->name('sort_topics');
        Route::any('article/sort/{topic_id}', 'sort_articles')->name('sort_articles');
        Route::post('create_documentation/{article_id}', 'create_documentation')->name('create_documentation');

        Route::get('blogs', 'blogs')->name('blogs');
        Route::any('blogs/create', 'blog_create')->name('blog_create');
        Route::any('blog/edit/{id}', 'edit_blog')->name('edit_blog');
        Route::get('blog/delete/{id}', 'blog_delete')->name('blog.delete');

        Route::get('service-packages', 'service_packages')->name('service_packages');
        Route::any('service-package-create', 'service_package_create')->name('service_package_create');
        Route::any('service-package-update/{id}', 'service_package_update')->name('service_package_update');
        Route::get('service-package-remove/{id}', 'service_package_remove')->name('service_package_remove');

        Route::get('services', 'services')->name('services');
        Route::any('service-create', 'service_create')->name('service_create');
        Route::any('service-update/{id}', 'service_update')->name('service_update');
        Route::get('service-remove/{id}', 'service_remove')->name('service_remove');

        Route::get('ad_network', 'ad_network')->name('ad_network');
        Route::any('ad_create', 'ad_create')->name('ad_create');
        Route::any('ad/edit/{id}', 'ad_edit')->name('ad_edit');
        Route::get('ad/delete/{id}', 'ad_delete')->name('ad.delete');

        Route::get('select_article_to_export/{slug}', 'select_article_to_export')->name('select_article_to_export');
        Route::any('export_documentation/{product_id}', 'export_documentation')->name('export_documentation');

        Route::get('projects/{param?}', 'projects')->name('projects');
        Route::get('project_details/{id}', 'project_details')->name('project_details');
        Route::any('project_create', 'project_create')->name('project_create');
        Route::any('project_edit/{id}', 'project_edit')->name('project_edit');
        Route::any('project_remove/{id}', 'project_remove')->name('project_remove');

        Route::any('online_meeting/add/{id}', 'create_project_meeting')->name('create_project_meeting');
        Route::any('online_meeting/remove/{project_id}/{meeting_id}', 'remove_meeting')->name('remove_meeting');
        Route::any('payment_milestone/add/{id}', 'create_payment_milestone')->name('create_payment_milestone');
        Route::get('milestone_invoice/{milestone_id}', 'milestone_invoice')->name('milestone_invoice');
        Route::any('payment_milestone/remove/{project_id}/{milestone_id}', 'remove_milestone')->name('remove_milestone');
        Route::get('download/attachment/{project_id}/{key}', 'download_attachment')->name('download.project_attachment');
        Route::get('remove/attachment/{project_id}/{key}', 'remove_attachment')->name('remove.project_attachment');
        Route::any('upload/attachment/{project_id}', 'upload_attachment')->name('upload.project_attachment');

        Route::get('user-list', 'user_list')->name('user_list');
        Route::any('user-create', 'user_create')->name('user_create');
        Route::any('user-edit/{id}', 'user_edit')->name('user_edit');
        Route::any('user-remove/{id}', 'user_remove')->name('user_remove');

        Route::get('price-manager', 'package_list')->name('package_list');
        Route::any('package-create', 'package_create')->name('package_create');
        Route::any('package-update/{id}', 'package_update')->name('package_update');
        Route::get('package-remove/{id}', 'package_remove')->name('package_remove');

        //Setting routes
        Route::any('system-settings', 'system_settings')->name('system_settings');

        Route::any('sitemap', 'sitemap_settings')->name('sitemap_settings');

        Route::get('seo_settings', 'seo_settings')->name('seo_settings');
        Route::post('seo_settings_update/{id}', 'seo_settings_update')->name('seo_settings.update');

        //Elements
        Route::any('elements/manage/products', 'element_products')->name('element_products');
        Route::any('elements/categories', 'element_categories')->name('element_categories');
        Route::get('element/product-create', 'product_create')->name('product_create');
        Route::post('element/upload-product', 'upload_product')->name('upload_product');
        Route::get('element/product/delete/{id}', 'element_product_delete')->name('element_product_delete');
        Route::get('element/product-edit/{product_id}', 'product_edit')->name('product_edit');
        Route::post('element/update-product/{product_id}', 'update_product')->name('update_product');
        Route::get('element/subscription-list', 'subscription_list')->name('subscription_list');

        Route::get('element_category/{parent_id}', 'category_wise_sub_category')->name('category_wise_sub_category');

        //Language settings routes
        Route::get('manage_language/{language?}', 'manageLanguage')->name('language.manage_language');
        Route::post('language/language_add', 'addLanguage')->name('language.language_add');
        Route::any('language/{language?}', 'updatedPhrase')->name('language.update_phrase');
        Route::get('language/delete/{name}', 'deleteLanguage')->name('language.delete');
        Route::post('change_language', 'user_language')->name('user_language');
        
        //Payment Request
        Route::get('payment-request', 'paymentRequestView')->name('payment_request');
        Route::get('payment-request-approve/{id}', 'paymentRequestAprrove')->name('paymentRequestApprove');
        Route::get('payment-request-delete/{id}', 'paymentRequestDelete')->name('paymentRequestDelete');
        Route::get('subpayment-request-approve/{id}', 'subpaymentRequestApprove')->name('subpaymentRequestApprove');
        Route::get('subpayment-request-delete/{id}', 'subpaymentRequestDelete')->name('subpaymentRequestDelete');
    });
});
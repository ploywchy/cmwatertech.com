<?php

namespace PHPMaker2021\inplaze;

use Slim\App;
use Slim\Routing\RouteCollectorProxy;

// Handle Routes
return function (App $app) {
    // blog
    $app->any('/BlogList[/{Blog_ID}]', BlogController::class . ':list')->add(PermissionMiddleware::class)->setName('BlogList-blog-list'); // list
    $app->any('/BlogAdd[/{Blog_ID}]', BlogController::class . ':add')->add(PermissionMiddleware::class)->setName('BlogAdd-blog-add'); // add
    $app->any('/BlogView[/{Blog_ID}]', BlogController::class . ':view')->add(PermissionMiddleware::class)->setName('BlogView-blog-view'); // view
    $app->any('/BlogEdit[/{Blog_ID}]', BlogController::class . ':edit')->add(PermissionMiddleware::class)->setName('BlogEdit-blog-edit'); // edit
    $app->any('/BlogDelete[/{Blog_ID}]', BlogController::class . ':delete')->add(PermissionMiddleware::class)->setName('BlogDelete-blog-delete'); // delete
    $app->group(
        '/blog',
        function (RouteCollectorProxy $group) {
            $group->any('/' . Config("LIST_ACTION") . '[/{Blog_ID}]', BlogController::class . ':list')->add(PermissionMiddleware::class)->setName('blog/list-blog-list-2'); // list
            $group->any('/' . Config("ADD_ACTION") . '[/{Blog_ID}]', BlogController::class . ':add')->add(PermissionMiddleware::class)->setName('blog/add-blog-add-2'); // add
            $group->any('/' . Config("VIEW_ACTION") . '[/{Blog_ID}]', BlogController::class . ':view')->add(PermissionMiddleware::class)->setName('blog/view-blog-view-2'); // view
            $group->any('/' . Config("EDIT_ACTION") . '[/{Blog_ID}]', BlogController::class . ':edit')->add(PermissionMiddleware::class)->setName('blog/edit-blog-edit-2'); // edit
            $group->any('/' . Config("DELETE_ACTION") . '[/{Blog_ID}]', BlogController::class . ':delete')->add(PermissionMiddleware::class)->setName('blog/delete-blog-delete-2'); // delete
        }
    );

    // category
    $app->any('/CategoryList[/{Category_ID}]', CategoryController::class . ':list')->add(PermissionMiddleware::class)->setName('CategoryList-category-list'); // list
    $app->any('/CategoryAdd[/{Category_ID}]', CategoryController::class . ':add')->add(PermissionMiddleware::class)->setName('CategoryAdd-category-add'); // add
    $app->any('/CategoryAddopt', CategoryController::class . ':addopt')->add(PermissionMiddleware::class)->setName('CategoryAddopt-category-addopt'); // addopt
    $app->any('/CategoryEdit[/{Category_ID}]', CategoryController::class . ':edit')->add(PermissionMiddleware::class)->setName('CategoryEdit-category-edit'); // edit
    $app->any('/CategoryDelete[/{Category_ID}]', CategoryController::class . ':delete')->add(PermissionMiddleware::class)->setName('CategoryDelete-category-delete'); // delete
    $app->group(
        '/category',
        function (RouteCollectorProxy $group) {
            $group->any('/' . Config("LIST_ACTION") . '[/{Category_ID}]', CategoryController::class . ':list')->add(PermissionMiddleware::class)->setName('category/list-category-list-2'); // list
            $group->any('/' . Config("ADD_ACTION") . '[/{Category_ID}]', CategoryController::class . ':add')->add(PermissionMiddleware::class)->setName('category/add-category-add-2'); // add
            $group->any('/' . Config("ADDOPT_ACTION") . '', CategoryController::class . ':addopt')->add(PermissionMiddleware::class)->setName('category/addopt-category-addopt-2'); // addopt
            $group->any('/' . Config("EDIT_ACTION") . '[/{Category_ID}]', CategoryController::class . ':edit')->add(PermissionMiddleware::class)->setName('category/edit-category-edit-2'); // edit
            $group->any('/' . Config("DELETE_ACTION") . '[/{Category_ID}]', CategoryController::class . ':delete')->add(PermissionMiddleware::class)->setName('category/delete-category-delete-2'); // delete
        }
    );

    // contents
    $app->any('/ContentsList[/{Content_ID}]', ContentsController::class . ':list')->add(PermissionMiddleware::class)->setName('ContentsList-contents-list'); // list
    $app->any('/ContentsAdd[/{Content_ID}]', ContentsController::class . ':add')->add(PermissionMiddleware::class)->setName('ContentsAdd-contents-add'); // add
    $app->any('/ContentsView[/{Content_ID}]', ContentsController::class . ':view')->add(PermissionMiddleware::class)->setName('ContentsView-contents-view'); // view
    $app->any('/ContentsEdit[/{Content_ID}]', ContentsController::class . ':edit')->add(PermissionMiddleware::class)->setName('ContentsEdit-contents-edit'); // edit
    $app->any('/ContentsDelete[/{Content_ID}]', ContentsController::class . ':delete')->add(PermissionMiddleware::class)->setName('ContentsDelete-contents-delete'); // delete
    $app->group(
        '/contents',
        function (RouteCollectorProxy $group) {
            $group->any('/' . Config("LIST_ACTION") . '[/{Content_ID}]', ContentsController::class . ':list')->add(PermissionMiddleware::class)->setName('contents/list-contents-list-2'); // list
            $group->any('/' . Config("ADD_ACTION") . '[/{Content_ID}]', ContentsController::class . ':add')->add(PermissionMiddleware::class)->setName('contents/add-contents-add-2'); // add
            $group->any('/' . Config("VIEW_ACTION") . '[/{Content_ID}]', ContentsController::class . ':view')->add(PermissionMiddleware::class)->setName('contents/view-contents-view-2'); // view
            $group->any('/' . Config("EDIT_ACTION") . '[/{Content_ID}]', ContentsController::class . ':edit')->add(PermissionMiddleware::class)->setName('contents/edit-contents-edit-2'); // edit
            $group->any('/' . Config("DELETE_ACTION") . '[/{Content_ID}]', ContentsController::class . ':delete')->add(PermissionMiddleware::class)->setName('contents/delete-contents-delete-2'); // delete
        }
    );

    // image
    $app->any('/ImageList[/{Image_ID}]', ImageController::class . ':list')->add(PermissionMiddleware::class)->setName('ImageList-image-list'); // list
    $app->any('/ImageAdd[/{Image_ID}]', ImageController::class . ':add')->add(PermissionMiddleware::class)->setName('ImageAdd-image-add'); // add
    $app->any('/ImageView[/{Image_ID}]', ImageController::class . ':view')->add(PermissionMiddleware::class)->setName('ImageView-image-view'); // view
    $app->any('/ImageEdit[/{Image_ID}]', ImageController::class . ':edit')->add(PermissionMiddleware::class)->setName('ImageEdit-image-edit'); // edit
    $app->any('/ImageDelete[/{Image_ID}]', ImageController::class . ':delete')->add(PermissionMiddleware::class)->setName('ImageDelete-image-delete'); // delete
    $app->group(
        '/image',
        function (RouteCollectorProxy $group) {
            $group->any('/' . Config("LIST_ACTION") . '[/{Image_ID}]', ImageController::class . ':list')->add(PermissionMiddleware::class)->setName('image/list-image-list-2'); // list
            $group->any('/' . Config("ADD_ACTION") . '[/{Image_ID}]', ImageController::class . ':add')->add(PermissionMiddleware::class)->setName('image/add-image-add-2'); // add
            $group->any('/' . Config("VIEW_ACTION") . '[/{Image_ID}]', ImageController::class . ':view')->add(PermissionMiddleware::class)->setName('image/view-image-view-2'); // view
            $group->any('/' . Config("EDIT_ACTION") . '[/{Image_ID}]', ImageController::class . ':edit')->add(PermissionMiddleware::class)->setName('image/edit-image-edit-2'); // edit
            $group->any('/' . Config("DELETE_ACTION") . '[/{Image_ID}]', ImageController::class . ':delete')->add(PermissionMiddleware::class)->setName('image/delete-image-delete-2'); // delete
        }
    );

    // product
    $app->any('/ProductList[/{Product_ID}]', ProductController::class . ':list')->add(PermissionMiddleware::class)->setName('ProductList-product-list'); // list
    $app->any('/ProductAdd[/{Product_ID}]', ProductController::class . ':add')->add(PermissionMiddleware::class)->setName('ProductAdd-product-add'); // add
    $app->any('/ProductEdit[/{Product_ID}]', ProductController::class . ':edit')->add(PermissionMiddleware::class)->setName('ProductEdit-product-edit'); // edit
    $app->any('/ProductDelete[/{Product_ID}]', ProductController::class . ':delete')->add(PermissionMiddleware::class)->setName('ProductDelete-product-delete'); // delete
    $app->group(
        '/product',
        function (RouteCollectorProxy $group) {
            $group->any('/' . Config("LIST_ACTION") . '[/{Product_ID}]', ProductController::class . ':list')->add(PermissionMiddleware::class)->setName('product/list-product-list-2'); // list
            $group->any('/' . Config("ADD_ACTION") . '[/{Product_ID}]', ProductController::class . ':add')->add(PermissionMiddleware::class)->setName('product/add-product-add-2'); // add
            $group->any('/' . Config("EDIT_ACTION") . '[/{Product_ID}]', ProductController::class . ':edit')->add(PermissionMiddleware::class)->setName('product/edit-product-edit-2'); // edit
            $group->any('/' . Config("DELETE_ACTION") . '[/{Product_ID}]', ProductController::class . ':delete')->add(PermissionMiddleware::class)->setName('product/delete-product-delete-2'); // delete
        }
    );

    // tag
    $app->any('/TagList[/{Tag_ID}]', TagController::class . ':list')->add(PermissionMiddleware::class)->setName('TagList-tag-list'); // list
    $app->any('/TagAdd[/{Tag_ID}]', TagController::class . ':add')->add(PermissionMiddleware::class)->setName('TagAdd-tag-add'); // add
    $app->any('/TagAddopt', TagController::class . ':addopt')->add(PermissionMiddleware::class)->setName('TagAddopt-tag-addopt'); // addopt
    $app->any('/TagView[/{Tag_ID}]', TagController::class . ':view')->add(PermissionMiddleware::class)->setName('TagView-tag-view'); // view
    $app->any('/TagEdit[/{Tag_ID}]', TagController::class . ':edit')->add(PermissionMiddleware::class)->setName('TagEdit-tag-edit'); // edit
    $app->any('/TagDelete[/{Tag_ID}]', TagController::class . ':delete')->add(PermissionMiddleware::class)->setName('TagDelete-tag-delete'); // delete
    $app->group(
        '/tag',
        function (RouteCollectorProxy $group) {
            $group->any('/' . Config("LIST_ACTION") . '[/{Tag_ID}]', TagController::class . ':list')->add(PermissionMiddleware::class)->setName('tag/list-tag-list-2'); // list
            $group->any('/' . Config("ADD_ACTION") . '[/{Tag_ID}]', TagController::class . ':add')->add(PermissionMiddleware::class)->setName('tag/add-tag-add-2'); // add
            $group->any('/' . Config("ADDOPT_ACTION") . '', TagController::class . ':addopt')->add(PermissionMiddleware::class)->setName('tag/addopt-tag-addopt-2'); // addopt
            $group->any('/' . Config("VIEW_ACTION") . '[/{Tag_ID}]', TagController::class . ':view')->add(PermissionMiddleware::class)->setName('tag/view-tag-view-2'); // view
            $group->any('/' . Config("EDIT_ACTION") . '[/{Tag_ID}]', TagController::class . ':edit')->add(PermissionMiddleware::class)->setName('tag/edit-tag-edit-2'); // edit
            $group->any('/' . Config("DELETE_ACTION") . '[/{Tag_ID}]', TagController::class . ':delete')->add(PermissionMiddleware::class)->setName('tag/delete-tag-delete-2'); // delete
        }
    );

    // text
    $app->any('/TextList[/{Content_ID}]', TextController::class . ':list')->add(PermissionMiddleware::class)->setName('TextList-text-list'); // list
    $app->any('/TextAdd[/{Content_ID}]', TextController::class . ':add')->add(PermissionMiddleware::class)->setName('TextAdd-text-add'); // add
    $app->any('/TextView[/{Content_ID}]', TextController::class . ':view')->add(PermissionMiddleware::class)->setName('TextView-text-view'); // view
    $app->any('/TextEdit[/{Content_ID}]', TextController::class . ':edit')->add(PermissionMiddleware::class)->setName('TextEdit-text-edit'); // edit
    $app->any('/TextDelete[/{Content_ID}]', TextController::class . ':delete')->add(PermissionMiddleware::class)->setName('TextDelete-text-delete'); // delete
    $app->group(
        '/text',
        function (RouteCollectorProxy $group) {
            $group->any('/' . Config("LIST_ACTION") . '[/{Content_ID}]', TextController::class . ':list')->add(PermissionMiddleware::class)->setName('text/list-text-list-2'); // list
            $group->any('/' . Config("ADD_ACTION") . '[/{Content_ID}]', TextController::class . ':add')->add(PermissionMiddleware::class)->setName('text/add-text-add-2'); // add
            $group->any('/' . Config("VIEW_ACTION") . '[/{Content_ID}]', TextController::class . ':view')->add(PermissionMiddleware::class)->setName('text/view-text-view-2'); // view
            $group->any('/' . Config("EDIT_ACTION") . '[/{Content_ID}]', TextController::class . ':edit')->add(PermissionMiddleware::class)->setName('text/edit-text-edit-2'); // edit
            $group->any('/' . Config("DELETE_ACTION") . '[/{Content_ID}]', TextController::class . ':delete')->add(PermissionMiddleware::class)->setName('text/delete-text-delete-2'); // delete
        }
    );

    // user
    $app->any('/UserList[/{User_ID}]', UserController::class . ':list')->add(PermissionMiddleware::class)->setName('UserList-user-list'); // list
    $app->any('/UserAdd[/{User_ID}]', UserController::class . ':add')->add(PermissionMiddleware::class)->setName('UserAdd-user-add'); // add
    $app->any('/UserEdit[/{User_ID}]', UserController::class . ':edit')->add(PermissionMiddleware::class)->setName('UserEdit-user-edit'); // edit
    $app->any('/UserDelete[/{User_ID}]', UserController::class . ':delete')->add(PermissionMiddleware::class)->setName('UserDelete-user-delete'); // delete
    $app->group(
        '/user',
        function (RouteCollectorProxy $group) {
            $group->any('/' . Config("LIST_ACTION") . '[/{User_ID}]', UserController::class . ':list')->add(PermissionMiddleware::class)->setName('user/list-user-list-2'); // list
            $group->any('/' . Config("ADD_ACTION") . '[/{User_ID}]', UserController::class . ':add')->add(PermissionMiddleware::class)->setName('user/add-user-add-2'); // add
            $group->any('/' . Config("EDIT_ACTION") . '[/{User_ID}]', UserController::class . ':edit')->add(PermissionMiddleware::class)->setName('user/edit-user-edit-2'); // edit
            $group->any('/' . Config("DELETE_ACTION") . '[/{User_ID}]', UserController::class . ':delete')->add(PermissionMiddleware::class)->setName('user/delete-user-delete-2'); // delete
        }
    );

    // user_level2
    $app->any('/UserLevel2List[/{User_Level_ID}]', UserLevel2Controller::class . ':list')->add(PermissionMiddleware::class)->setName('UserLevel2List-user_level2-list'); // list
    $app->any('/UserLevel2Add[/{User_Level_ID}]', UserLevel2Controller::class . ':add')->add(PermissionMiddleware::class)->setName('UserLevel2Add-user_level2-add'); // add
    $app->any('/UserLevel2Edit[/{User_Level_ID}]', UserLevel2Controller::class . ':edit')->add(PermissionMiddleware::class)->setName('UserLevel2Edit-user_level2-edit'); // edit
    $app->any('/UserLevel2Delete[/{User_Level_ID}]', UserLevel2Controller::class . ':delete')->add(PermissionMiddleware::class)->setName('UserLevel2Delete-user_level2-delete'); // delete
    $app->group(
        '/user_level2',
        function (RouteCollectorProxy $group) {
            $group->any('/' . Config("LIST_ACTION") . '[/{User_Level_ID}]', UserLevel2Controller::class . ':list')->add(PermissionMiddleware::class)->setName('user_level2/list-user_level2-list-2'); // list
            $group->any('/' . Config("ADD_ACTION") . '[/{User_Level_ID}]', UserLevel2Controller::class . ':add')->add(PermissionMiddleware::class)->setName('user_level2/add-user_level2-add-2'); // add
            $group->any('/' . Config("EDIT_ACTION") . '[/{User_Level_ID}]', UserLevel2Controller::class . ':edit')->add(PermissionMiddleware::class)->setName('user_level2/edit-user_level2-edit-2'); // edit
            $group->any('/' . Config("DELETE_ACTION") . '[/{User_Level_ID}]', UserLevel2Controller::class . ':delete')->add(PermissionMiddleware::class)->setName('user_level2/delete-user_level2-delete-2'); // delete
        }
    );

    // error
    $app->any('/error', OthersController::class . ':error')->add(PermissionMiddleware::class)->setName('error');

    // personal_data
    $app->any('/personaldata', OthersController::class . ':personaldata')->add(PermissionMiddleware::class)->setName('personaldata');

    // login
    $app->any('/login', OthersController::class . ':login')->add(PermissionMiddleware::class)->setName('login');

    // change_password
    $app->any('/changepassword', OthersController::class . ':changepassword')->add(PermissionMiddleware::class)->setName('changepassword');

    // userpriv
    $app->any('/userpriv', OthersController::class . ':userpriv')->add(PermissionMiddleware::class)->setName('userpriv');

    // logout
    $app->any('/logout', OthersController::class . ':logout')->add(PermissionMiddleware::class)->setName('logout');

    // Index
    $app->any('/[index]', OthersController::class . ':index')->add(PermissionMiddleware::class)->setName('index');

    // Route Action event
    if (function_exists(PROJECT_NAMESPACE . "Route_Action")) {
        Route_Action($app);
    }

    /**
     * Catch-all route to serve a 404 Not Found page if none of the routes match
     * NOTE: Make sure this route is defined last.
     */
    $app->map(
        ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'],
        '/{routes:.+}',
        function ($request, $response, $params) {
            $error = [
                "statusCode" => "404",
                "error" => [
                    "class" => "text-warning",
                    "type" => Container("language")->phrase("Error"),
                    "description" => str_replace("%p", $params["routes"], Container("language")->phrase("PageNotFound")),
                ],
            ];
            Container("flash")->addMessage("error", $error);
            return $response->withStatus(302)->withHeader("Location", GetUrl("error")); // Redirect to error page
        }
    );
};

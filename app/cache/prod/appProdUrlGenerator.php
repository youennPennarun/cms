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
    static private $declaredRoutes = array(
        'ini-settings' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\InitialisationController::initialisationDbAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ini/',    ),  ),  4 =>   array (  ),),
        'ini-settings-createDB' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\InitialisationController::createDBAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ini/createDB',    ),  ),  4 =>   array (  ),),
        'ini-settings-admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\InitialisationController::initialisationAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ini/admin',    ),  ),  4 =>   array (  ),),
        'ini-cache' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\InitialisationController::cacheClearAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ini/cacheClear',    ),  ),  4 =>   array (  ),),
        'Settings-GetTemplate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\TemplatesController::getTemplateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/new-template/step-1',    ),  ),  4 =>   array (  ),),
        'Settings-initTemplate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\TemplatesController::initTemplateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/new-template/step-2',    ),  ),  4 =>   array (  ),),
        'Settings-otherAssetsUpload' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\TemplatesController::otherAssetsUploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/new-template/step-3',    ),  ),  4 =>   array (  ),),
        'Settings-selectTemplate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\TemplatesController::selectTemplateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/new-page/step-1',    ),  ),  4 =>   array (  ),),
        'Settings-manageTemplates' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\TemplatesController::manageTemplatesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/manage-templates',    ),  ),  4 =>   array (  ),),
        'Settings-newCategory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\CategoriesController::newCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/new-category',    ),  ),  4 =>   array (  ),),
        'Settings-manageCategories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\CategoriesController::manageCategoriesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/manage-categories',    ),  ),  4 =>   array (  ),),
        'Category-selectCat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\CategoriesController::selectCatPageSettingsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Categories/select-Settings',    ),  ),  4 =>   array (  ),),
        'Category-getCatPages' => array (  0 =>   array (    0 => 'categoryName',  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\CategoriesController::getCategoryPagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categoryName',    ),    1 =>     array (      0 => 'text',      1 => '/Settings/Categories/getCatPage',    ),  ),  4 =>   array (  ),),
        'Settings' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\SettingsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/',    ),  ),  4 =>   array (  ),),
        'Settings-newPage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\PagesController::newPageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/new-page/step-2',    ),  ),  4 =>   array (  ),),
        'Settings-browsePages' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\PagesController::browsePagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/browse-pages',    ),  ),  4 =>   array (  ),),
        'Settings-editPage' => array (  0 =>   array (    0 => 'pageName',  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\PagesController::editPagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pageName',    ),    1 =>     array (      0 => 'text',      1 => '/Settings/edit-page',    ),  ),  4 =>   array (  ),),
        'Settings-changeTemplate' => array (  0 =>   array (    0 => 'pageName',  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\PagesController::changeTemplateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pageName',    ),    1 =>     array (      0 => 'text',      1 => '/Settings/change-template',    ),  ),  4 =>   array (  ),),
        'Settings-settingsPage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\PagesController::pageSettingsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/page-settings',    ),  ),  4 =>   array (  ),),
        'Settings-newMenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\MenuController::newMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Menu/new-menu',    ),  ),  4 =>   array (  ),),
        'Settings-manageMenus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\MenuController::manageMenusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Menu/manage-menus',    ),  ),  4 =>   array (  ),),
        'Settings-editMenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\MenuController::editMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Menu/edit-menu',    ),  ),  4 =>   array (  ),),
        'Settings-getMenuRender' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\MenuController::getMenuViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Settings/Menu/getMenu',    ),  ),  4 =>   array (  ),),
        'Settings-selectMenuWysiwyg' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\MenuController::selectMenuWysiwygAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Menu/select-menu-wysiwyg',    ),  ),  4 =>   array (  ),),
        'Settings-getLog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\DebugController::getLogAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Debug/getLog',    ),  ),  4 =>   array (  ),),
        'Settings-clearLog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\DebugController::clearLogAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Debug/clearLog',    ),  ),  4 =>   array (  ),),
        'Settings-adminMail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\MailingController::adminMailerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/mailing',    ),  ),  4 =>   array (  ),),
        'Uploads-uploadImage-wysiwyg' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\UploadsController::imagesWysiwygAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Uploads/Images-wysiwyg',    ),  ),  4 =>   array (  ),),
        'Uploads-uploadImage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\UploadsController::imagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Uploads/Images',    ),  ),  4 =>   array (  ),),
        'Uploads-browseImage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\UploadsController::browseImagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Uploads/browse-images',    ),  ),  4 =>   array (  ),),
        'Uploads-selectImage-wysiwyg' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\UploadsController::selectImagesWysiwygAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/Uploads/selectImage-wysiwyg',    ),  ),  4 =>   array (  ),),
        'User-Sign-up' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\UserController::SignUpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/Sign-up',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/logout',    ),  ),  4 =>   array (  ),),
        'User-manageUsers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\UserController::manageUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/User/manage-users',    ),  ),  4 =>   array (  ),),
        'Check-User-Username' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\UserController::checkUserNameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Settings/User/check-username/{{ username }}',    ),  ),  4 =>   array (  ),),
        'Index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\WebSiteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'PageNoFound' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\WebSiteController::pageNoFoundAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/page-no-found',    ),  ),  4 =>   array (  ),),
        'Page' => array (  0 =>   array (    0 => 'path',  ),  1 =>   array (    '_controller' => 'Cms\\WebSiteBundle\\Controller\\WebSiteController::pageAction',  ),  2 =>   array (    'path' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}

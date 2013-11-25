<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/ini')) {
            // ini-settings
            if (rtrim($pathinfo, '/') === '/ini') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ini-settings');
                }

                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\InitialisationController::initialisationDbAction',  '_route' => 'ini-settings',);
            }

            // ini-settings-createDB
            if ($pathinfo === '/ini/createDB') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\InitialisationController::createDBAction',  '_route' => 'ini-settings-createDB',);
            }

            // ini-settings-admin
            if ($pathinfo === '/ini/admin') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\InitialisationController::initialisationAdminAction',  '_route' => 'ini-settings-admin',);
            }

            // ini-cache
            if ($pathinfo === '/ini/cacheClear') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\InitialisationController::cacheClearAction',  '_route' => 'ini-cache',);
            }

        }

        if (0 === strpos($pathinfo, '/Settings')) {
            if (0 === strpos($pathinfo, '/Settings/new-')) {
                if (0 === strpos($pathinfo, '/Settings/new-template/step-')) {
                    // Settings-GetTemplate
                    if ($pathinfo === '/Settings/new-template/step-1') {
                        return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\TemplatesController::getTemplateAction',  '_route' => 'Settings-GetTemplate',);
                    }

                    // Settings-initTemplate
                    if ($pathinfo === '/Settings/new-template/step-2') {
                        return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\TemplatesController::initTemplateAction',  '_route' => 'Settings-initTemplate',);
                    }

                    // Settings-otherAssetsUpload
                    if ($pathinfo === '/Settings/new-template/step-3') {
                        return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\TemplatesController::otherAssetsUploadAction',  '_route' => 'Settings-otherAssetsUpload',);
                    }

                }

                // Settings-selectTemplate
                if ($pathinfo === '/Settings/new-page/step-1') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\TemplatesController::selectTemplateAction',  '_route' => 'Settings-selectTemplate',);
                }

            }

            // Settings-manageTemplates
            if ($pathinfo === '/Settings/manage-templates') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\TemplatesController::manageTemplatesAction',  '_route' => 'Settings-manageTemplates',);
            }

            // Settings-newCategory
            if ($pathinfo === '/Settings/new-category') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\CategoriesController::newCategoryAction',  '_route' => 'Settings-newCategory',);
            }

            // Settings-manageCategories
            if ($pathinfo === '/Settings/manage-categories') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\CategoriesController::manageCategoriesAction',  '_route' => 'Settings-manageCategories',);
            }

            if (0 === strpos($pathinfo, '/Settings/Categories')) {
                // Category-selectCat
                if ($pathinfo === '/Settings/Categories/select-Settings') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\CategoriesController::selectCatPageSettingsAction',  '_route' => 'Category-selectCat',);
                }

                // Category-getCatPages
                if (0 === strpos($pathinfo, '/Settings/Categories/getCatPage') && preg_match('#^/Settings/Categories/getCatPage/(?P<categoryName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Category-getCatPages')), array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\CategoriesController::getCategoryPagesAction',));
                }

            }

            // Settings
            if (rtrim($pathinfo, '/') === '/Settings') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Settings');
                }

                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\SettingsController::indexAction',  '_route' => 'Settings',);
            }

            // Settings-newPage
            if ($pathinfo === '/Settings/new-page/step-2') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\PagesController::newPageAction',  '_route' => 'Settings-newPage',);
            }

            // Settings-browsePages
            if ($pathinfo === '/Settings/browse-pages') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\PagesController::browsePagesAction',  '_route' => 'Settings-browsePages',);
            }

            // Settings-editPage
            if (0 === strpos($pathinfo, '/Settings/edit-page') && preg_match('#^/Settings/edit\\-page/(?P<pageName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Settings-editPage')), array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\PagesController::editPagesAction',));
            }

            // Settings-settingsPage
            if ($pathinfo === '/Settings/page-settings') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\PagesController::pageSettingsAction',  '_route' => 'Settings-settingsPage',);
            }

            if (0 === strpos($pathinfo, '/Settings/Menu')) {
                // Settings-newMenu
                if ($pathinfo === '/Settings/Menu/new-menu') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\MenuController::newMenuAction',  '_route' => 'Settings-newMenu',);
                }

                // Settings-manageMenus
                if ($pathinfo === '/Settings/Menu/manage-menus') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\MenuController::manageMenusAction',  '_route' => 'Settings-manageMenus',);
                }

                // Settings-editMenu
                if ($pathinfo === '/Settings/Menu/edit-menu') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\MenuController::editMenuAction',  '_route' => 'Settings-editMenu',);
                }

                // Settings-getMenuRender
                if (0 === strpos($pathinfo, '/Settings/Menu/getMenu') && preg_match('#^/Settings/Menu/getMenu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Settings-getMenuRender')), array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\MenuController::getMenuViewAction',));
                }

                // Settings-selectMenuWysiwyg
                if ($pathinfo === '/Settings/Menu/select-menu-wysiwyg') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\MenuController::selectMenuWysiwygAction',  '_route' => 'Settings-selectMenuWysiwyg',);
                }

            }

            if (0 === strpos($pathinfo, '/Settings/Debug')) {
                // Settings-getLog
                if ($pathinfo === '/Settings/Debug/getLog') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\DebugController::getLogAction',  '_route' => 'Settings-getLog',);
                }

                // Settings-clearLog
                if ($pathinfo === '/Settings/Debug/clearLog') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\DebugController::clearLogAction',  '_route' => 'Settings-clearLog',);
                }

            }

            // Settings-adminMail
            if ($pathinfo === '/Settings/mailing') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\MailingController::adminMailerAction',  '_route' => 'Settings-adminMail',);
            }

            if (0 === strpos($pathinfo, '/Settings/Uploads')) {
                if (0 === strpos($pathinfo, '/Settings/Uploads/Images')) {
                    // Uploads-uploadImage-wysiwyg
                    if ($pathinfo === '/Settings/Uploads/Images-wysiwyg') {
                        return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UploadsController::imagesWysiwygAction',  '_route' => 'Uploads-uploadImage-wysiwyg',);
                    }

                    // Uploads-uploadImage
                    if ($pathinfo === '/Settings/Uploads/Images') {
                        return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UploadsController::imagesAction',  '_route' => 'Uploads-uploadImage',);
                    }

                }

                // Uploads-browseImage
                if ($pathinfo === '/Settings/Uploads/browse-images') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UploadsController::browseImagesAction',  '_route' => 'Uploads-browseImage',);
                }

                // Uploads-selectImage-wysiwyg
                if ($pathinfo === '/Settings/Uploads/selectImage-wysiwyg') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UploadsController::selectImagesWysiwygAction',  '_route' => 'Uploads-selectImage-wysiwyg',);
                }

            }

        }

        // User-Sign-up
        if ($pathinfo === '/User/Sign-up') {
            return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UserController::SignUpAction',  '_route' => 'User-Sign-up',);
        }

        if (0 === strpos($pathinfo, '/Settings')) {
            if (0 === strpos($pathinfo, '/Settings/log')) {
                if (0 === strpos($pathinfo, '/Settings/login')) {
                    // login
                    if ($pathinfo === '/Settings/login') {
                        return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
                    }

                    // login_check
                    if ($pathinfo === '/Settings/login_check') {
                        return array('_route' => 'login_check');
                    }

                }

                // logout
                if ($pathinfo === '/Settings/logout') {
                    return array('_route' => 'logout');
                }

            }

            if (0 === strpos($pathinfo, '/Settings/User')) {
                // User-manageUsers
                if ($pathinfo === '/Settings/User/manage-users') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UserController::manageUsersAction',  '_route' => 'User-manageUsers',);
                }

                // Check-User-Username
                if ($pathinfo === '/Settings/User/check-username/{{ username }}') {
                    return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UserController::checkUserNameAction',  '_route' => 'Check-User-Username',);
                }

            }

        }

        // Index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Index');
            }

            return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\WebSiteController::indexAction',  '_route' => 'Index',);
        }

        // PageNoFound
        if ($pathinfo === '/page-no-found') {
            return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\WebSiteController::pageNoFoundAction',  '_route' => 'PageNoFound',);
        }

        // Page
        if (preg_match('#^/(?P<path>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Page')), array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\WebSiteController::pageAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

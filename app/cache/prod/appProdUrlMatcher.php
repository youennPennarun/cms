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
            if ($pathinfo === '/ini') {
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

            // Settings-newPage
            if ($pathinfo === '/Settings/new-page/step-2') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\SettingsController::newPageAction',  '_route' => 'Settings-newPage',);
            }

            // Settings-pagePreview
            if ($pathinfo === '/Settings/preview') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\SettingsController::pagePreviewAction',  '_route' => 'Settings-pagePreview',);
            }

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
            if ($pathinfo === '/Settings/images') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UploadsController::browseImagesAction',  '_route' => 'Uploads-browseImage',);
            }

            // Uploads-selectImage-wysiwyg
            if ($pathinfo === '/Settings/Uploads/selectImage-wysiwyg') {
                return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UploadsController::selectImagesWysiwygAction',  '_route' => 'Uploads-selectImage-wysiwyg',);
            }

        }

        // User-Sign-up
        if ($pathinfo === '/User/Sign-up') {
            return array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\UserController::SignUpAction',  '_route' => 'User-Sign-up',);
        }

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
        if (preg_match('#^/(?P<pageName>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Page')), array (  '_controller' => 'Cms\\WebSiteBundle\\Controller\\WebSiteController::pageAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

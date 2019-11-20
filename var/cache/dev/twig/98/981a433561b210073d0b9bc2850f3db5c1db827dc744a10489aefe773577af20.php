<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front.html.twig */
class __TwigTemplate_bc27209e2abb5aab498a8faddb96b34a7ad71f52e97e5699f81774c647269f23 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Font family -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:400,500,700&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Libary -->
    <link rel=\"stylesheet\"  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/owlcarousel/assets/owl.carouselv2.2.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/owlcarousel/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/slick/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/slick/slick-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"  href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/rangeslider/css/ion.rangeSlider.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"  href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/rangeslider/css/theme.scss.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/rangeslider/css/layout.min.css"), "html", null, true);
        echo "\">

    <!-- Font -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/linearicons/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/linea/styles.css"), "html", null, true);
        echo "\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

    <title>Homepage 02</title>

    ";
        // line 33
        $this->displayBlock('css', $context, $blocks);
        // line 35
        echo "</head>
<body>
<!-- Header -->
<header>

    <!-- Top header -->
    <div class=\"header-topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"st2-info-header\">
                        <ul class=\"st2-info-header-list\">
                            <li class=\"st2-info-li st2-info-phone\">
                                <span>P: (+00) 123 567990</span>
                            </li>
                            <li class=\"st2-info-li st2-info-email\">
                                <span>E: Contact@hamadryad.com</span>
                            </li>
                            <li class=\"st2-info-li\">
                    <span class=\"st2-language\">
                      <select class=\"st2-select\">
                        <option value=\"english\">ENG</option>
                        <option value=\"vietnames\">VN</option>
                      </select>
                    </span>
                                <span class=\"st2-currencies\">
                      <select class=\"st2-select\">
                        <option value=\"english\">USD</option>
                        <option value=\"vietnames\">VNĐ</option>
                      </select>
                    </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"st2-info-myacount\">
                        <ul class=\"st2-myacount-list\">
                            <li class=\"st2-myacount-li st2-myacount\"><a class=\"st2-myacount-link\" href=\"\">My Account</a></li>
                            <li class=\"st2-myacount-li st2-wishlist\"><a class=\"st2-myacount-link\" href=\"\">Wish List(2)</a></li>
                            <li class=\"st2-myacount-li st2-shopping-cart\"><a class=\"st2-myacount-link\" href=\"\">Shopping Cart</a></li>
                            <li class=\"st2-myacount-li st2-checkout\"><a class=\"st2-myacount-link\" href=\"\">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header bottom -->
    <div class=\"header-bottom\">
        <div class=\"header-bottom-st2-wrapper\">
            <div class=\"header-bottom-st2-inner\">
                <div class=\"container\">
                    <div class=\"row js-compare\">
                        <div class=\"col-lg-3 st2-col-lapt-3 col-md-3 col-3\">
                            <div class=\"st2-header-logo\">
                                <img src=\"images/homepage2/logo-footer.jpg\" alt=\"Logo\">
                            </div>
                        </div>
                        <div class=\"col-lg-6 hide-reponsive js-dad\">
                            <!-- Menu -->
                            <div class=\"st2-hamadryad-menu\">
                                <nav>
                                    <ul class=\"st2-menu-primary\">
                                        <li class=\"st2-li-primary\">
                                            <a class=\"st2-item-link\" href=\"Homepage01.html\">Home</a>
                                            <!-- Drop menu -->
                                            <div class=\"dropmenu-v2 dropmenu-bg-active1\">
                                                <ul class=\"dropdown-menu-list\">
                                                    <li class=\"level2\"><a href=\"Homepage01.html\" class=\"level2-link\" title=\"Homepage v1\">Homepage v1</a></li>
                                                    <li class=\"level2\"><a href=\"Homepage02.html\" class=\"level2-link\" title=\"Homepage v2\">Homepage v2</a></li>
                                                    <li class=\"level2\"><a href=\"Homepage03.html\" class=\"level2-link\" title=\"Homepage v3\">Homepage v3</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class=\"st2-li-primary\">
                                            <a class=\"st2-item-link\" href=\"List_ShopPageFullWidth.html\">Shop</a>
                                            <!-- submenu home -->
                                            <div class=\"st2-hamadryad-megamenu megamenu-home js-dropmenu megamenu-bg-active1\">
                                                <section class=\"st2-hamadryad-megamenu-modal home\">
                                                    <div class=\"container-fluid\">
                                                        <div class=\"st2-hamadryad-submenu-wrapper\">
                                                            <div class=\"row\">
                                                                <div class=\"st2-submenu-banner\">
                                                                    <img src=\"images/background/bg-menuv1.jpg\" alt=\"Banner\">
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-md-3\">
                                                                    <div class=\"st2-submenu-list-item\">
                                                                        <h2 class=\"st2-submenu-item-title\">Shop</h2>
                                                                        <ul class=\"st2-submenu-item-ul\">
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a class=\"st2-submenu-item-link\" href=\"List_ShopPageFullWidth.html\">Shop Fullwidth</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a class=\"st2-submenu-item-link\" href=\"List_Shop_Sidebar-Left.html\">Shop Sidebar Left</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-md-3\">
                                                                    <div class=\"st2-submenu-list-item\">
                                                                        <h2 class=\"st2-submenu-item-title\">Product Details</h2>
                                                                        <ul class=\"st2-submenu-item-ul\">
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"ProductDetail_v1.html\" class=\"st2-submenu-item-link\">Product detail v1</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"ProductDetail_v2.html\" class=\"st2-submenu-item-link\">Product detail v2</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"ProductDetail_v3.html\" class=\"st2-submenu-item-link\">Product detail v3</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"ProductDetail_v4.html\" class=\"st2-submenu-item-link\">Product detail v4</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-md-3\">
                                                                    <div class=\"st2-submenu-list-item\">
                                                                        <h2 class=\"st2-submenu-item-title\">Pages</h2>
                                                                        <ul class=\"st2-submenu-item-ul\">
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"Hover&Active-v2.html\" class=\"st2-submenu-item-link\">Hover&Active v2</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"Popup.html\" class=\"st2-submenu-item-link\">Popup</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"ContactUs.html\" class=\"st2-submenu-item-link\">Contact us</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-md-3\">
                                                                    <div class=\"st2-submenu-list-item\">
                                                                        <h2 class=\"st2-submenu-item-title\">Table Tree Plant</h2>
                                                                        <ul class=\"st2-submenu-item-ul\">
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"\" class=\"st2-submenu-item-link\">New Arrivals</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"\" class=\"st2-submenu-item-link\">Best Product</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"\" class=\"st2-submenu-item-link\">Deal Of The Week</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"\" class=\"st2-submenu-item-link\">Top Rated</a>
                                                                                <span class=\"st2-submenu-icon lnr lnr-chevron-right\"></span>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"\" class=\"st2-submenu-item-link\">Our Product</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- end submenu home -->
                                        </li>
                                        <li class=\"st2-li-primary\"><a class=\"st2-item-link\" href=\"\">Features</a></li>
                                        <li class=\"st2-li-primary\"><a class=\"st2-item-link\" href=\"\">Portfolio</a></li>
                                        <li class=\"st2-li-primary\">
                                            <a class=\"st2-item-link\" href=\"Blog&New_v1.html\">Blog</a>
                                            <!-- Drop menu -->
                                            <div class=\"dropmenu-v2 dropmenu-bg-active1\">
                                                <ul class=\"dropdown-menu-list\">
                                                    <li class=\"level2\"><a href=\"Blog&New_v1.html\" class=\"level2-link\" title=\"Blog & New 1\">Blog & New 1</a></li>
                                                    <li class=\"level2\"><a href=\"Blog&New_v2.html\" class=\"level2-link\" title=\"Blog & New 1\">Blog & New 2</a></li>
                                                    <li class=\"level2\"><a href=\"Blog&NewPost.html\" class=\"level2-link\" title=\"Blog & New 1\">Blog & New Post</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class=\"st2-li-primary\"><a class=\"st2-item-link\" href=\"AboutUs.html\">About Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"col-lg-3 st2-col-lapt-9 col-md-9 col-9\">
                            <div class=\"st2-control-right\">
                                <div class=\"st2-control\">
                                    <!-- search mobie -->
                                    <div class=\"search-mobie\" data-toggle=\"collapse\" data-target=\"#showSearch\">
                                        <span class=\"lnr lnr-magnifier\"></span>
                                    </div>
                                    <!-- search -->
                                    <div class=\"st2-search-box st2-control-block hide-reponsive\">
                                        <div class=\"st2-search-block\">
                                            <form method=\"get\" class=\"st2-search-form\" action=\"/search\">
                                                <div class=\"at2-search-fields\">
                                                    <div class=\"st2-search-input\">
                                                        <input type=\"search\" class=\"st2-search-field\" placeholder=\"Search ...\" value=\"\" name=\"s\">
                                                        <button type=\"submit\" class=\"st2-search-submit\">
                                                            <span class=\"lnr lnr-magnifier\"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- cart -->
                                    <div class=\"st2-cart-block st2-control-block js-click-cart\">
                                        <div class=\"st2-cart-icon\">
                                            <span class=\"icon-ecommerce-basket\"></span>
                                            <span class=\"st2-cart-number\">2</span>
                                        </div>
                                    </div>
                                    <!-- mega menu -->
                                    <div class=\"st2-megamenu-block st2-control-block js-click-megamenu\">
                                        <div class=\"st2-megamenu-icon\">
                                            <span class=\"lnr lnr-menu\"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Form search -->
                        <form method=\"get\" class=\"search-form collapse\" action=\"/search\" id=\"showSearch\">
                            <div class=\"search-fields\">
                                <div class=\"search-input\">
                                    <span class=\"reset-instant-search-wrap\"></span>
                                    <input type=\"search\" class=\"search-field\" placeholder=\"Instant search ...\" value=\"\" name=\"s\">
                                    <button type=\"submit\" class=\"search-submit\">
                                        <span class=\"lnr lnr-magnifier\"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- End Form search -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mini cart -->
    <div class=\"hamadryad-minicart\">
        <div class=\"hamadryad-minicart-content\">
            <h3 class=\"hamadryad-minicart-title\">Your cart</h3>
            <span class=\"hamadryad-minicart-number\">2</span>
            <div class=\"hamadryad-minicart-close\">
                <i class=\"lnr lnr-cross\"></i>
            </div>
            <div class=\"hamadryad-minicart-list-item\">
                <div class=\"list-item\">
                    <ol class=\"hamadryad-minicart-items\">
                        <li class=\"product-cart\">
                            <a href=\"\" class=\"product-cart-thumb\"><img src=\"images/products/product-1.jpg\" alt=\"\"></a>
                            <div class=\"product-detail\">
                                <div class=\"product-name\"><a href=\"\">Candle Bowl </a></div>
                                <div class=\"product-detail-info\">
                                    <div class=\"product-quality\">QTY : 1</div>
                                    <div class=\"product-cost\">\$169.00</div>
                                </div>
                            </div>
                            <div class=\"product-remove\">
                                <a href=\"\"><i class=\"lnr lnr-cross\"></i></a>
                            </div>
                        </li>
                        <li class=\"product-cart\">
                            <a href=\"\" class=\"product-cart-thumb\"><img src=\"images/products/product-2.jpg\" alt=\"\"></a>
                            <div class=\"product-detail\">
                                <div class=\"product-name\"><a href=\"\">Candle Bowl </a></div>
                                <div class=\"product-detail-info\">
                                    <div class=\"product-quality\">QTY : 1</div>
                                    <div class=\"product-cost\">\$169.00</div>
                                </div>
                            </div>
                            <div class=\"product-remove\">
                                <a href=\"\"><i class=\"lnr lnr-cross\"></i></a>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class=\"subtotal\">
                <span class=\"total-title\">Total:</span>
                <span class=\"total-price\">\$190.00</span>
            </div>
            <div class=\"hamadryad-minicart-action\">
                <div class=\"btn-action-minicart viewcart\">Viewcart</div>
                <div class=\"btn-action-minicart checkout\">Checkout</div>
            </div>
        </div>
    </div>
    <div class=\"minicart-bg-overlay\" style=\"display: none;\"></div>

    <!-- Menu mobie -->
    <div class=\"box-mobile-menu\">
        <span class=\"box-title\">Menu</span>
        <a href=\"#\" class=\"close-menu\" id=\"pull-closemenu\">
            <i class=\"lnr lnr-cross\"></i>
        </a>
        <div class=\"menu-clone\">
            <ul class=\"main-menu\">
                <li class=\"menu-item menu-item-has-children\">
                    <a href=\"Homepage01.html\">Home</a>
                    <span class=\"toggle-submenu\"></span>
                    <div class=\"submenu\">
                        <div class=\"col-12 col-md-12 custom-col\">
                            <div class=\"col-inner\">
                                <div class=\"col-wrapper-item\">
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Homepage01.html\">Homepage v1</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Homepage02.html\">Homepage v2</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Homepage03.html\">Homepage v3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"menu-item menu-item-has-children\">
                    <a href=\"List_ShopPageFullWidth.html\">Shop</a>
                    <span class=\"toggle-submenu\"></span>
                    <div class=\"submenu\">
                        <div class=\"col-12 col-md-12 custom-col\">
                            <div class=\"col-inner\">
                                <div class=\"col-wrapper-item\">
                                    <h2 class=\"widget-title\">Shop</h2>
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"List_ShopPageFullWidth.html\">Shop Fullwidth</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"List_Shop_Sidebar-Left.html\">Shop Sidebar Left</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-wrapper-item\">
                                    <h2 class=\"widget-title\">Product Details</h2>
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"ProductDetail_v1.html\">Product detail v1</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"ProductDetail_v2.html\">Product detail v2</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"ProductDetail_v3.html\">Product detail v3</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"ProductDetail_v4.html\">Product detail v4</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-wrapper-item\">
                                    <h2 class=\"widget-title\">Pages</h2>
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Hover&Active-v2.html\">Hover&Active v2</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Popup.html\">Popup</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"ContactUs.html\">Contact us</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-wrapper-item\">
                                    <h2 class=\"widget-title\">Table Tree Plant</h2>
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"\">New Arrivals</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"\">Best Product</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"\">Deal Of The Week</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"\">Top Rated</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"\">Our Product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"menu-item menu-item-has-children\"><a href=\"\">Features</a></li>
                <li class=\"menu-item menu-item-has-children\"><a href=\"\">Portfolio</a></li>
                <li class=\"menu-item menu-item-has-children\">
                    <a href=\"Blog&New_v1.html\">Blog</a>
                    <span class=\"toggle-submenu\"></span>
                    <div class=\"submenu\">
                        <div class=\"col-12 col-md-12 custom-col\">
                            <div class=\"col-inner\">
                                <div class=\"col-wrapper-item\">
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Blog&New_v1.html\">Blog & New 1</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Blog&New_v2.html\">Blog & New 1</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Blog&NewPost.html\">Blog & New Post</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"menu-item menu-item-has-children\"><a href=\"AboutUs.html\">About Us</a></li>
            </ul>
        </div>
    </div>
    <div class=\"menu-overlay\"></div>

</header>

<!-- Main content -->
<div class=\"main-content-st2\">
    ";
        // line 428
        $this->displayBlock('content', $context, $blocks);
        // line 430
        echo "</div>

<!-- Footer -->
<footer>
    <div class=\"footer-wrapper-st2\">
        <div class=\"footer-st2\">
            <div class=\"footer-content-st2\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-12 col-md-12 col-lg-3 custom-col-pt col-xl-3\">
                            <div class=\"f-content-st2-logo\">
                                <img src=\"images/homepage2/logo-footer.jpg\" alt=\"Logo\">
                            </div>
                        </div>
                        <div class=\"col-12 col-md-12 col-lg-3 custom-col-pt col-xl-3 align-self-center\">
                            <div class=\"f-content-st2 f-content-st2-address\">
                                <div class=\"flex-custom\">
                                    <div class=\"st2-icon st2-address-icon\">
                                        <span class=\"ti-home\"></span>
                                    </div>
                                    <div class=\"flex-grow-1\">
                        <span class=\"st2-address-text\">
                          Address :PO Box 16122 Collins Street<br> West Victoria 8007, Australia
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-12 col-lg-3 custom-col-pt col-xl-3 align-self-center\">
                            <div class=\"f-content-st2 f-content-st2-email\">
                                <div class=\"flex-custom\">
                      <span class=\"st2-icon st2-email-icon\">
                        <i class=\"ti-email\"></i>
                      </span>
                                    <div class=\"flex-grow-1\">
                        <span class=\"st2-email-text\">
                          Email: <br>Contact@hamadryad.com
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-12 col-lg-3 custom-col-pt col-xl-3 align-self-center\">
                            <div class=\"f-content-st2 f-content-st2-phone\">
                                <div class=\"flex-custom\">
                                    <div class=\"st2-icon st2-phone-icon\">
                                        <span class=\"ti-mobile\"></span>
                                    </div>
                                    <div class=\"flex-grow-1\">
                        <span class=\"st2-phone-text\">
                          Phone: <br>(+68) 123 456 7890
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer-info footer-info-st2\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-4 cl-md-ipad-12 col-lg-6 col-xl-4 order-mobile-cp\">
                            <div class=\"info-copyright\">
                                <span>Copyright © 2019 by EngoTheme All Rights Reserved</span>
                            </div>
                        </div>
                        <div class=\"col-md-4 cl-md-ipad-12 col-lg-3 col-xl-4 order-mobile-pm\">
                            <div class=\"info-payment tx-center\">
                                <span class=\"payment-text\">Payment Options:</span>
                                <img src=\"images/homepage2/payment.jpg\" alt=\"Payment\">
                            </div>
                        </div>
                        <div class=\"col-md-4 cl-md-ipad-12 col-lg-3 col-xl-4 order-mobile-sc\">
                            <div class=\"social-inner-st2 tx-center\">
                                <span class=\"social-text\">Follow us:</span>
                                <div class=\"socials-st2\">
                                    <a href=\"\" class=\"icon-social-st2\">
                                        <i class=\"ti-facebook\"></i>
                                    </a>
                                    <a href=\"\" class=\"icon-social-st2\">
                                        <i class=\"ti-twitter-alt\"></i>
                                    </a>
                                    <a href=\"\" class=\"icon-social-st2\">
                                        <i class=\"ti-pinterest\"></i>
                                    </a>
                                    <a href=\"\" class=\"icon-social-st2\">
                                        <i class=\"ti-youtube\"></i>
                                    </a>
                                    <a href=\"\" class=\"icon-social-st2\">
                                        <i class=\"ti-instagram\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/owlcarousel/owl.carouselv2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/rangeslider/js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
";
        // line 539
        $this->displayBlock('js', $context, $blocks);
        // line 541
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_css($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 34
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 428
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 429
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 539
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 539,  687 => 429,  678 => 428,  668 => 34,  659 => 33,  648 => 541,  646 => 539,  642 => 538,  638 => 537,  634 => 536,  630 => 535,  626 => 534,  622 => 533,  517 => 430,  515 => 428,  120 => 35,  118 => 33,  111 => 29,  107 => 28,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  49 => 9,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Font family -->
    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:400,500,700&display=swap') }}\" rel=\"stylesheet\">

    <!-- Libary -->
    <link rel=\"stylesheet\"  href=\"{{ asset('vendors/owlcarousel/assets/owl.carouselv2.2.css') }}\">
    <link rel=\"stylesheet\"  href=\"{{ asset('vendors/owlcarousel/assets/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\"  href=\"{{ asset('vendors/slick/slick.css') }}\">
    <link rel=\"stylesheet\"  href=\"{{ asset('vendors/slick/slick-theme.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/animate.min.css') }}\">
    <link rel=\"stylesheet\"  href=\"{{ asset('vendors/rangeslider/css/ion.rangeSlider.min.css') }}\"/>
    <link rel=\"stylesheet\"  href=\"{{ asset('vendors/rangeslider/css/theme.scss.css') }}\">
    <link rel=\"stylesheet\"  href=\"{{ asset('vendors/rangeslider/css/layout.min.css') }}\">

    <!-- Font -->
    <link rel=\"stylesheet\" href=\"{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/themify-icons/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/linearicons/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/linea/styles.css') }}\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

    <title>Homepage 02</title>

    {% block css %}
    {% endblock %}
</head>
<body>
<!-- Header -->
<header>

    <!-- Top header -->
    <div class=\"header-topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"st2-info-header\">
                        <ul class=\"st2-info-header-list\">
                            <li class=\"st2-info-li st2-info-phone\">
                                <span>P: (+00) 123 567990</span>
                            </li>
                            <li class=\"st2-info-li st2-info-email\">
                                <span>E: Contact@hamadryad.com</span>
                            </li>
                            <li class=\"st2-info-li\">
                    <span class=\"st2-language\">
                      <select class=\"st2-select\">
                        <option value=\"english\">ENG</option>
                        <option value=\"vietnames\">VN</option>
                      </select>
                    </span>
                                <span class=\"st2-currencies\">
                      <select class=\"st2-select\">
                        <option value=\"english\">USD</option>
                        <option value=\"vietnames\">VNĐ</option>
                      </select>
                    </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"st2-info-myacount\">
                        <ul class=\"st2-myacount-list\">
                            <li class=\"st2-myacount-li st2-myacount\"><a class=\"st2-myacount-link\" href=\"\">My Account</a></li>
                            <li class=\"st2-myacount-li st2-wishlist\"><a class=\"st2-myacount-link\" href=\"\">Wish List(2)</a></li>
                            <li class=\"st2-myacount-li st2-shopping-cart\"><a class=\"st2-myacount-link\" href=\"\">Shopping Cart</a></li>
                            <li class=\"st2-myacount-li st2-checkout\"><a class=\"st2-myacount-link\" href=\"\">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header bottom -->
    <div class=\"header-bottom\">
        <div class=\"header-bottom-st2-wrapper\">
            <div class=\"header-bottom-st2-inner\">
                <div class=\"container\">
                    <div class=\"row js-compare\">
                        <div class=\"col-lg-3 st2-col-lapt-3 col-md-3 col-3\">
                            <div class=\"st2-header-logo\">
                                <img src=\"images/homepage2/logo-footer.jpg\" alt=\"Logo\">
                            </div>
                        </div>
                        <div class=\"col-lg-6 hide-reponsive js-dad\">
                            <!-- Menu -->
                            <div class=\"st2-hamadryad-menu\">
                                <nav>
                                    <ul class=\"st2-menu-primary\">
                                        <li class=\"st2-li-primary\">
                                            <a class=\"st2-item-link\" href=\"Homepage01.html\">Home</a>
                                            <!-- Drop menu -->
                                            <div class=\"dropmenu-v2 dropmenu-bg-active1\">
                                                <ul class=\"dropdown-menu-list\">
                                                    <li class=\"level2\"><a href=\"Homepage01.html\" class=\"level2-link\" title=\"Homepage v1\">Homepage v1</a></li>
                                                    <li class=\"level2\"><a href=\"Homepage02.html\" class=\"level2-link\" title=\"Homepage v2\">Homepage v2</a></li>
                                                    <li class=\"level2\"><a href=\"Homepage03.html\" class=\"level2-link\" title=\"Homepage v3\">Homepage v3</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class=\"st2-li-primary\">
                                            <a class=\"st2-item-link\" href=\"List_ShopPageFullWidth.html\">Shop</a>
                                            <!-- submenu home -->
                                            <div class=\"st2-hamadryad-megamenu megamenu-home js-dropmenu megamenu-bg-active1\">
                                                <section class=\"st2-hamadryad-megamenu-modal home\">
                                                    <div class=\"container-fluid\">
                                                        <div class=\"st2-hamadryad-submenu-wrapper\">
                                                            <div class=\"row\">
                                                                <div class=\"st2-submenu-banner\">
                                                                    <img src=\"images/background/bg-menuv1.jpg\" alt=\"Banner\">
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-md-3\">
                                                                    <div class=\"st2-submenu-list-item\">
                                                                        <h2 class=\"st2-submenu-item-title\">Shop</h2>
                                                                        <ul class=\"st2-submenu-item-ul\">
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a class=\"st2-submenu-item-link\" href=\"List_ShopPageFullWidth.html\">Shop Fullwidth</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a class=\"st2-submenu-item-link\" href=\"List_Shop_Sidebar-Left.html\">Shop Sidebar Left</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-md-3\">
                                                                    <div class=\"st2-submenu-list-item\">
                                                                        <h2 class=\"st2-submenu-item-title\">Product Details</h2>
                                                                        <ul class=\"st2-submenu-item-ul\">
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"ProductDetail_v1.html\" class=\"st2-submenu-item-link\">Product detail v1</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"ProductDetail_v2.html\" class=\"st2-submenu-item-link\">Product detail v2</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"ProductDetail_v3.html\" class=\"st2-submenu-item-link\">Product detail v3</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"ProductDetail_v4.html\" class=\"st2-submenu-item-link\">Product detail v4</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-md-3\">
                                                                    <div class=\"st2-submenu-list-item\">
                                                                        <h2 class=\"st2-submenu-item-title\">Pages</h2>
                                                                        <ul class=\"st2-submenu-item-ul\">
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"Hover&Active-v2.html\" class=\"st2-submenu-item-link\">Hover&Active v2</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"Popup.html\" class=\"st2-submenu-item-link\">Popup</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"ContactUs.html\" class=\"st2-submenu-item-link\">Contact us</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-md-3\">
                                                                    <div class=\"st2-submenu-list-item\">
                                                                        <h2 class=\"st2-submenu-item-title\">Table Tree Plant</h2>
                                                                        <ul class=\"st2-submenu-item-ul\">
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"\" class=\"st2-submenu-item-link\">New Arrivals</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"\" class=\"st2-submenu-item-link\">Best Product</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"\" class=\"st2-submenu-item-link\">Deal Of The Week</a>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"\" class=\"st2-submenu-item-link\">Top Rated</a>
                                                                                <span class=\"st2-submenu-icon lnr lnr-chevron-right\"></span>
                                                                            </li>
                                                                            <li class=\"st2-submenu-item-li\">
                                                                                <a href=\"\" class=\"st2-submenu-item-link\">Our Product</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- end submenu home -->
                                        </li>
                                        <li class=\"st2-li-primary\"><a class=\"st2-item-link\" href=\"\">Features</a></li>
                                        <li class=\"st2-li-primary\"><a class=\"st2-item-link\" href=\"\">Portfolio</a></li>
                                        <li class=\"st2-li-primary\">
                                            <a class=\"st2-item-link\" href=\"Blog&New_v1.html\">Blog</a>
                                            <!-- Drop menu -->
                                            <div class=\"dropmenu-v2 dropmenu-bg-active1\">
                                                <ul class=\"dropdown-menu-list\">
                                                    <li class=\"level2\"><a href=\"Blog&New_v1.html\" class=\"level2-link\" title=\"Blog & New 1\">Blog & New 1</a></li>
                                                    <li class=\"level2\"><a href=\"Blog&New_v2.html\" class=\"level2-link\" title=\"Blog & New 1\">Blog & New 2</a></li>
                                                    <li class=\"level2\"><a href=\"Blog&NewPost.html\" class=\"level2-link\" title=\"Blog & New 1\">Blog & New Post</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class=\"st2-li-primary\"><a class=\"st2-item-link\" href=\"AboutUs.html\">About Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"col-lg-3 st2-col-lapt-9 col-md-9 col-9\">
                            <div class=\"st2-control-right\">
                                <div class=\"st2-control\">
                                    <!-- search mobie -->
                                    <div class=\"search-mobie\" data-toggle=\"collapse\" data-target=\"#showSearch\">
                                        <span class=\"lnr lnr-magnifier\"></span>
                                    </div>
                                    <!-- search -->
                                    <div class=\"st2-search-box st2-control-block hide-reponsive\">
                                        <div class=\"st2-search-block\">
                                            <form method=\"get\" class=\"st2-search-form\" action=\"/search\">
                                                <div class=\"at2-search-fields\">
                                                    <div class=\"st2-search-input\">
                                                        <input type=\"search\" class=\"st2-search-field\" placeholder=\"Search ...\" value=\"\" name=\"s\">
                                                        <button type=\"submit\" class=\"st2-search-submit\">
                                                            <span class=\"lnr lnr-magnifier\"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- cart -->
                                    <div class=\"st2-cart-block st2-control-block js-click-cart\">
                                        <div class=\"st2-cart-icon\">
                                            <span class=\"icon-ecommerce-basket\"></span>
                                            <span class=\"st2-cart-number\">2</span>
                                        </div>
                                    </div>
                                    <!-- mega menu -->
                                    <div class=\"st2-megamenu-block st2-control-block js-click-megamenu\">
                                        <div class=\"st2-megamenu-icon\">
                                            <span class=\"lnr lnr-menu\"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Form search -->
                        <form method=\"get\" class=\"search-form collapse\" action=\"/search\" id=\"showSearch\">
                            <div class=\"search-fields\">
                                <div class=\"search-input\">
                                    <span class=\"reset-instant-search-wrap\"></span>
                                    <input type=\"search\" class=\"search-field\" placeholder=\"Instant search ...\" value=\"\" name=\"s\">
                                    <button type=\"submit\" class=\"search-submit\">
                                        <span class=\"lnr lnr-magnifier\"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- End Form search -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mini cart -->
    <div class=\"hamadryad-minicart\">
        <div class=\"hamadryad-minicart-content\">
            <h3 class=\"hamadryad-minicart-title\">Your cart</h3>
            <span class=\"hamadryad-minicart-number\">2</span>
            <div class=\"hamadryad-minicart-close\">
                <i class=\"lnr lnr-cross\"></i>
            </div>
            <div class=\"hamadryad-minicart-list-item\">
                <div class=\"list-item\">
                    <ol class=\"hamadryad-minicart-items\">
                        <li class=\"product-cart\">
                            <a href=\"\" class=\"product-cart-thumb\"><img src=\"images/products/product-1.jpg\" alt=\"\"></a>
                            <div class=\"product-detail\">
                                <div class=\"product-name\"><a href=\"\">Candle Bowl </a></div>
                                <div class=\"product-detail-info\">
                                    <div class=\"product-quality\">QTY : 1</div>
                                    <div class=\"product-cost\">\$169.00</div>
                                </div>
                            </div>
                            <div class=\"product-remove\">
                                <a href=\"\"><i class=\"lnr lnr-cross\"></i></a>
                            </div>
                        </li>
                        <li class=\"product-cart\">
                            <a href=\"\" class=\"product-cart-thumb\"><img src=\"images/products/product-2.jpg\" alt=\"\"></a>
                            <div class=\"product-detail\">
                                <div class=\"product-name\"><a href=\"\">Candle Bowl </a></div>
                                <div class=\"product-detail-info\">
                                    <div class=\"product-quality\">QTY : 1</div>
                                    <div class=\"product-cost\">\$169.00</div>
                                </div>
                            </div>
                            <div class=\"product-remove\">
                                <a href=\"\"><i class=\"lnr lnr-cross\"></i></a>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class=\"subtotal\">
                <span class=\"total-title\">Total:</span>
                <span class=\"total-price\">\$190.00</span>
            </div>
            <div class=\"hamadryad-minicart-action\">
                <div class=\"btn-action-minicart viewcart\">Viewcart</div>
                <div class=\"btn-action-minicart checkout\">Checkout</div>
            </div>
        </div>
    </div>
    <div class=\"minicart-bg-overlay\" style=\"display: none;\"></div>

    <!-- Menu mobie -->
    <div class=\"box-mobile-menu\">
        <span class=\"box-title\">Menu</span>
        <a href=\"#\" class=\"close-menu\" id=\"pull-closemenu\">
            <i class=\"lnr lnr-cross\"></i>
        </a>
        <div class=\"menu-clone\">
            <ul class=\"main-menu\">
                <li class=\"menu-item menu-item-has-children\">
                    <a href=\"Homepage01.html\">Home</a>
                    <span class=\"toggle-submenu\"></span>
                    <div class=\"submenu\">
                        <div class=\"col-12 col-md-12 custom-col\">
                            <div class=\"col-inner\">
                                <div class=\"col-wrapper-item\">
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Homepage01.html\">Homepage v1</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Homepage02.html\">Homepage v2</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Homepage03.html\">Homepage v3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"menu-item menu-item-has-children\">
                    <a href=\"List_ShopPageFullWidth.html\">Shop</a>
                    <span class=\"toggle-submenu\"></span>
                    <div class=\"submenu\">
                        <div class=\"col-12 col-md-12 custom-col\">
                            <div class=\"col-inner\">
                                <div class=\"col-wrapper-item\">
                                    <h2 class=\"widget-title\">Shop</h2>
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"List_ShopPageFullWidth.html\">Shop Fullwidth</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"List_Shop_Sidebar-Left.html\">Shop Sidebar Left</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-wrapper-item\">
                                    <h2 class=\"widget-title\">Product Details</h2>
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"ProductDetail_v1.html\">Product detail v1</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"ProductDetail_v2.html\">Product detail v2</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"ProductDetail_v3.html\">Product detail v3</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"ProductDetail_v4.html\">Product detail v4</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-wrapper-item\">
                                    <h2 class=\"widget-title\">Pages</h2>
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Hover&Active-v2.html\">Hover&Active v2</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Popup.html\">Popup</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"ContactUs.html\">Contact us</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-wrapper-item\">
                                    <h2 class=\"widget-title\">Table Tree Plant</h2>
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"\">New Arrivals</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"\">Best Product</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"\">Deal Of The Week</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"\">Top Rated</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"\">Our Product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"menu-item menu-item-has-children\"><a href=\"\">Features</a></li>
                <li class=\"menu-item menu-item-has-children\"><a href=\"\">Portfolio</a></li>
                <li class=\"menu-item menu-item-has-children\">
                    <a href=\"Blog&New_v1.html\">Blog</a>
                    <span class=\"toggle-submenu\"></span>
                    <div class=\"submenu\">
                        <div class=\"col-12 col-md-12 custom-col\">
                            <div class=\"col-inner\">
                                <div class=\"col-wrapper-item\">
                                    <ul class=\"menu-shop-style\">
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Blog&New_v1.html\">Blog & New 1</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Blog&New_v2.html\">Blog & New 1</a></li>
                                        <li class=\"style-item\"><a class=\"afont200\" href=\"Blog&NewPost.html\">Blog & New Post</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"menu-item menu-item-has-children\"><a href=\"AboutUs.html\">About Us</a></li>
            </ul>
        </div>
    </div>
    <div class=\"menu-overlay\"></div>

</header>

<!-- Main content -->
<div class=\"main-content-st2\">
    {% block content %}
    {% endblock %}
</div>

<!-- Footer -->
<footer>
    <div class=\"footer-wrapper-st2\">
        <div class=\"footer-st2\">
            <div class=\"footer-content-st2\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-12 col-md-12 col-lg-3 custom-col-pt col-xl-3\">
                            <div class=\"f-content-st2-logo\">
                                <img src=\"images/homepage2/logo-footer.jpg\" alt=\"Logo\">
                            </div>
                        </div>
                        <div class=\"col-12 col-md-12 col-lg-3 custom-col-pt col-xl-3 align-self-center\">
                            <div class=\"f-content-st2 f-content-st2-address\">
                                <div class=\"flex-custom\">
                                    <div class=\"st2-icon st2-address-icon\">
                                        <span class=\"ti-home\"></span>
                                    </div>
                                    <div class=\"flex-grow-1\">
                        <span class=\"st2-address-text\">
                          Address :PO Box 16122 Collins Street<br> West Victoria 8007, Australia
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-12 col-lg-3 custom-col-pt col-xl-3 align-self-center\">
                            <div class=\"f-content-st2 f-content-st2-email\">
                                <div class=\"flex-custom\">
                      <span class=\"st2-icon st2-email-icon\">
                        <i class=\"ti-email\"></i>
                      </span>
                                    <div class=\"flex-grow-1\">
                        <span class=\"st2-email-text\">
                          Email: <br>Contact@hamadryad.com
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-12 col-lg-3 custom-col-pt col-xl-3 align-self-center\">
                            <div class=\"f-content-st2 f-content-st2-phone\">
                                <div class=\"flex-custom\">
                                    <div class=\"st2-icon st2-phone-icon\">
                                        <span class=\"ti-mobile\"></span>
                                    </div>
                                    <div class=\"flex-grow-1\">
                        <span class=\"st2-phone-text\">
                          Phone: <br>(+68) 123 456 7890
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer-info footer-info-st2\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-4 cl-md-ipad-12 col-lg-6 col-xl-4 order-mobile-cp\">
                            <div class=\"info-copyright\">
                                <span>Copyright © 2019 by EngoTheme All Rights Reserved</span>
                            </div>
                        </div>
                        <div class=\"col-md-4 cl-md-ipad-12 col-lg-3 col-xl-4 order-mobile-pm\">
                            <div class=\"info-payment tx-center\">
                                <span class=\"payment-text\">Payment Options:</span>
                                <img src=\"images/homepage2/payment.jpg\" alt=\"Payment\">
                            </div>
                        </div>
                        <div class=\"col-md-4 cl-md-ipad-12 col-lg-3 col-xl-4 order-mobile-sc\">
                            <div class=\"social-inner-st2 tx-center\">
                                <span class=\"social-text\">Follow us:</span>
                                <div class=\"socials-st2\">
                                    <a href=\"\" class=\"icon-social-st2\">
                                        <i class=\"ti-facebook\"></i>
                                    </a>
                                    <a href=\"\" class=\"icon-social-st2\">
                                        <i class=\"ti-twitter-alt\"></i>
                                    </a>
                                    <a href=\"\" class=\"icon-social-st2\">
                                        <i class=\"ti-pinterest\"></i>
                                    </a>
                                    <a href=\"\" class=\"icon-social-st2\">
                                        <i class=\"ti-youtube\"></i>
                                    </a>
                                    <a href=\"\" class=\"icon-social-st2\">
                                        <i class=\"ti-instagram\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"{{ asset('js/jquery-1.12.4.min.js') }}\"></script>
<script src=\"{{ asset('vendors/owlcarousel/owl.carouselv2.2.min.js') }}\"></script>
<script src=\"{{ asset('vendors/slick/slick.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('vendors/rangeslider/js/ion.rangeSlider.min.js') }}\"></script>
<script src=\"{{ asset('js/custom.js') }}\"></script>
{% block js %}
{% endblock %}
</body>
</html>", "front.html.twig", "C:\\wamp64\\www\\SprintWeb\\app\\Resources\\views\\front.html.twig");
    }
}

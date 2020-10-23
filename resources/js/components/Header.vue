<template>
    <div>

        <header class="header style7">
            <div class="top-bar">
                <div class="container">
                    <div class="top-bar-left">
                        <div class="header-message">
                            <a href="" class="facebook"><i class="fa fa-facebook-square mr-1"></i><span> Thành Đạt Store</span></a>
                            <a href="" class="email"><i class="fa fa-envelope mr-1"></i><span> Support@thanhdatstore.com</span></a>
                        </div>
                    </div>
                    <div class="top-bar-right">
                        <div class="header-language">
                            <div class="teamo-language teamo-dropdown">
                                <a href="#" class="active language-toggle" data-teamo="teamo-dropdown">
									<span>
										English (USD)
									</span>
                                </a>
                                <ul class="teamo-submenu">
                                    <li class="switcher-option">
                                        <a href="#">
											<span>
												French (EUR)
											</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="header-user-links">
                            <li>
                                <inertia-link :href="route('login')">Login or Register</inertia-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="main-header">
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                            <div class="logo">
                                <a href="/">
                                    <img src="/images/logo.png" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                            <div class="block-search-block">
                                <form class="form-search form-search-width-category">
                                    <div class="form-content">
                                        <div class="category">
                                            <select title="cate" data-placeholder="All Categories" class="chosen-select" tabindex="-1" style="display: none;">
                                                <option value="all">All</option>
                                            </select>
                                        </div>
                                        <div class="inner">
                                            <input type="text" class="input" name="s" value="" placeholder="Search here">
                                        </div>
                                        <button class="btn-search" type="submit">
                                            <span class="icon-search"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                            <div class="header-control">
                                <div class="block-minicart teamo-mini-cart block-header teamo-dropdown">
                                    <a href="javascript:void(0);" class="shopcart-icon" data-teamo="teamo-dropdown">
                                        Cart
                                        <span class="count">
										0
										</span>
                                    </a>
                                    <div class="shopcart-description teamo-submenu">
                                        <div class="content-wrap">
                                            <h3 class="title">Shopping Cart</h3>
                                            <ul class="minicart-items mCustomScrollbar _mCS_1"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 250px;"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                <li class="product-cart mini_cart_item">
                                                    <a href="#" class="product-media">
                                                        <img src="/images/item-minicart-1.jpg" alt="img" class="mCS_img_loaded">
                                                    </a>
                                                    <div class="product-details">
                                                        <h5 class="product-name">
                                                            <a href="#">European Pan Palm</a>
                                                        </h5>
                                                        <div class="variations">
															<span class="attribute_color">
																<a href="#">Black</a>
															</span>
                                                            ,
                                                            <span class="attribute_size">
																<a href="#">300ml</a>
															</span>
                                                        </div>
                                                        <span class="product-price">
															<span class="price">
																<span>$45</span>
															</span>
														</span>
                                                        <span class="product-quantity">
															(x1)
														</span>
                                                        <div class="product-remove">
                                                            <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-cart mini_cart_item">
                                                    <a href="#" class="product-media">
                                                        <img src="/images/item-minicart-2.jpg" alt="img" class="mCS_img_loaded">
                                                    </a>
                                                    <div class="product-details">
                                                        <h5 class="product-name">
                                                            <a href="#">Soap Ferns Solutions</a>
                                                        </h5>
                                                        <div class="variations">
															<span class="attribute_color">
																<a href="#">Black</a>
															</span>
                                                            ,
                                                            <span class="attribute_size">
																<a href="#">300ml</a>
															</span>
                                                        </div>
                                                        <span class="product-price">
															<span class="price">
																<span>$45</span>
															</span>
														</span>
                                                        <span class="product-quantity">
															(x1)
														</span>
                                                        <div class="product-remove">
                                                            <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-cart mini_cart_item">
                                                    <a href="#" class="product-media">
                                                        <img src="/images/item-minicart-3.jpg" alt="img" class="mCS_img_loaded">
                                                    </a>
                                                    <div class="product-details">
                                                        <h5 class="product-name">
                                                            <a href="#">Ferns Solutions Soap</a>
                                                        </h5>
                                                        <div class="variations">
															<span class="attribute_color">
																<a href="#">Black</a>
															</span>
                                                            ,
                                                            <span class="attribute_size">
																<a href="#">300ml</a>
															</span>
                                                        </div>
                                                        <span class="product-price">
															<span class="price">
																<span>$45</span>
															</span>
														</span>
                                                        <span class="product-quantity">
															(x1)
														</span>
                                                        <div class="product-remove">
                                                            <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 159px; max-height: 240px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul>
                                            <div class="subtotal">
                                                <span class="total-title">Subtotal: </span>
                                                <span class="total-price">
													<span class="Price-amount">
														$135
													</span>
												</span>
                                            </div>
                                            <div class="actions">
                                                <a class="button button-viewcart" href="shoppingcart.html">
                                                    <span>View Bag</span>
                                                </a>
                                                <a href="checkout.html" class="button button-checkout">
                                                    <span>Checkout</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-account block-header teamo-dropdown">
                                    <a href="javascript:void(0);" data-teamo="teamo-dropdown">
                                        <span class="flaticon-user"></span>
                                    </a>
                                    <div class="header-account teamo-submenu">
                                        <div class="header-user-form-tabs">
                                            <ul class="tab-link">
                                                <li class="active">
                                                    <a data-toggle="tab" aria-expanded="true" href="#header-tab-login">Login</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" aria-expanded="true" href="#header-tab-rigister">Register</a>
                                                </li>
                                            </ul>
                                            <div class="tab-container">
                                                <div id="header-tab-login" class="tab-panel active">
                                                    <form method="post" class="login form-login">
                                                        <p class="form-row form-row-wide">
                                                            <input type="email" placeholder="Email" class="input-text">
                                                        </p>
                                                        <p class="form-row form-row-wide">
                                                            <input type="password" class="input-text" placeholder="Password">
                                                        </p>
                                                        <p class="form-row">
                                                            <label class="form-checkbox">
                                                                <input type="checkbox" class="input-checkbox">
                                                                <span>
																	Remember me
																</span>
                                                            </label>
                                                            <input type="submit" class="button" value="Login">
                                                        </p>
                                                        <p class="lost_password">
                                                            <a href="#">Lost your password?</a>
                                                        </p>
                                                    </form>
                                                </div>
                                                <div id="header-tab-rigister" class="tab-panel">
                                                    <form method="post" class="register form-register">
                                                        <p class="form-row form-row-wide">
                                                            <input type="email" placeholder="Email" class="input-text">
                                                        </p>
                                                        <p class="form-row form-row-wide">
                                                            <input type="password" class="input-text" placeholder="Password">
                                                        </p>
                                                        <p class="form-row">
                                                            <input type="submit" class="button" value="Register">
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="menu-bar mobile-navigation menu-toggle" href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav-container rows-space-20">
                <div class="container">
                    <div class="header-nav-wapper main-menu-wapper">
                        <div class="vertical-wapper block-nav-categori">
                            <div class="block-title">
							<span class="icon-bar">
								<span></span>
								<span></span>
								<span></span>
							</span>
                                <span class="text">All Categories</span>
                            </div>
                            <div class="block-content verticalmenu-content">
                                <ul class="teamo-nav-vertical vertical-menu teamo-clone-mobile-menu">
                                    <li class="menu-item">
                                        <a href="#" class="teamo-menu-item-title" title="New Arrivals">New Arrivals</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Hot Sale" href="#" class="teamo-menu-item-title">Hot Sale</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a title="Accessories" href="#" class="teamo-menu-item-title">Accessories</a>
                                        <span class="toggle-submenu"></span>
                                        <ul role="menu" class=" submenu">
                                            <li class="menu-item">
                                                <a title="Audio" href="#" class="teamo-item-title">Audio</a>
                                            </li>
                                            <li class="menu-item">
                                                <a title="Cacti" href="#" class="teamo-item-title">Cacti</a>
                                            </li>
                                            <li class="menu-item">
                                                <a title="New Arrivals" href="#" class="teamo-item-title">New Arrivals</a>
                                            </li>
                                            <li class="menu-item">
                                                <a title="Accessories" href="#" class="teamo-item-title">Accessories</a>
                                            </li>
                                            <li class="menu-item">
                                                <a title="Storage" href="#" class="teamo-item-title">Storage</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Cacti" href="#" class="teamo-menu-item-title">Cacti</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Palms" href="#" class="teamo-menu-item-title">Palms</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Ferns" href="#" class="teamo-menu-item-title">Ferns</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Hanging plants" href="#" class="teamo-menu-item-title">Hanging plants</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Variegated" href="#" class="teamo-menu-item-title">Variegated</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-nav">
                            <div class="container-wapper">
                                <ul class="teamo-clone-mobile-menu teamo-nav main-menu " id="menu-main-menu">
                                    <li class="menu-item">
                                        <inertia-link :href="route('index')" class="teamo-menu-item-title" title="Home">Home</inertia-link>
                                        <!--                                    <span class="toggle-submenu"></span>-->
                                        <!--                                    <ul class="submenu">-->
                                        <!--                                        <li class="menu-item">-->
                                        <!--                                            <a href="index.html">Home 01</a>-->
                                        <!--                                        </li>-->
                                        <!--                                        <li class="menu-item">-->
                                        <!--                                            <a href="home2.html">Home 02</a>-->
                                        <!--                                        </li>-->
                                        <!--                                        <li class="menu-item">-->
                                        <!--                                            <a href="home3.html">Home 03</a>-->
                                        <!--                                        </li>-->
                                        <!--                                    </ul>-->
                                    </li>
                                    <li class="menu-item  menu-item-has-children item-megamenu">
                                        <a href="#" class="teamo-menu-item-title" title="Pages">Pages</a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu mega-menu menu-page" style="width: 1170px; left: -487.703px;">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                                    <div class="teamo-custommenu default">
                                                        <h2 class="widgettitle">Shop Pages</h2>
                                                        <ul class="menu">
                                                            <li class="menu-item">
                                                                <a href="shoppingcart.html">Shopping Cart</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="checkout.html">Checkout</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="contact.html">Contact us</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="404page.html">404</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <inertia-link :href="route('login')">Login/Register</inertia-link>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                                    <div class="teamo-custommenu default">
                                                        <h2 class="widgettitle">Product</h2>
                                                        <ul class="menu">
                                                            <li class="menu-item">
                                                                <a href="productdetails-fullwidth.html">Product Fullwidth</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="productdetails-leftsidebar.html">Product left
                                                                    sidebar</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="productdetails-rightsidebar.html">Product right
                                                                    sidebar</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
<!--                                    <li class="menu-item  menu-item-has-children">-->
<!--                                        <a href="inblog_right-siderbar.html" class="teamo-menu-item-title" title="Blogs">Blogs</a>-->
<!--                                        <span class="toggle-submenu"></span>-->
<!--                                        <ul class="submenu">-->
<!--                                            <li class="menu-item menu-item-has-children">-->
<!--                                                <a href="#" class="teamo-menu-item-title" title="Blog Style">Blog Style</a>-->
<!--                                                <span class="toggle-submenu"></span>-->
<!--                                                <ul class="submenu">-->
<!--                                                    <li class="menu-item">-->
<!--                                                        <a href="bloggrid.html">Grid</a>-->
<!--                                                    </li>-->
<!--                                                    <li class="menu-item">-->
<!--                                                        <a href="bloglist.html">List</a>-->
<!--                                                    </li>-->
<!--                                                    <li class="menu-item">-->
<!--                                                        <a href="bloglist-leftsidebar.html">List Sidebar</a>-->
<!--                                                    </li>-->
<!--                                                </ul>-->
<!--                                            </li>-->
<!--                                            <li class="menu-item menu-item-has-children">-->
<!--                                                <a href="#" class="teamo-menu-item-title" title="Post Layout">Post Layout</a>-->
<!--                                                <span class="toggle-submenu"></span>-->
<!--                                                <ul class="submenu">-->
<!--                                                    <li class="menu-item">-->
<!--                                                        <a href="inblog_left-siderbar.html">Left Sidebar</a>-->
<!--                                                    </li>-->
<!--                                                    <li class="menu-item">-->
<!--                                                        <a href="inblog_right-siderbar.html">Right Sidebar</a>-->
<!--                                                    </li>-->
<!--                                                </ul>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
                                    <li class="menu-item">
                                        <inertia-link :href="route('contact')" class="teamo-menu-item-title" title="About">Contacts</inertia-link>
                                    </li>
                                    <li class="menu-item">
                                        <inertia-link :href="route('about')" class="teamo-menu-item-title" title="About">About</inertia-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <slot></slot>
    </div>
</template>

<script>
export default {
name: "Header"
}
</script>

<style lang="scss" scoped>
    .top-bar-left{
        .facebook,.email{
            white-space: nowrap;
            max-width: 150px;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .facebook{
            margin-right: 1.3rem;
        }
        .email{
            max-width: 250px;
        }
    }
</style>

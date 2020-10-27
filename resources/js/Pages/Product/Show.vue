<template>
    <app-layout>
        <div class="main-content main-content-details single no-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <breadcrumb
                            :breadcrumbs="[{link:route('product.index'),name:'Product'},{name:$page.product.name}]"></breadcrumb>
                    </div>
                </div>
                <div class="row">
                    <div class="content-area content-details full-width col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="site-main">
                            <div class="details-product">
                                <div class="details-thumd">
                                    <div class="image-preview-container image-thick-box image_preview_container">
                                        <img id="img_zoom" :data-zoom-image="$page.product.poster"
                                             :src="$page.product.poster" alt="Poster Product">
                                        <a href="#" class="btn-zoom open_qv"><i class="fa fa-search"
                                                                                aria-hidden="true"></i></a>
                                    </div>
                                    <div class="product-preview image-small product_preview">
                                        <div id="thumbnails" class="thumbnails_carousel owl-carousel" data-nav="true"
                                             data-autoplay="false" data-dots="false" data-loop="false" data-margin="10">
                                            <a href="#" :data-image="$page.product.poster"
                                               :data-zoom-image="$page.product.poster" class="active">
                                                <img :src="$page.product.poster"
                                                     :data-large-image="$page.product.poster" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="details-infor">
                                    <h1 class="product-title">
                                        {{ $page.product.name }}
                                    </h1>
                                    <!--                                    <div class="stars-rating">-->
                                    <!--                                        <div class="star-rating">-->
                                    <!--                                            <span class="star-5"></span>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="count-star">-->
                                    <!--                                            (7)-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <div class="availability">
                                        Categories :
                                        <inertia-link class="mr-2 border" style="border-radius: 4px;padding: 0 3px"
                                                      v-for="category in $page.categories"
                                                      :href="route('category.show',category.slug)">{{ category.name }}
                                        </inertia-link>
                                    </div>
                                    <div class="price" v-if="$page.product.sale > 0">
                                        <del style="font-size: 70%">
                                            {{ $page.product.price.toLocaleString() }}.000 VNĐ
                                        </del>
                                        <ins style="color: #65a15a;font-weight: bolder">
                                            {{
                                                newPrice($page.product.price, $page.product.type_sale, $page.product.sale)
                                            }}
                                        </ins>
                                    </div>
                                    <div class="price" v-else>
                                        <ins>{{ $page.product.price.toLocaleString() }}.000 VNĐ</ins>
                                    </div>
                                    <!--                                    <div class="product-details-description">-->
                                    <!--                                        <ul>-->
                                    <!--                                            <li>Vestibulum tortor quam</li>-->
                                    <!--                                            <li>Imported</li>-->
                                    <!--                                            <li>Art.No. 06-7680</li>-->
                                    <!--                                        </ul>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="variations">-->
                                    <!--                                        <div class="attribute attribute_color">-->
                                    <!--                                            <div class="color-text text-attribute">-->
                                    <!--                                                Color:-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="list-color list-item">-->
                                    <!--                                                <a href="#" class="color1"></a>-->
                                    <!--                                                <a href="#" class="color2"></a>-->
                                    <!--                                                <a href="#" class="color3 active"></a>-->
                                    <!--                                                <a href="#" class="color4"></a>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="attribute attribute_size">-->
                                    <!--                                            <div class="size-text text-attribute">-->
                                    <!--                                                Size:-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="list-size list-item">-->
                                    <!--                                                <a href="#" class="">xs</a>-->
                                    <!--                                                <a href="#" class="">s</a>-->
                                    <!--                                                <a href="#" class="active">m</a>-->
                                    <!--                                                <a href="#" class="">l</a>-->
                                    <!--                                                <a href="#" class="">xl</a>-->
                                    <!--                                                <a href="#" class="">xxl</a>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <!--                                        <div class="size-chart-wrapp">-->
                                        <!--                                            <div class="btn-size-chart">-->
                                        <!--                                                <a id="size_chart" href="/images/size-chart.jpg" class="fancybox">View-->
                                        <!--                                                    Size Chart</a>-->
                                        <!--                                            </div>-->
                                        <!--                                        </div>-->
                                        <div class="quantity-add-to-cart">
                                            <div class="quantity">
                                                <div class="control">
                                                    <a class="btn-number" href="#" @click.prevent="decrement">-</a>
                                                    <input v-model="quantity" min="0" title="Qty" class="input-qty">
                                                    <a href="#" class="btn-number" @click.prevent="increment">+</a>
                                                </div>
                                            </div>
                                            <button class="single_add_to_cart_button button" @click.prevent="addToCart($page.product.id,quantity)">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-details-product">
                                <ul class="tab-link">
                                    <li class="active">
                                        <a data-toggle="tab" aria-expanded="true" href="#product-descriptions">Descriptions </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" aria-expanded="true" href="#information">Information </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" aria-expanded="true" href="#reviews">Reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-container">
                                    <div id="product-descriptions" class="tab-panel active">
                                        <p>
                                            Quisque quis ipsum venenatis, fermentum ante volutpat, ornare enim.
                                            Phasellus molestie risus non aliquet cursus.
                                            Integer
                                            vestibulum mi lorem, id hendrerit ante lobortis non.
                                            Nunc ante ante, lobortis non pretium non, vulputate vel nisi.
                                            Maecenas dolor elit, fringilla nec turpis ac, auctor vulputate nulla.
                                            Phasellus sed
                                            laoreet velit.
                                        </p>
                                        <p>
                                            Proin fringilla urna vel mattis euismod.
                                            Etiam sodales, massa non tincidunt iaculis, mauris libero scelerisque justo,
                                            ut
                                            rutrum lectus urna sit amet quam.
                                            Nulla maximus vestibulum mi vitae accumsan.
                                        </p>
                                    </div>
                                    <div id="information" class="tab-panel">
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>Size</td>
                                                <td> XS / S / M / L</td>
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td>White/ Black/ Teal/ Brown</td>
                                            </tr>
                                            <tr>
                                                <td>Properties</td>
                                                <td>Colorful Dress</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="reviews" class="tab-panel">
                                        <div class="reviews-tab">
                                            <div class="comments">
                                                <h2 class="reviews-title">
                                                    1 review for
                                                    <span>Areca palm</span>
                                                </h2>
                                                <ol class="commentlist">
                                                    <li class="conment">
                                                        <div class="conment-container">
                                                            <a href="#" class="avatar">
                                                                <img src="/images/avartar.jpeg" alt="img">
                                                            </a>
                                                            <div class="comment-text">
                                                                <div class="stars-rating">
                                                                    <div class="star-rating">
                                                                        <span class="star-5"></span>
                                                                    </div>
                                                                    <div class="count-star">
                                                                        (1)
                                                                    </div>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong class="author">Cobus Bester</strong>
                                                                    <span>-</span>
                                                                    <span class="time">June 7, 2013</span>
                                                                </p>
                                                                <div class="description">
                                                                    <p>Simple and effective design. One of my
                                                                        favorites.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div class="review_form_wrapper">
                                                <div class="review_form">
                                                    <div class="comment-respond">
                                                        <span class="comment-reply-title">Add a review </span>
                                                        <form class="comment-form-review">
                                                            <p class="comment-notes">
                                                                <span class="email-notes">Your email address will not be published.</span>
                                                                Required fields are marked
                                                                <span class="required">*</span>
                                                            </p>
                                                            <div class="comment-form-rating">
                                                                <label>Your rating</label>
                                                                <p class="stars">
                                        						<span>
                                        							<a class="star-1" href="#"></a>
                                        							<a class="star-2" href="#"></a>
                                        							<a class="star-3" href="#"></a>
                                        							<a class="star-4" href="#"></a>
                                        							<a class="star-5" href="#"></a>
                                        						</span>
                                                                </p>
                                                            </div>
                                                            <p class="comment-form-comment">
                                                                <label>
                                                                    Your review
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <textarea title="review" id="comment" name="comment"
                                                                          cols="45" rows="8"></textarea>
                                                            </p>
                                                            <p class="comment-form-author">
                                                                <label>
                                                                    Name
                                                                    <span class="">*</span>
                                                                </label>
                                                                <input title="author" id="author" name="author"
                                                                       type="text" value="">
                                                            </p>
                                                            <p class="comment-form-email">
                                                                <label>
                                                                    Email
                                                                    <span class="">*</span>
                                                                </label>
                                                                <input title="email" id="email" name="email"
                                                                       type="email" value="">
                                                            </p>
                                                            <p class="form-submit">
                                                                <input name="submit" type="submit" id="submit"
                                                                       class="submit" value="Submit">
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: left;"></div>
                            <div class="related products product-grid">
                                <h2 class="product-grid-title">You may also like</h2>
                                <div
                                    class="owl-products owl-slick equal-container nav-center slick-initialized slick-slider"
                                    data-slick="{&quot;autoplay&quot;:false, &quot;autoplaySpeed&quot;:1000, &quot;arrows&quot;:true, &quot;dots&quot;:false, &quot;infinite&quot;:true, &quot;speed&quot;:800, &quot;rows&quot;:1}"
                                    data-responsive="[{&quot;breakpoint&quot;:&quot;2000&quot;,&quot;settings&quot;:{&quot;slidesToShow&quot;:3}},{&quot;breakpoint&quot;:&quot;1200&quot;,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:&quot;992&quot;,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:&quot;480&quot;,&quot;settings&quot;:{&quot;slidesToShow&quot;:1}}]">
                                    <span class="fa fa-angle-left slick-arrow" style="display: block;"></span>


                                    <div aria-live="polite" class="slick-list draggable">
                                        <div class="slick-track" role="listbox"
                                             style="opacity: 1; width: 4000px; transform: translate3d(-1200px, 0px, 0px);">
                                            <div class="product-item style-1 slick-slide slick-cloned"
                                                 style="width: 400px;" data-slick-index="-3" aria-hidden="true"
                                                 tabindex="-1">
                                                <div class="product-inner equal-element" style="height: 465px;">
                                                    <div class="product-top">
                                                        <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#" tabindex="-1">
                                                                <img src="/images/product-item-2.jpg" alt="img">
                                                            </a>
                                                            <div class="thumb-group">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" tabindex="-1">Add to Wishlist</a>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="button quick-wiew-button"
                                                                   tabindex="-1">Quick View</a>
                                                                <div class="loop-form-add-to-cart">
                                                                    <button class="single_add_to_cart_button button"
                                                                            tabindex="-1">Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h5 class="product-name product_title">
                                                            <a href="#" tabindex="-1">Areca palm</a>
                                                        </h5>
                                                        <div class="group-info">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-3"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (3)
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <del>
                                                                    $65
                                                                </del>
                                                                <ins>
                                                                    $45
                                                                </ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style-1 slick-slide slick-cloned"
                                                 style="width: 400px;" data-slick-index="-2" aria-hidden="true"
                                                 tabindex="-1">
                                                <div class="product-inner equal-element" style="height: 465px;">
                                                    <div class="product-top">
                                                        <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#" tabindex="-1">
                                                                <img src="/images/product-item-3.jpg" alt="img">
                                                            </a>
                                                            <div class="thumb-group">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" tabindex="-1">Add to Wishlist</a>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="button quick-wiew-button"
                                                                   tabindex="-1">Quick View</a>
                                                                <div class="loop-form-add-to-cart">
                                                                    <button class="single_add_to_cart_button button"
                                                                            tabindex="-1">Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h5 class="product-name product_title">
                                                            <a href="#" tabindex="-1">Arrowhead</a>
                                                        </h5>
                                                        <div class="group-info">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-3"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (3)
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <del>
                                                                    $65
                                                                </del>
                                                                <ins>
                                                                    $45
                                                                </ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style-1 slick-slide slick-cloned"
                                                 style="width: 400px;" data-slick-index="-1" aria-hidden="true"
                                                 tabindex="-1">
                                                <div class="product-inner equal-element" style="height: 465px;">
                                                    <div class="product-top">
                                                        <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#" tabindex="-1">
                                                                <img src="/images/product-item-4.jpg" alt="img">
                                                            </a>
                                                            <div class="thumb-group">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" tabindex="-1">Add to Wishlist</a>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="button quick-wiew-button"
                                                                   tabindex="-1">Quick View</a>
                                                                <div class="loop-form-add-to-cart">
                                                                    <button class="single_add_to_cart_button button"
                                                                            tabindex="-1">Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h5 class="product-name product_title">
                                                            <a href="#" tabindex="-1">Bird’s Nest Fern</a>
                                                        </h5>
                                                        <div class="group-info">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-3"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (3)
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <del>
                                                                    $65
                                                                </del>
                                                                <ins>
                                                                    $45
                                                                </ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="product-item style-1 slick-slide slick-current slick-active first-slick"
                                                style="width: 400px;" data-slick-index="0" aria-hidden="false"
                                                tabindex="-1" role="option" aria-describedby="slick-slide00">
                                                <div class="product-inner equal-element" style="height: 465px;">
                                                    <div class="product-top">
                                                        <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#" tabindex="0">
                                                                <img src="/images/product-item-1.jpg" alt="img">
                                                            </a>
                                                            <div class="thumb-group">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" tabindex="0">Add to Wishlist</a>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="button quick-wiew-button"
                                                                   tabindex="0">Quick View</a>
                                                                <div class="loop-form-add-to-cart">
                                                                    <button class="single_add_to_cart_button button"
                                                                            tabindex="0">Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h5 class="product-name product_title">
                                                            <a href="#" tabindex="0">Aluminum Plant</a>
                                                        </h5>
                                                        <div class="group-info">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-3"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (3)
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <del>
                                                                    $65
                                                                </del>
                                                                <ins>
                                                                    $45
                                                                </ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style-1 slick-slide slick-active"
                                                 style="width: 400px;" data-slick-index="1" aria-hidden="false"
                                                 tabindex="-1" role="option" aria-describedby="slick-slide01">
                                                <div class="product-inner equal-element" style="height: 465px;">
                                                    <div class="product-top">
                                                        <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#" tabindex="0">
                                                                <img src="/images/product-item-2.jpg" alt="img">
                                                            </a>
                                                            <div class="thumb-group">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" tabindex="0">Add to Wishlist</a>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="button quick-wiew-button"
                                                                   tabindex="0">Quick View</a>
                                                                <div class="loop-form-add-to-cart">
                                                                    <button class="single_add_to_cart_button button"
                                                                            tabindex="0">Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h5 class="product-name product_title">
                                                            <a href="#" tabindex="0">Areca palm</a>
                                                        </h5>
                                                        <div class="group-info">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-3"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (3)
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <del>
                                                                    $65
                                                                </del>
                                                                <ins>
                                                                    $45
                                                                </ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style-1 slick-slide slick-active last-slick"
                                                 style="width: 400px;" data-slick-index="2" aria-hidden="false"
                                                 tabindex="-1" role="option" aria-describedby="slick-slide02">
                                                <div class="product-inner equal-element" style="height: 465px;">
                                                    <div class="product-top">
                                                        <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#" tabindex="0">
                                                                <img src="/images/product-item-3.jpg" alt="img">
                                                            </a>
                                                            <div class="thumb-group">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" tabindex="0">Add to Wishlist</a>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="button quick-wiew-button"
                                                                   tabindex="0">Quick View</a>
                                                                <div class="loop-form-add-to-cart">
                                                                    <button class="single_add_to_cart_button button"
                                                                            tabindex="0">Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h5 class="product-name product_title">
                                                            <a href="#" tabindex="0">Arrowhead</a>
                                                        </h5>
                                                        <div class="group-info">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-3"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (3)
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <del>
                                                                    $65
                                                                </del>
                                                                <ins>
                                                                    $45
                                                                </ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style-1 slick-slide" style="width: 400px;"
                                                 data-slick-index="3" aria-hidden="true" tabindex="-1" role="option"
                                                 aria-describedby="slick-slide03">
                                                <div class="product-inner equal-element" style="height: 465px;">
                                                    <div class="product-top">
                                                        <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#" tabindex="-1">
                                                                <img src="/images/product-item-4.jpg" alt="img">
                                                            </a>
                                                            <div class="thumb-group">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" tabindex="-1">Add to Wishlist</a>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="button quick-wiew-button"
                                                                   tabindex="-1">Quick View</a>
                                                                <div class="loop-form-add-to-cart">
                                                                    <button class="single_add_to_cart_button button"
                                                                            tabindex="-1">Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h5 class="product-name product_title">
                                                            <a href="#" tabindex="-1">Bird’s Nest Fern</a>
                                                        </h5>
                                                        <div class="group-info">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-3"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (3)
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <del>
                                                                    $65
                                                                </del>
                                                                <ins>
                                                                    $45
                                                                </ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style-1 slick-slide slick-cloned"
                                                 style="width: 400px;" data-slick-index="4" aria-hidden="true"
                                                 tabindex="-1">
                                                <div class="product-inner equal-element" style="height: 465px;">
                                                    <div class="product-top">
                                                        <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#" tabindex="-1">
                                                                <img src="/images/product-item-1.jpg" alt="img">
                                                            </a>
                                                            <div class="thumb-group">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" tabindex="-1">Add to Wishlist</a>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="button quick-wiew-button"
                                                                   tabindex="-1">Quick View</a>
                                                                <div class="loop-form-add-to-cart">
                                                                    <button class="single_add_to_cart_button button"
                                                                            tabindex="-1">Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h5 class="product-name product_title">
                                                            <a href="#" tabindex="-1">Aluminum Plant</a>
                                                        </h5>
                                                        <div class="group-info">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-3"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (3)
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <del>
                                                                    $65
                                                                </del>
                                                                <ins>
                                                                    $45
                                                                </ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style-1 slick-slide slick-cloned"
                                                 style="width: 400px;" data-slick-index="5" aria-hidden="true"
                                                 tabindex="-1">
                                                <div class="product-inner equal-element" style="height: 465px;">
                                                    <div class="product-top">
                                                        <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#" tabindex="-1">
                                                                <img src="/images/product-item-2.jpg" alt="img">
                                                            </a>
                                                            <div class="thumb-group">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" tabindex="-1">Add to Wishlist</a>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="button quick-wiew-button"
                                                                   tabindex="-1">Quick View</a>
                                                                <div class="loop-form-add-to-cart">
                                                                    <button class="single_add_to_cart_button button"
                                                                            tabindex="-1">Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h5 class="product-name product_title">
                                                            <a href="#" tabindex="-1">Areca palm</a>
                                                        </h5>
                                                        <div class="group-info">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-3"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (3)
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <del>
                                                                    $65
                                                                </del>
                                                                <ins>
                                                                    $45
                                                                </ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style-1 slick-slide slick-cloned"
                                                 style="width: 400px;" data-slick-index="6" aria-hidden="true"
                                                 tabindex="-1">
                                                <div class="product-inner equal-element" style="height: 465px;">
                                                    <div class="product-top">
                                                        <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#" tabindex="-1">
                                                                <img src="/images/product-item-3.jpg" alt="img">
                                                            </a>
                                                            <div class="thumb-group">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" tabindex="-1">Add to Wishlist</a>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="button quick-wiew-button"
                                                                   tabindex="-1">Quick View</a>
                                                                <div class="loop-form-add-to-cart">
                                                                    <button class="single_add_to_cart_button button"
                                                                            tabindex="-1">Add to cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h5 class="product-name product_title">
                                                            <a href="#" tabindex="-1">Arrowhead</a>
                                                        </h5>
                                                        <div class="group-info">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-3"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (3)
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <del>
                                                                    $65
                                                                </del>
                                                                <ins>
                                                                    $45
                                                                </ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fa fa-angle-right slick-arrow" style="display: block;"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Breadcrumb from "@/components/Breadcrumb";

export default {
    name: "Show",
    data() {
        return {
            quantity: 1
        }
    },
    components: {
        AppLayout, Breadcrumb
    },
    methods: {
        newPrice(price, type_sale, sale) {
            if (type_sale == 'price') {
                var newPrice = Math.ceil(price - sale);
            } else {
                var newPrice = Math.ceil(price * (100 - sale) / 100);
            }
            return newPrice.toLocaleString() + '.000 VNĐ';
        },
        decrement() {
            if (this.quantity > 1) {
                this.quantity -= 1;
            }
        },
        increment() {
            this.quantity += 1;
        }
    }
}
</script>

<style scoped>

</style>

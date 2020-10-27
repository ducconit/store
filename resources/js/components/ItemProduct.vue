<template>
    <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
        <div class="product-inner equal-element" style="height: 365px;">
            <div class="product-top">
                <div class="flash" v-if="compareDate(product.created_at)">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                </div>
                <div class="sale" v-if="product.sale > 0">
											<span class="onsale">
												<span class="text" v-if="product.type_sale=='price'">
													- {{ product.sale }},000 VNĐ
												</span>
												<span class="text" v-else>
													- {{ product.sale }} %
												</span>
											</span>
                </div>
            </div>
            <div class="product-thumb">
                <div class="thumb-inner">
                    <a href="#">
                        <img :src="product.poster" alt="img">
                    </a>
                    <div class="thumb-group">
                        <div class="yith-wcwl-add-to-wishlist">
                            <div class="yith-wcwl-add-button">
                                <a href="#">Add to Wishlist</a>
                            </div>
                        </div>
                        <a href="#" class="button quick-wiew-button">Quick View</a>
                        <div class="loop-form-add-to-cart" @click.prevent="addToCart(product.id)">
                            <button class="single_add_to_cart_button button">Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h5 class="product-name product_title">
                    <inertia-link :href="route('product.show',product.slug)">{{ product.name }}</inertia-link>
                </h5>
                <div class="group-info">
                    <!--                                                <div class="stars-rating">-->
                    <!--                                                    <div class="star-rating">-->
                    <!--                                                        <span class="star-3"></span>-->
                    <!--                                                    </div>-->
                    <!--                                                    <div class="count-star">-->
                    <!--                                                        (3)-->
                    <!--                                                    </div>-->
                    <!--                                                </div>-->
                    <div class="price" v-if="product.sale > 0">
                        <del>
                            {{ product.price }},000 VNĐ
                        </del>
                        <ins>
                            {{ newPrice(product.price,product.type_sale,product.sale) }}
                        </ins>
                    </div>
                    <div class="price" v-else>
                        <ins>{{ product.price }},000 VNĐ</ins>
                    </div>
                </div>
            </div>
        </div>
    </li>
</template>

<script>
export default {
    name: "ItemProduct",
    props:['product'],
    methods: {
        newPrice(price, type_sale, sale) {
            if (type_sale == 'price') {
                var newPrice = Math.ceil(price - sale);
            } else {
                var newPrice = Math.ceil(price * (100 - sale) / 100);
            }
            return newPrice.toLocaleString() + '.000 VNĐ';
        },
        compareDate(oldDate) {
            oldDate = new Date(oldDate);
            var toDay = new Date();
            return parseInt((toDay.getTime() - oldDate.getTime())/(24 * 3600 * 1000)) < 7;
        }

    }
}
</script>

<style lang="scss" scoped>
    .group-info{
        .price{
            display: flex;
            justify-content: space-around;
            align-items: center;
            del{
                font-size: 80%;
            }
        }
    }
    h5.product_title{
        font-size: 107%;
    }
</style>

<template>
    <app-layout>
        <div class="main-content main-content-product no-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <Breadcrumb :breadcrumbs="[{name:'Category',link:route('category.index')}]"></Breadcrumb>
                    </div>
                </div>
                <div class="row">
                    <div class="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="site-main">
                            <h3 class="custom_blog_title">
                                {{ $page.category.name }}
                            </h3>
                            <div v-if="$page.products.length" class="shop-top-control">
                                <form class="select-item select-form">
                                    <span class="title">Sort</span>
                                    <select title="sort" data-placeholder="9 Products/Page" class="chosen-select"
                                            style="display: none;">
                                        <option value="2">9 Products/Page</option>
                                        <option value="1">12 Products/Page</option>
                                        <option value="3">10 Products/Page</option>
                                        <option value="4">8 Products/Page</option>
                                        <option value="5">6 Products/Page</option>
                                    </select>
                                    <!--                                    <div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 184px;" title="sort"><a class="chosen-single chosen-default" tabindex="-1"><span>9 Products/Page</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>-->
                                </form>
                                <form class="filter-choice select-form">
                                    <span class="title">Sort by</span>
                                    <select title="sort-by" data-placeholder="Price: Low to High" class="chosen-select"
                                            style="display: none;">
                                        <option value="1">Price: Low to High</option>
                                        <option value="2">Sort by popularity</option>
                                        <option value="3">Sort by average rating</option>
                                        <option value="4">Sort by newness</option>
                                        <option value="5">Sort by price: low to high</option>
                                    </select>
                                    <!--                                    <div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 227px;" title="sort-by"><a class="chosen-single chosen-default" tabindex="-1"><span>Price: Low to High</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>-->
                                </form>
                                <div class="grid-view-mode">
                                    <div class="inner">
                                        <a href="listproducts.html" class="modes-mode mode-list">
                                            <span></span>
                                            <span></span>
                                        </a>
                                        <a href="gridproducts.html" class="modes-mode mode-grid  active">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <ul class="row list-products auto-clear equal-container product-grid">
                                <item-product v-if="$page.products.length" v-for="product in $page.products" :product="product"></item-product>
                                <li v-else class="text-center p-5 font-weight-bolder h3">
                                    Product is empty !
                                </li>
                            </ul>
                            <!--                            <div class="pagination clearfix style2">-->
                            <!--                                <div class="nav-link">-->
                            <!--                                    <a href="#" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>-->
                            <!--                                    <a href="#" class="page-numbers">1</a>-->
                            <!--                                    <a href="#" class="page-numbers">2</a>-->
                            <!--                                    <a href="#" class="page-numbers current">3</a>-->
                            <!--                                    <a href="#" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
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
import ItemProduct from "@/components/ItemProduct";

export default {
    name: "Category",
    components: {
        Breadcrumb, AppLayout, ItemProduct
    },
}
</script>

<style scoped>

</style>

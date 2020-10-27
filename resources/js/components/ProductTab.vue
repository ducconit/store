<template>
    <div class="teamo-tabs  default rows-space-40">
        <div class="container">
            <div class="tab-head">
                <ul class="tab-link">
                    <li class="active">
                        <a data-toggle="tab" aria-expanded="true" href="#bestseller">Bestseller</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" aria-expanded="true" href="#new_products">New Products </a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" aria-expanded="true" href="#top-rated">Top Rated</a>
                    </li>
                </ul>
            </div>
            <div class="tab-container">
                <div id="bestseller" class="tab-panel active">
                    <div class="teamo-product">
                        <ul class="row list-products auto-clear equal-container product-grid">
                            <item-product v-if="$page.bestSeller.length" v-for="product in $page.bestSeller" :product="product"></item-product>
                        </ul>
                    </div>
                </div>
                <div id="new_products" class="tab-panel">
                    <div class="teamo-product">
                        <ul class="row list-products auto-clear equal-container product-grid">
                            <item-product v-if="$page.newProduct.length" v-for="product in $page.newProduct" :product="product"></item-product>
                        </ul>
                    </div>
                </div>
                <div id="top-rated" class="tab-panel">
                    <div class="teamo-product">
                        <ul class="row list-products auto-clear equal-container product-grid">
                            <item-product v-if="$page.topRate.length" v-for="product in $page.topRate" :product="product"></item-product>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ItemProduct from "@/components/ItemProduct";

export default {
    name: "ProductTab",
    data(){
      return {
          newProduct:[],
          topRate:[]
      }
    },
    components:{
        ItemProduct
    }
}
</script>

<style scoped>

</style>

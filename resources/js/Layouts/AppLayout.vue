<template>
    <div>
        <Header></Header>
        <slot></slot>
        <Footer></Footer>
    </div>
</template>

<script>
import Header from "@/components/Header";
import Footer from "@/components/Footer";

    export default {
        components:{
            Header, Footer
        },
        mounted:function (){
                $(".chosen-select").chosen({disable_search_threshold: 10});
        }
    }
</script>

<style>
</style>

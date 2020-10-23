<template>
    <app-layout>
        <slider-banner></slider-banner>
        <Banner></Banner>
        <product-tab></product-tab>
        <News></News>
        <instagram-feed></instagram-feed>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import SliderBanner from "@/components/SliderBanner";
import Banner from "@/components/Banner";
import ProductTab from "@/components/ProductTab";
import News from "@/components/News";
import InstagramFeed from "@/components/InstagramFeed";

export default {
name: "Index",
    components:{
    AppLayout,SliderBanner,Banner,ProductTab,News,InstagramFeed
    }
}
</script>

<style scoped>

</style>

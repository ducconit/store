<template>
    <div class="home-slider-banner">
        <div class="container">
            <div class="row10">
                <div class="col-lg-8 silider-wrapp">
                    <div class="home-slider">
                        <div class="slider-owl owl-slick equal-container nav-center"
                             data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":false, "dots":true, "infinite":true, "speed":1000, "rows":1}'
                             data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                            <div class="slider-item" v-for="slide in $page.slides">
                                <div class="slider-inner equal-element">
                                    <img :src="slide.image" alt="">
                                    <div class="slider-infor">
                                        <h5 class="title-small">
                                            {{ slide.title_small }}
                                        </h5>
                                        <h3 class="title-big">
                                            {{ slide.title_big }}
                                        </h3>
                                        <div class="price">
                                            {{ slide.key }}
                                            <span class="number-price">
														{{
                                                    slide.type == 'price' ? Number(slide.value).toLocaleString() + '.000 VNĐ' : slide.value
                                                }}
													</span>
                                        </div>
                                        <a :href="slide.link" class="button btn-shop-the-look bgroud-style">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 banner-wrapp">
                    <div class="banner">
                        <div class="item-banner style7">
                            <div class="inner">
                                <div class="banner-content">
                                    <h3 class="title">Hanging <br/>Plants</h3>
                                    <div class="description">
                                        Adipiscing elit curabitur senectus sem
                                    </div>
                                    <a href="#" class="button btn-lets-do-it">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="item-banner style8">
                            <div class="inner">
                                <div class="banner-content">
                                    <h3 class="title">Grow <br/> Orchid</h3>
                                    <div class="description">
                                        Cras pulvinar lorem ipsum dolor conse
                                    </div>
                                    <span class="price">$379.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
name: "SliderBanner"
}
</script>

<style lang="scss" scoped>
.slider-inner {
    position: relative;
    img{
        width: 100%;
    }
}

.slider-infor {
    position: absolute;
    top: 50%;
    left: 10%;
    transform: translateY(-50%);
}
</style>

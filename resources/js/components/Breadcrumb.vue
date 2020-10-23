<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin" v-for="breadcrumb in breadcrumbs">
                        <a href="index.html">Home</a>
                    </li>
<!--                    <li class="trail-item trail-end active">-->
<!--                        About Us-->
<!--                    </li>-->
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Breadcrumb",
    props:['breadcrumbs']
}
</script>

<style scoped>

</style>

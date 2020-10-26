<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin">
                        <inertia-link :href="route('index')">Home</inertia-link>
                    </li>
                    <li class="trail-item trail-begin" v-for="breadcrumb in breadcrumbs" v-if="breadcrumbs.length">
                        <inertia-link v-if="breadcrumb.link" :href="breadcrumb.link">{{ breadcrumb.name }}</inertia-link>
                        <b v-else>{{ breadcrumb.name }}</b>
                    </li>
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

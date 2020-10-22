<template>
    <div class="bg-theme bg-theme1">
        <Sidebar></Sidebar>
        <Header></Header>
    </div>
</template>

<script>

import Sidebar from "@/components/Admin/SideBar";
import Header from "@/components/Admin/Header";
export default {
    components: {
        Header,
        Sidebar,
    },
}
</script>

<style>
@import "../../css/admin.scss";
</style>

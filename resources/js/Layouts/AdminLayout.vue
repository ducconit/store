<template>
    <div class="bg-theme bg-theme2">
        <Sidebar :show-sidebar="showSidebar"></Sidebar>
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
    data(){
        return {
            showSidebar:true
        }
    }
}
</script>

<style>
@import "./../../css/admin.scss";
</style>

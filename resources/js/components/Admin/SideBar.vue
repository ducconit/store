<template>
    <simplebar id="sidebar-wrapper" v-if="showSidebar">
        <div class="brand-logo">
            <img src="/admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Dashtreme Admin</h5>
            <div class="close-btn"><i class="zmdi zmdi-close"></i></div>
        </div>

        <ul class="metismenu mm-show" id="menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="true">
                    <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
                <ul class="mm-collapse mm-show" style="">
                    <li class="mm-active"><a href="index.html"><i class="zmdi zmdi-dot-circle-alt"></i>
                        eCommerce v1</a></li>
                    <li><a href="dashboard-eCommerce-v2.html"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce
                        v2</a></li>
                    <li><a href="dashboard-human-resources.html"><i class="zmdi zmdi-dot-circle-alt"></i> Human
                        Resources</a></li>
                    <li><a href="dashboard-digital-marketing.html"><i class="zmdi zmdi-dot-circle-alt"></i>
                        Digital Marketing</a></li>
                    <li><a href="dashboard-property-listing.html"><i class="zmdi zmdi-dot-circle-alt"></i>
                        Property Listings</a></li>
                    <li><a href="dashboard-service-support.html"><i class="zmdi zmdi-dot-circle-alt"></i>
                        Services &amp; Support</a></li>
                    <li><a href="dashboard-healthcare.html"><i class="zmdi zmdi-dot-circle-alt"></i> Healthcare</a>
                    </li>
                    <li><a href="dashboard-logistics.html"><i class="zmdi zmdi-dot-circle-alt"></i>
                        Logistics</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-layers"></i></div>
                    <div class="menu-title">UI Elements</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="ui-typography.html"><i class="zmdi zmdi-dot-circle-alt"></i> Typography</a>
                    </li>
                    <li><a href="ui-cards.html"><i class="zmdi zmdi-dot-circle-alt"></i> Cards</a></li>
                    <li><a href="ui-buttons.html"><i class="zmdi zmdi-dot-circle-alt"></i> Buttons</a></li>
                    <li><a href="ui-nav-tabs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Nav Tabs</a></li>
                    <li><a href="ui-accordions.html"><i class="zmdi zmdi-dot-circle-alt"></i> Accordions</a>
                    </li>
                    <li><a href="ui-modals.html"><i class="zmdi zmdi-dot-circle-alt"></i> Modals</a></li>
                    <li><a href="ui-list-groups.html"><i class="zmdi zmdi-dot-circle-alt"></i> List Groups</a>
                    </li>
                    <li><a href="ui-bootstrap-elements.html"><i class="zmdi zmdi-dot-circle-alt"></i> BS
                        Elements</a></li>
                    <li><a href="ui-pagination.html"><i class="zmdi zmdi-dot-circle-alt"></i> Pagination</a>
                    </li>
                    <li><a href="ui-alerts.html"><i class="zmdi zmdi-dot-circle-alt"></i> Alerts</a></li>
                    <li><a href="ui-progressbars.html"><i class="zmdi zmdi-dot-circle-alt"></i> Progress
                        Bars</a></li>
                    <li><a href="ui-checkbox-radio.html"><i class="zmdi zmdi-dot-circle-alt"></i> Checkboxes
                        &amp; Radios</a></li>
                    <li><a href="ui-notification.html"><i class="zmdi zmdi-dot-circle-alt"></i>
                        Notifications</a></li>
                    <li><a href="ui-sweet-alert.html"><i class="zmdi zmdi-dot-circle-alt"></i> Sweet Alerts</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-card-travel"></i></div>
                    <div class="menu-title">Components</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="components-range-slider.html"><i class="zmdi zmdi-dot-circle-alt"></i> Range
                        Sliders</a></li>
                    <li><a href="components-image-carousel.html"><i class="zmdi zmdi-dot-circle-alt"></i> Image
                        Carousels</a></li>
                    <li><a href="components-grid-layouts.html"><i class="zmdi zmdi-dot-circle-alt"></i> Grid
                        Layouts</a></li>
                    <li><a href="components-switcher-buttons.html"><i class="zmdi zmdi-dot-circle-alt"></i>
                        Switcher Buttons</a></li>
                    <li><a href="components-pricing-table.html"><i class="zmdi zmdi-dot-circle-alt"></i> Pricing
                        Tables</a></li>
                    <li><a href="components-vertical-timeline.html"><i class="zmdi zmdi-dot-circle-alt"></i>
                        Vertical Timeline</a></li>
                    <li><a href="components-horizontal-timeline.html"><i class="zmdi zmdi-dot-circle-alt"></i>
                        Horizontal Timeline</a></li>
                    <li><a href="components-fancy-lightbox.html"><i class="zmdi zmdi-dot-circle-alt"></i> Fancy
                        Lightbox</a></li>
                    <li><a href="components-color-palette.html"><i class="zmdi zmdi-dot-circle-alt"></i> Color
                        Palette</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-chart"></i></div>
                    <div class="menu-title">Charts</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="charts-chartjs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Chart JS</a></li>
                    <li><a href="charts-apex.html"><i class="zmdi zmdi-dot-circle-alt"></i> Apex Charts</a></li>
                    <li><a href="charts-sparkline.html"><i class="zmdi zmdi-dot-circle-alt"></i> Sparkline
                        Charts</a></li>
                    <li><a href="charts-peity.html"><i class="zmdi zmdi-dot-circle-alt"></i> Peity Charts</a>
                    </li>
                    <li><a href="charts-other.html"><i class="zmdi zmdi-dot-circle-alt"></i> Other Charts</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-widgets"></i></div>
                    <div class="menu-title">Widgets</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="widgets-static.html"><i class="zmdi zmdi-dot-circle-alt"></i> Static
                        Widgets</a></li>
                    <li><a href="widgets-data.html"><i class="zmdi zmdi-dot-circle-alt"></i> Data Widgets</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-email"></i></div>
                    <div class="menu-title">Mailbox</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="mail-inbox.html"><i class="zmdi zmdi-dot-circle-alt"></i> Inbox</a></li>
                    <li><a href="mail-compose.html"><i class="zmdi zmdi-dot-circle-alt"></i> Compose</a></li>
                    <li><a href="mail-read.html"><i class="zmdi zmdi-dot-circle-alt"></i> Read Mail</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-format-list-bulleted"></i></div>
                    <div class="menu-title">Forms</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="form-inputs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Basic Inputs</a>
                    </li>
                    <li><a href="form-input-group.html"><i class="zmdi zmdi-dot-circle-alt"></i> Input
                        Groups</a></li>
                    <li><a href="form-layouts.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Layouts</a>
                    </li>
                    <li><a href="form-advanced.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Advanced</a>
                    </li>
                    <li><a href="form-validation.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Validation</a>
                    </li>
                    <li><a href="form-step-wizard.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Wizard</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-lock"></i></div>
                    <div class="menu-title">Authentication</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="authentication-signin.html" target="_blank"><i
                        class="zmdi zmdi-dot-circle-alt"></i> SignIn 1</a></li>
                    <li><a href="authentication-signup.html" target="_blank"><i
                        class="zmdi zmdi-dot-circle-alt"></i> SignUp 1</a></li>
                    <li><a href="authentication-signin2.html" target="_blank"><i
                        class="zmdi zmdi-dot-circle-alt"></i> SignIn 2</a></li>
                    <li><a href="authentication-signup2.html" target="_blank"><i
                        class="zmdi zmdi-dot-circle-alt"></i> SignUp 2</a></li>
                    <li><a href="authentication-lock-screen.html" target="_blank"><i
                        class="zmdi zmdi-dot-circle-alt"></i> Lock Screen</a></li>
                    <li><a href="authentication-reset-password.html" target="_blank"><i
                        class="zmdi zmdi-dot-circle-alt"></i> Reset Password 1</a></li>
                    <li><a href="authentication-reset-password2.html" target="_blank"><i
                        class="zmdi zmdi-dot-circle-alt"></i> Reset Password 2</a></li>
                </ul>
            </li>

            <li><a href="calendar.html" aria-expanded="false">
                <div class="parent-icon"><i class="zmdi zmdi-calendar-check"></i></div>
                <div class="menu-title">Calendar</div>
                <div class="badge badge-light ml-auto">New</div>
            </a></li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-invert-colors"></i></div>
                    <div class="menu-title">UI Icons</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="icons-font-awesome.html"><i class="zmdi zmdi-dot-circle-alt"></i> Font Awesome</a>
                    </li>
                    <li><a href="icons-material-designs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Material
                        Design</a></li>
                    <li><a href="icons-themify.html"><i class="zmdi zmdi-dot-circle-alt"></i> Themify Icons</a>
                    </li>
                    <li><a href="icons-simple-line-icons.html"><i class="zmdi zmdi-dot-circle-alt"></i> Line
                        Icons</a></li>
                    <li><a href="icons-flags.html"><i class="zmdi zmdi-dot-circle-alt"></i> Flag Icons</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-grid"></i></div>
                    <div class="menu-title">Tables</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="table-simple-tables.html"><i class="zmdi zmdi-dot-circle-alt"></i> Simple
                        Tables</a></li>
                    <li><a href="table-data-tables.html"><i class="zmdi zmdi-dot-circle-alt"></i> Data
                        Tables</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-map"></i></div>
                    <div class="menu-title">Maps</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="maps-google.html"><i class="zmdi zmdi-dot-circle-alt"></i> Google Maps</a></li>
                    <li><a href="maps-vector.html"><i class="zmdi zmdi-dot-circle-alt"></i> Vector Maps</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="zmdi zmdi-collection-folder-image"></i></div>
                    <div class="menu-title">Sample Pages</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="pages-invoice.html"><i class="zmdi zmdi-dot-circle-alt"></i> Invoice</a></li>
                    <li><a href="pages-user-profile.html"><i class="zmdi zmdi-dot-circle-alt"></i> User Profile</a>
                    </li>
                    <li><a href="pages-blank-page.html"><i class="zmdi zmdi-dot-circle-alt"></i> Blank Page</a>
                    </li>
                    <li><a href="pages-coming-soon.html" target="_blank"><i
                        class="zmdi zmdi-dot-circle-alt"></i> Coming Soon</a></li>
                    <li><a href="pages-403.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> 403
                        Error</a></li>
                    <li><a href="pages-404.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> 404
                        Error</a></li>
                    <li><a href="pages-500.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> 500
                        Error</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="parent-icon"><i class="fa fa-share"></i></div>
                    <div class="menu-title">Menu Levels</div>
                </a>
                <ul class="mm-collapse">
                    <li><a class="has-arrow" href="#"><i class="zmdi zmdi-dot-circle-alt"></i>Level
                        One</a>
                        <ul class="mm-collapse">
                            <li><a class="has-arrow" href="#"><i class="zmdi zmdi-dot-circle-alt"></i>Level Two</a>
                                <ul class="mm-collapse">
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle-alt"></i>Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu-label">Labels</li>
            <li><a href="#" aria-expanded="false">
                <div class="parent-icon"><i class="zmdi zmdi-coffee"></i></div>
                <div class="menu-title">Important</div>
            </a></li>
            <li><a href="#" aria-expanded="false">
                <div class="parent-icon"><i class="zmdi zmdi-chart-donut"></i></div>
                <div class="menu-title">Warning</div>
            </a></li>
            <li><a href="#" aria-expanded="false">
                <div class="parent-icon"><i class="zmdi zmdi-share"></i></div>
                <div class="menu-title">Information</div>
            </a></li>
        </ul>
    </simplebar>
</template>

<script>
import simplebar from 'simplebar-vue';
import 'simplebar/dist/simplebar.min.css';
export default {
    components: {
        simplebar
    },
    props:['showSidebar']
}
</script>

<style lang="scss">
</style>

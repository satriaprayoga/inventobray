<template>
     <aside class="left-sidebar">
         <div class="scroll-sidebar">
             <nav class="sidebar-nav">
                 <ul id="sidebarnav">
                     <li class="nav-small-cap">PERSONAL</li>
                     <li> 
                         <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-package"></i><span
                                    class="hide-menu">Inventory<span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><router-link to="/inventories">Dashboard</router-link></li>
                                        <li><a href="index2.html">Incoming Shipments</a></li>
                                        <li><a href="index3.html">Outgoing Orders</a></li>
                                        <li><a href="index4.html">Vendors</a></li>
                                        <li><a href="index4.html">Reports</a></li>
                                    </ul>
                    </li>
                    <li> 
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span
                                class="hide-menu">Apps</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="app-calendar.html">Calendar</a></li>
                                    <li><a href="app-chat.html">Chat app</a></li>
                                    <li><a href="app-ticket.html">Support Ticket</a></li>
                                    <li><a href="app-contact.html">Contact / Employee</a></li>
                                    <li><a href="app-contact2.html">Contact Grid</a></li>
                                    <li><a href="app-contact-detail.html">Contact Detail</a></li>
                                </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span
                            class="hide-menu">Inbox</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="app-email.html">Mailbox</a></li>
                                    <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                    <li><a href="app-compose.html">Compose Mail</a></li>
                                </ul>
                    </li>
                 </ul>
             </nav>
         </div>
     </aside>
</template>
<script>
export default {
    name:'sidebar'
}
</script>


<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">Datta Able</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item pcoded-hasmenu active pcoded-trigger">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    <ul class="pcoded-submenu">
                        <li <?= isset($sub_menu) && $sub_menu == 'home' ? ' class="active"' : ''?>>
                            <a href="{{ url('admin') }}">Home</a>
                        </li>
                        <li <?= isset($sub_menu) && $sub_menu == 'category' ? ' class="active"' : ''?>><a href="{{ url('/admin/categories') }}" class="">Category</a></li>
                        <li <?= isset($sub_menu) && $sub_menu == 'product' ? ' class="active"' : ''?>><a href="{{ url('/admin/products') }}" class="">Product</a></li>
                        <li <?= isset($sub_menu) && $sub_menu == 'customer' ? ' class="active"' : ''?>><a href="{{ url('/customer') }}" class="">Customers<span class="pcoded-badge label label-danger">NEW</span></a></li>
                        <li <?= isset($sub_menu) && $sub_menu == 'order' ? ' class="active"' : ''?>><a href="{{ url('/orders') }}" class="">Orders</a></li>
                        <li <?= isset($sub_menu) && $sub_menu == 'transaction' ? ' class="active"' : ''?>><a href="{{ url('/transactions') }}" class="">Transactions</a></li>
                    </ul>
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>
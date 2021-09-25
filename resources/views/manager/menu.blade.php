<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
<div class="c-sidebar-brand d-md-down-none">
{{ config('app.name', 'Laravel') }}
</div>
<ul class="c-sidebar-nav">
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ url('/manager/dashboard') }}">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
</svg> Dashboard<span class="badge badge-info">NEW</span></a></li>

    <!--li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link text-center" href="{{ url('/manager/product') }}">
                    Products
                    </a>
                </li-->

    <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link text-center" href="{{ url('/manager/band') }}">
                    Brand
                    </a>
                </li>      

    <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                Logout
        </a>
        </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>


<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="charts.html">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
</svg> Charts</a></li>
<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
</svg> Editors</a>
<ul class="c-sidebar-nav-dropdown-items">
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="editors/code-editor.html">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
</svg> Code Editor<span class="badge badge-danger">PRO</span></a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="editors/markdown-editor.html">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
</svg> Markdown<span class="badge badge-danger">PRO</span></a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="editors/text-editor.html">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
</svg> Rich Text Editor<span class="badge badge-danger">PRO</span></a></li>
</ul>
</li>
<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
</svg> Forms</a>
<ul class="c-sidebar-nav-dropdown-items">
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="forms/basic-forms.html"> Basic Forms</a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="forms/multi-select.html"> Multi Select<span class="badge badge-danger">PRO</span><span class="badge badge-success">NEW</span></a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="forms/advanced-forms.html"> Advanced<span class="badge badge-danger">PRO</span></a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="forms/validation.html"> Validation<span class="badge badge-danger">PRO</span></a></li>
</ul>
</li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="google-maps.html">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-map"></use>
</svg> Google Maps<span class="badge badge-danger">PRO</span></a></li>
<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
</svg> Icons</a>
<ul class="c-sidebar-nav-dropdown-items">
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-success">Free</span></a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
</ul>
</li>
<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
</svg> Notifications</a>
<ul class="c-sidebar-nav-dropdown-items">
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/alerts.html"> Alerts</a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/badge.html"> Badge</a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/modals.html"> Modals</a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/toastr.html"> Toastr<span class="badge badge-danger">PRO</span></a></li>
</ul>
</li>
<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bolt"></use>
</svg> Plugins</a>
<ul class="c-sidebar-nav-dropdown-items">
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="plugins/calendar.html">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
</svg> Calendar<span class="badge badge-danger">PRO</span></a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="plugins/draggable-cards.html">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor-move"></use>
</svg> Draggable<span class="badge badge-danger">PRO</span></a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="plugins/ladda-buttons.html">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor-move"></use>
</svg> Ladda Buttons<span class="badge badge-danger">PRO</span></a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="plugins/spinners.html">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-sync"></use>
</svg> Spinners<span class="badge badge-danger">PRO</span></a></li>
</ul>
</li>
<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-columns"></use>
</svg> Tables</a>
<ul class="c-sidebar-nav-dropdown-items">
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="tables/tables.html"> Standard Tables</a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="tables/datatables.html"> DataTables<span class="badge badge-danger">PRO</span></a></li>
</ul>
</li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="widgets.html">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
</svg> Widgets<span class="badge badge-info">NEW</span></a></li>
<li class="c-sidebar-nav-divider"></li>
<li class="c-sidebar-nav-title">Extras</li>
<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
</svg> Pages</a>
<ul class="c-sidebar-nav-dropdown-items">
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="login.html" target="_top">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
</svg> Login</a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="register.html" target="_top">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
</svg> Register</a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="404.html" target="_top">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
</svg> Error 404</a></li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="500.html" target="_top">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
</svg> Error 500</a></li>
</ul>
</li>
<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
</svg> Apps</a>
<ul class="c-sidebar-nav-dropdown-items">
<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
</svg> Invoicing</a>
<ul class="c-sidebar-nav-dropdown-items">
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/invoicing/invoice.html"> Invoice<span class="badge badge-danger">PRO</span></a></li>
</ul>
</li>
<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
<svg class="c-sidebar-nav-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg> Email</a>

</li>
</ul>
</li>
<li class="c-sidebar-nav-divider"></li>

</div>

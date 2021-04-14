<div class="sidebar" data-background-color="white" data-active-color="danger">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                ADMIN | DASHBOARD
            </a>
        </div>
         <ul class="nav">
            <li>
                <a href="{{ url('/admin') }}">
                    <i class="ti-envelope"></i>
                    <p>Inbox</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/products/create') }}">
                    <i class="ti-user"></i>
                    <p>Add License Holder</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/viewLicense') }}">
                    <i class="ti-user"></i>
                    <p>View License Holders</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/issuers/create') }}">
                    <i class="ti-user"></i>
                    <p>Create BIN/EIN Providers</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/viewIssuer') }}">
                    <i class="ti-list"></i>
                    <p>View BIN/EIN Providers</p>
                </a>
            </li>
        </ul>
    </div>
</div>

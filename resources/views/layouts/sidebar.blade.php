<div id="sidebar">
    <div class="sidebar-wrapper">

        <div class="sidebar-header">
            <h4 class="text-white fw-bold mb-0">Inventaris</h4>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">

             {{-- ================= ADMIN ================= --}}

                @if(auth()->user()->role === 'admin')
                <li class="sidebar-title text-white-50">Menu Admin</li>

                                <li class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sidebar-item {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}">
                        <i class="bi bi-tags"></i>
                        <span>Kategori</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('products.*') ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}">
                        <i class="bi bi-box-seam"></i>
                        <span>Product</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('suppliers.*') ? 'active' : '' }}">
                    <a href="{{ route('suppliers.index') }}">
                        <i class="bi bi-truck"></i>
                        <span>Supplier</span>
                    </a>
                </li>
                @endif

             {{-- ================= USER ================= --}}
                @if(auth()->check() && auth()->user()->role == 'user')

                    <li class="sidebar-title text-white-50">Menu User</li>

                    <li class="sidebar-item {{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
                        <a href="{{ route('user.dashboard') }}">
                            <i class="bi bi-speedometer2"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('user.categories') ? 'active' : '' }}">
                        <a href="{{ route('user.categories') }}">
                            <i class="bi bi-tags"></i>
                            <span>Kategori</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('user.products') ? 'active' : '' }}">
                    <a href="{{ route('user.products') }}" class="sidebar-link">
                     <i class="bi bi-box-seam"></i>
                     <span>Product</span>
                     </a>
                    </li>
                    
                    <li class="sidebar-item {{ request()->routeIs('user.suppliers') ? 'active' : '' }}">
    <a href="{{ route('user.suppliers') }}" class="sidebar-link">
        <i class="bi bi-truck"></i>
        <span>Supplier</span>
    </a>
</li>


                @endif

            </ul>
        </div>

    </div>
</div>

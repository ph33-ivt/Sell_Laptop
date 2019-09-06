<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">
            <i class="fas fa-user"></i>
            @if (Auth::check())
            {{Auth::user()->name}}
            @endif
        </a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{\Request::route()->getName()=='admin.user.index'?'active':''}}">
                <a href="{{route('admin.user.index')}}" class="nav-link ">
                    <i class="fas fa-users"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item {{\Request::route()->getName()=='admin.role.index'?'active':''}}">
                <a href="{{route('admin.role.index')}}" class="nav-link">
                    <i class="fas fa-arrow-right"></i>
                  <p>Role</p>
                </a>
              </li>
              <li class="nav-item {{\Request::route()->getName()=='admin.permission.index'?'active':''}}">
                <a href="{{route('admin.permission.index')}}" class="nav-link">
                    <i class="fas fa-angle-double-right"></i>
                  <p>Permission</p>
                </a>
              </li>
              <li class="nav-item {{\Request::route()->getName()=='admin.category.index'?'active':''}}">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="fas fa-arrows-alt"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item {{\Request::route()->getName()=='admin.product.index'?'active':''}}">
                <a href="{{route('admin.product.index')}}" class="nav-link">
                    <i class="fab fa-product-hunt"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class="nav-item {{\Request::route()->getName()=='admin.order.index'?'active':''}}">
                <a href="{{route('admin.order.index')}}" class="nav-link">
                    <i class="fab fa-creative-commons-remix"></i>
                  <p>Order</p>
                </a>
              </li>
            </ul>

    <!-- /.sidebar-menu -->
  </div>

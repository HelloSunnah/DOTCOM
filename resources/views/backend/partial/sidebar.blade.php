<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('content') }}">
                <i class="bi bi-grid"></i>
                <span>Content</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('orderList')}}">
                <i class="bi bi-grid"></i>
                <span>category</span>
            </a>
        </li>
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Product_create')}}">
              <i class="bi bi-circle"></i><span>Add Product</span>
            </a>
          </li>
          <li>
            <a href="{{route('Product_list')}}">
              <i class="bi bi-circle"></i><span> Product List</span>
            </a>
          </li>
        
        </ul>
      </li>


         <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Order</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('orderCreate')}}">
              <i class="bi bi-circle"></i><span>Add Order</span>
            </a>
          </li>
          <li>
            <a href="{{route('orderList')}}">
              <i class="bi bi-circle"></i><span>Order List</span>
            </a>
          </li>
        
        </ul>
      </li>




      <li class="nav-item">
            <a class="nav-link " href="{{route('CustomerList')}}">
            <i class="fa-duotone fa-user-hair-mullet"></i>  <span>Customer</span>
            </a>
        </li>
    </ul>

</aside><!-- End Sidebar-->

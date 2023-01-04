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
            <a class="nav-link " href="{{ route('Cate_list') }}">
                <i class="bi bi-grid"></i>
                <span>Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('SubCategory_list') }}">
                <i class="bi bi-grid"></i>
                <span>SubCategory</span>
            </a>
        </li>

      <li class="nav-item">
            <a class="nav-link " href="{{route('Brand_list')}}">
                <i class="bi bi-grid"></i>
                <span>Brand</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('Product_list')}}">
                <i class="bi bi-grid"></i>
                <span>Product</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('orderList')}}">
                <i class="bi bi-grid"></i>
                <span>Order</span>
            </a>
        </li>
      <li class="nav-item">
            <a class="nav-link " href="{{route('CustomerList')}}">
            <i class="fa-duotone fa-user-hair-mullet"></i>  <span>Customer</span>
            </a>
        </li>
    </ul>

</aside><!-- End Sidebar-->

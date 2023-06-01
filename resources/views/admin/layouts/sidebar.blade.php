<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Aussiz Cleaner</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.category.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Category</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.subcategory.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Sub-Category</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.product.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Product</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.banner.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Banner </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.review.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Review</span>
                </a>
            </li>
        </ul>

    </div>
</nav>

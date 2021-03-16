{{--
  ./resources/views/blogs/_news-pagination.blade.php
--}}

<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        {{-- <li class="page-item">
            <a href="#" class="page-link" aria-label="Previous">
                <i class="ti-angle-left"></i>
            </a>
        </li> --}}

        <li class="page-item">
            <a href="news1.html" class="page-link">1</a>
        </li>
        <li class="page-item active">
            <a href="news2.html" class="page-link">2</a>
        </li>
        <li class="page-item active">
            <a href="news3.html" class="page-link">3</a>
        </li>
        {{-- <li class="page-item">
            <a href="news2" class="page-link" aria-label="Next">
                <i class="ti-angle-right"></i>
            </a>
        </li> --}}
    </ul>
</nav>

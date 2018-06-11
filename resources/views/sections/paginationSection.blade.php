<div class="pagination container"    style="margin-top: 20px;">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="{{ $products->appends(request()->except('page'))->previousPageUrl()}}">Prev</a></li>
            <li class="page-item"><a class="page-link" href="{{ $products->appends(request()->except('page'))->currentPage() }}">{{ $products->currentPage() }}</a></li>
            <li class="page-item"><a class="page-link" href="{{ $products->appends(request()->except('page'))->nextPageUrl() }}">Next</a></li>
        </ul>
    </nav>
</div>
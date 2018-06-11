<div class="pagination container" style="margin-top: 20px;">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="{{$products->previousPageUrl()}}">Prev</a></li>
            <li class="page-item"><a class="page-link" href="{{ $products->currentPage() }}">{{ $products->currentPage() }}</a></li>
            <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a></li>
        </ul>
    </nav>
</div>
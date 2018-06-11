@include('sections.selectSection', [ 'name' => 'cat_id'])

<div id="portfolio" class="container">
    <div class="row">
        @if($products)
            @each('sections.productSection', $products, 'product')
        @else
            <h1>Try to create new Products</h1>
        @endif

    </div>
</div>

@include('sections.paginationSection')
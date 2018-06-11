<section class="3u">
    <header>
        <h2>{{ (strlen($product->title) > 18) ? str_limit($product->title, 18 , '...') : $product->title }}</h2>
    </header>
    <a href="#" class="image full"><img src="http://via.placeholder.com/300x200" alt="placeholder"></a>
    <p>{{ (strlen($product->description) > 120) ? str_limit($product->description, 120 , '...') : $product->description }}</p>
    <a href="#" class="button">Read More</a>
</section>
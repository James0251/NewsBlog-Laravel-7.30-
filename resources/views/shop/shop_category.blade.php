<ul id="portfolio-flters">
    <li data-filter="*" class="filter-active">All</li>
    @foreach($shop_categories as $shopCategory)
        <li data-filter=".filter-{{ $shopCategory->slug }}">{{ $shopCategory->name }}</li>
    @endforeach
</ul>

@foreach($shop_products as $shopProduct)
    <div class="col-lg-4 col-md-6 portfolio-wrap filter-voluptatem-mollitia">
        <div class="portfolio">
            <div class="portfolio-item">
                <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info">
                <div style="display: flex; justify-content: space-between;">
                    <div style="text-align: left;"><h2>{{ $shopProduct->name }}</h2></div>
                    <div style="text-align: right;"><span>{{ $shopProduct->sale_price }}</span></div>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <div style="text-align: left;"><span>{{ $shopProduct->stock_status }}</span></div>
                    <div style="text-align: right;"><span>{{ $shopProduct->regular_price." ₽" }}</span></div>
                </div>
                <p>{{ $shopProduct->short_description }}</p>
            </div>
        </div>
    </div>
@endforeach



@extends('layouts.main.index')

@section('content')

    <main id="main">

        <!-- ======= Our Team Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Shop</h2>
                    <ol>
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Our Team</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Team Section -->

        <!-- ======= Portfolio Section ======= -->
        <section class="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">

                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                @foreach($shop_categories as $shopCategory)
                                <li data-filter=".filter-{{ $shopCategory->slug }}">{{ $shopCategory->name }}</li>
{{--                                <li data-filter=".filter-card">Card</li>--}}
{{--                                <li data-filter=".filter-web">Web</li>--}}
                                @endforeach
                            </ul>

                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-provident-sequi">
                        <div class="portfolio-item">
                            <img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>App 1</h3>
                                <div>
                                    <a href="{{ asset('img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-dolor-cum">
                        <div class="portfolio-item">
                            <img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>Web 3</h3>
                                <div>
                                    <a href="{{ asset('img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis repudiandae perferendis qui. Neque non quidem sit sed pariatur quia modi ea occaecati. Incidunt ea non est corporis in.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->


    </main><!-- End #main -->

@endsection

<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3048">
    <div class='container'>
        <div class="row">
            <div class="col-12 col-lg-9 mt-5">
                <div class="d-flex justify-content-between mb-3">

                    <span>Showing 1-9 of 10 sesults</span>
    
                    <div class="col-auto">
                        <select class="form-select form-select-sm">
                            <option value="default">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="newness">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price">Sort by price: high to low</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 zoom mb-4">
                        <div class="border position position-relative">
                            <a href="#">
                                <img class="img-fluid img-product" src="/images/iPhone5_Replacement_Battery-300x300.jpg" alt="">
                            </a>
                            <div class="add-to-cart py-2 position-absolute bottom-0 start-0 w-100">
                                <a href="#" class="text-decoration-none text-white text-uppercase">Add to cart</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column pt-2">
                            <a href="#" class="fw-semibold fs-5 text-dark text-decoration-none">Aellentesque habitant</a>
                            <span class="price">$56.00</span>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 zoom mb-4">
                        <div class="border position position-relative">
                            <a href="#">
                                <img class="img-fluid img-product" src="/images/Jakemy-JM-OP08-300x300.jpg" alt="">
                            </a>
                            <div class="add-to-cart py-2 position-absolute bottom-0 start-0 w-100">
                                <a href="#" class="text-decoration-none text-white text-uppercase">Add to cart</a>
                            </div>
                            <div class="rounded-circle text-white circle-sale d-flex align-items-center justify-content-center">
                                Sale!
                            </div>
                        </div>
                        <div class="d-flex flex-column pt-2">
                            <a href="#" class="fw-semibold fs-5 text-dark text-decoration-none">Aenean ultricies</a>
                            <span class="price price-sale mt-2">$56.00</span>
                            <span class="price text-decoration-underline">$56.00</span>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 zoom mb-4">
                        <div class="border position position-relative">
                            <a href="#">
                                <img class="img-fluid img-product" src="/images/Nokia-X2-00-X3-X3-00-768x768.jpg" alt="">
                            </a>
                            <div class="add-to-cart py-2 position-absolute bottom-0 start-0 w-100">
                                <a href="#" class="text-decoration-none text-white text-uppercase">Add to cart</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column pt-2">
                            <a href="#" class="fw-semibold fs-5 text-dark text-decoration-none">Afeugiat vitae</a>
                            <span class="price">$56.00</span>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 zoom mb-4">
                        <div class="border position position-relative">
                            <a href="#">
                                <img class="img-fluid img-product" src="/images/93e6e561ea34-300x300.jpg" alt="">
                            </a>
                            <div class="add-to-cart py-2 position-absolute bottom-0 start-0 w-100">
                                <a href="#" class="text-decoration-none text-white text-uppercase">Add to cart</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column pt-2">
                            <a href="#" class="fw-semibold fs-5 text-dark text-decoration-none">Malesuada fames</a>
                            <span class="price">$56.00</span>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 zoom mb-4">
                        <div class="border position position-relative">
                            <a href="#">
                                <img class="img-fluid img-product" src="/images/Xiaomi-Redmi-5A-5.jpg" alt="">
                            </a>
                            <div class="add-to-cart py-2 position-absolute bottom-0 start-0 w-100">
                                <a href="#" class="text-decoration-none text-white text-uppercase">Select options</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column pt-2">
                            <a href="#" class="fw-semibold fs-5 text-dark text-decoration-none">Oestibulum tortor</a>
                            <span class="price">$56.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
            <div class="row">
                    
            </div>
        </div>
    </div>
</div>
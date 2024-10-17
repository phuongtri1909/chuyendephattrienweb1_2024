<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3064">
    <div id="testimonial" style="background-image: url(/images/testimonial-bg-1.jpg);">
        <div class="section-title">
            <h2>Testimonial</h2>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="recommender-comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.</p>
                        </div>
                        <div class="recommender-info">
                            <span class="recommender-name">Michelle Walsh,</span> <span class="recommender-role">Company</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="recommender-comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.</p>
                        </div>
                        <div class="recommender-info">
                            <span class="recommender-name">Mohammad Al Omayer,</span> <span class="recommender-role">Company</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="recommender-comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.</p>
                        </div>
                        <div class="recommender-info">
                            <span class="recommender-name">Ashley Dean,</span> <span class="recommender-role">Company</span>
                        </div>
                    </div>
                </div>
            </div>
<!-- 
            <div class="owl-controls">
                <div class="owl-pagination">
                    <div class="owl-page"><span class=""><img src="/images/testimonial-client-01-1.jpg" alt="" class="img-responsive"></span></div>
                    <div class="owl-page active"><span class=""><img src="/images/testimonial-client-02-1.jpg" alt="" class="img-responsive"></span></div>
                    <div class="owl-page"><span class=""><img src="/images/testimonial-client-03-1.jpg" alt="" class="img-responsive"></span></div>
                </div>
            </div> -->
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
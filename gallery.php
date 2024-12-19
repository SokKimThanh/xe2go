<!DOCTYPE html>
<html lang="en">

<?php include("../xe2go/public/templates/link.php") ?>

<body>
    <?php include("../xe2go/public/templates/header.php") ?>

    <!-- content -->
    <section id="gallery">
        <section id="upcomming">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <div>
                            <h1>Upcoming Events</h1>
                            <hr>
                        </div>
                        <div>
                            <span class="bi bi-trash"></span>
                            <p>View All</p>
                        </div>
                    </div>
                </div>
                <div class="row filters-navigation">
                    <div class="col-sm-8 filters">
                        <span class="filter active" data-filter="all">Tất cả</span>
                        <span class="filter" data-filter="conference">Hội Nghị</span>
                        <span class="filter" data-filter="festivals">Festival</span>
                        <span class="filter" data-filter="meeting">Meeting</span>
                        <span class="filter" data-filter="workshop">Workshop</span>
                    </div>
                    <div class="col-sm-4 navigation">
                        <button id="prev-btn" disabled><span class="bi bi-arrow-left"></span></button>
                        <button id="next-btn"><span class="bi bi-arrow-right"></span></button>
                    </div>
                </div>
                <div class="row events">
                    <div class="col-sm-4 event conference">
                        <div class="event-tag">Hội Nghị</div>
                        <div class="event-info">
                            <h2>Saturday at the Museum Series</h2>
                            <p class="date">22 tháng 11, 2023</p>
                            <p class="location">Trung tâm Thành phố, 27 Đường Division, Hoa Kỳ</p>
                        </div>
                    </div>
                    <div class="col-sm-4 event workshop">
                        <div class="event-tag">Workshop</div>
                        <div class="event-info">
                            <h2>Saturday at the Museum Series</h2>
                            <p class="date">22 tháng 11, 2023</p>
                            <p class="location">Trung tâm Thành phố, 27 Đường Division, Hoa Kỳ</p>
                        </div>
                    </div>
                    <div class="col-sm-4 event meeting">
                        <div class="event-tag">Meeting</div>
                        <div class="event-info">
                            <h2>Cultural Council Grant Meeting</h2>
                            <p class="date">24 tháng 11, 2023</p>
                            <p class="location">Trung tâm Thành phố, 27 Đường Division, Hoa Kỳ</p>
                        </div>
                    </div>
                    <div class="col-sm-4 event conference">
                        <div class="event-tag">Hội Nghị</div>
                        <div class="event-info">
                            <h2>Smart City Council Meeting</h2>
                            <p class="date">28 tháng 11, 2023</p>
                            <p class="location">Trung tâm Thành phố, 27 Đường Division, Hoa Kỳ</p>
                        </div>
                    </div>
                    <div class="col-sm-4 event festivals">
                        <div class="event-tag">Festival</div>
                        <div class="event-info">
                            <h2>Sports Games for Children</h2>
                            <p class="date">30 tháng 11, 2023</p>
                            <p class="location">Trung tâm Thành phố, 27 Đường Division, Hoa Kỳ</p>
                        </div>
                    </div>
                    <div class="col-sm-4 event festivals">
                        <div class="event-tag">Festival</div>
                        <div class="event-info">
                            <h2>Smart City Chess Club Meeting</h2>
                            <p class="date">12 tháng 12, 2023</p>
                            <p class="location">Trung tâm Thành phố, 27 Đường Division, Hoa Kỳ</p>
                        </div>
                    </div>
                    <div class="col-sm-4 event festivals">
                        <div class="event-tag">Festival</div>
                        <div class="event-info">
                            <h2>Friendly Darts Tournament</h2>
                            <p class="date">23 tháng 12, 2023</p>
                            <p class="location">Trung tâm Thành phố, 27 Đường Division, Hoa Kỳ</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </section>

    <?php include("../xe2go/public/templates/footer.php") ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./public/js/owl.carousel.min.js"></script>
<script src="./public/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/lightgallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/plugins/zoom/lg-zoom.umd.min.js"></script>

</html>
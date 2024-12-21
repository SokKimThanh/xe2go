<!--
Start: 18:50 21/12/2024
Modified: 19:51 21/12/2024
-->
<!DOCTYPE html>
<html lang="en">

<?php include("../xe2go/public/templates/link.php") ?>

<body>
    <?php include("../xe2go/public/templates/header.php") ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- #region -->
    <section id="contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <h1 class="contactus-title">
                        Thông tin liên hệ
                    </h1>
                    <p>Hãy liên lạc với các chuyên gia của XE2GO để nhận dịch vụ chất lượng!</p>
                    <ul>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-phone fa-2x"></i>
                                <span class="ms-3">0348.798.398 - <a href="#" class="text-decoration-none">Liên hệ Zalo</a></span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope fa-2x"></i>
                                <span class="ms-3">xe2govn@gmail.com</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                <span class="ms-3">559 Phạm Ngọc Thạch, Phường Phú Mỹ, TP Thủ Dầu Một, Bình Dương</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-clock fa-2x"></i>
                                <span class="ms-3">Thứ 2 - Thứ 7 | 08:00 - 17:00</span>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div id="my_map_add" style="width:100%;height:300px;"></div>

                    <!-- <div class="map">
                    <iframe src="https://www.google.com/maps/embed" frameborder="0" style="width:100%; height:300px;" allowfullscreen></iframe>
                </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- #endregion -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php include("../xe2go/public/templates/footer.php") ?>
    <?php include("../xe2go/public/templates/script.php") ?>
</body>

<script type="text/javascript">
    function my_map_add() {
        var myMapCenter = new google.maps.LatLng(11.011506084026417, 106.67267845123271);
        var myMapProp = {
            center: myMapCenter,
            zoom: 12,
            scrollwheel: false,
            draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("my_map_add"), myMapProp);
        var marker = new google.maps.Marker({
            position: myMapCenter
        });
        marker.setMap(map);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=your_key&callback=my_map_add"></script>

</html>
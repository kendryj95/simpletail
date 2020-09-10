<?php

    /*!
     * ifsoft.co.uk
     *
     * http://ifsoft.com.ua, https://ifsoft.co.uk, https://raccoonsquare.com
     * raccoonsquare@gmail.com
     *
     * Copyright 2012-2020 Demyanchuk Dmitry (raccoonsquare@gmail.com)
     */

    if (!defined("APP_SIGNATURE")) {

        header("Location: /");
        exit;
    }

    if (auth::isSession() && auth::getTypeuser() === "BRAND") {
        header("Location: /".auth::getCurrentUserUsername());
        exit;
    }

    $filters_visible = 0;

    if (isset($_COOKIE['search-filters-visible'])) {

        $filters_visible = 1;
    }

    $lat = 37.773972;
    $lng = -122.431297;

    if (isset($_COOKIE['search-filters-lat'])) {

        $lat = $_COOKIE['search-filters-lat'];
    }

    if (isset($_COOKIE['search-filters-lng'])) {

        $lng = $_COOKIE['search-filters-lng'];
    }

    $locationType = 0; //Everywhere
    $distance = 50; // 50km

    $query = "";
    $categoryId = 0;
    $sortType = 0;
    $moderationType = 0;
    $search_by = null;
    $range_1 = null;
    $range_2 = null;
    $ranges_prices = "";

    if (!isset($_COOKIE['moderation_type'])) {

        if (WEB_SHOW_ONLY_MODERATED_ADS_BY_DEFAULT) {

            $moderationType = 1;
        }

    } else {

        $moderationType = isset($_COOKIE['moderation_type']) ? $_COOKIE['moderation_type'] : 0; // all
        $moderationType = helper::clearInt($moderationType);
    }

    if (isset($_GET['query']) || isset($_GET['category'])) {

        $query = isset($_GET['query']) ? $_GET['query'] : '';
        $categoryId = isset($_GET['category']) ? $_GET['category'] : 0;
        $sortType = isset($_GET['sortType']) ? $_GET['sortType'] : 0;
        $search_by = isset($_GET['type']) ? $_GET['type'] : 1;
        $range_1 = isset($_GET['range_1']) ? $_GET['range_1'] : null;
        $range_2 = isset($_GET['range_2']) ? $_GET['range_2'] : null;
        if ($range_1 && $range_1 != "" && $range_2 && $range_2 != "")
            $ranges_prices = $range_1."-".$range_2;

        $locationType = isset($_GET['locationType']) ? $_GET['locationType'] : 0;
        $distance = isset($_GET['distance']) ? $_GET['distance'] : 0;

        $lat = isset($_GET['lat']) ? $_GET['lat'] : 0.000000;
        $lng = isset($_GET['lng']) ? $_GET['lng'] : 0.000000;

        if (isset($_GET['moderationType'])) {

            $moderationType = 1;

        } else {

            $moderationType = 0;
        }

        $query = helper::clearText($query);
        $query = helper::escapeText($query);

        $categoryId = helper::clearInt($categoryId);
        $sortType = helper::clearInt($sortType);

        $locationType = helper::clearInt($locationType);
        $distance = helper::clearInt($distance);

        if ($distance < 1) $distance = 30;
        if ($distance > 700) $distance = 30;

        if (!helper::isFloat($lat) || !helper::isFloat($lng) || $locationType == 0) {

            $lat = 0.000000;
            $lng = 0.000000;

        } else {

            @setcookie('search-filters-lat', "{$lat}", time() + 7 * 24 * 3600, "/");
            @setcookie('search-filters-lng', "{$lng}", time() + 7 * 24 * 3600, "/");
        }
    }

    @setcookie('moderation_type', $moderationType, time() + 7 * 24 * 3600, "/");

    $finder = new finder($dbo);
    $finder->setRequestFrom(auth::getCurrentUserId());
    $finder->setRequestFromApp(APP_TYPE_WEB);

    $pageId = 1;

    if (!empty($_POST)) {

        $query = isset($_POST['query']) ? $_POST['query'] : '';
        $pageId = isset($_POST['pageId']) ? $_POST['pageId'] : 0;
        $categoryId = isset($_POST['category']) ? $_POST['category'] : 0;
        $sortType = isset($_POST['sortType']) ? $_POST['sortType'] : 0;
        $search_by = isset($_POST['type']) ? $_POST['type'] : 1;
        $range_1 = isset($_GET['range_1']) ? $_GET['range_1'] : null;
        $range_2 = isset($_GET['range_2']) ? $_GET['range_2'] : null;
        if ($range_1 && $range_1 != "" && $range_2 && $range_2 != "")
            $ranges_prices = $range_1."-".$range_2;

        $locationType = isset($_POST['locationType']) ? $_POST['locationType'] : 0;
        $distance = isset($_POST['distance']) ? $_POST['distance'] : 0;

        $lat = isset($_POST['lat']) ? $_POST['lat'] : 0.000000;
        $lng = isset($_POST['lng']) ? $_POST['lng'] : 0.000000;

        if (isset($_POST['moderationType'])) {

            $moderationType = 1;

        } else {

            $moderationType = 0;
        }

        $query = helper::clearText($query);
        $query = helper::escapeText($query);

        $pageId = helper::clearInt($pageId);
        $categoryId = helper::clearInt($categoryId);
        $sortType = helper::clearInt($sortType);

        $locationType = helper::clearInt($locationType);
        $distance = helper::clearInt($distance);

        if ($distance < 1) $distance = 30;
        if ($distance > 700) $distance = 30;

        if (!helper::isFloat($lat) || !helper::isFloat($lng) || $locationType == 0) {

            $lat = 0.000000;
            $lng = 0.000000;
        }

        $finder->addCategoryFilter($categoryId);

        if ($moderationType != 0) $finder->setModerationFilter(FILTER_ONLY_YES); // Show only moderated items

        $result = $finder->getItems($query, $pageId, $sortType, $lat, $lng, $distance, $search_by, $ranges_prices);

        $result['items_count'] = count($result['items']);

        if (count($result['items']) != 0) {

            ob_start();

            foreach ($result['items'] as $key => $value) {

                draw::item($value, $CURRENCY_ARRAY, $LANG);
            }

            $result['html'] = ob_get_clean();
        }

        echo json_encode($result);
        exit;
    }

    $page_id = "main";

    $css_files = array();
    $page_title = APP_TITLE." | ".$LANG['main-page-browser-title'];

    include_once("common/header.inc.php");

?>

<body class="body-directory-index">

    <div class="page">
        <div class="page-main">

            <?php

                include_once("common/topbar.inc.php");
            ?>

            <!-- End topbar -->

            <div class="content my-3 my-md-5">
                <div class="container">

                    <!-- Adsense banner -->

                    <?php

                        require_once ("common/adsense_banner.inc.php");
                    ?>

                    <!-- Search form -->
                    <?php if ((!auth::isSession() || auth::getTypeuser() === "STORE")): ?>

                    <form id="search-form" class="form-horizontal" action="/" method="get">

                        <input autocomplete="off" type="hidden" name="lat" value="0.000000">
                        <input autocomplete="off" type="hidden" name="lng" value="0.000000">
                        <input autocomplete="off" type="hidden" name="country" value="">
                        <input autocomplete="off" type="hidden" name="city" value="">
                        <input autocomplete="off" type="hidden" name="pageId" value="1">

                        <div class="card">
                            <div class="card-body pt-3 pb-1">

                                <div class="row">

                                    <div class="col-sm-12 col-md-12 col-lg-7">
                                        <div class="form-group field-query">
                                            <label class="form-label" for="query"><?php echo $LANG['label-search-query']; ?></label>
                                            <input type="text" id="query" class="form-control" name="query" placeholder="<?php echo $LANG['placeholder-search-query']; ?>" value="<?php echo $query; ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-3">
                                        <div class="custom-controls-stacked">
                                            <div class="form-label"><?php echo $LANG['label-search-by']; ?></div>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2 mt-lg-0 location-type location-address ">
                                                    <select id="type" class="form-control" name="type">
                                                        <option value="1" <?php if ($search_by == 1): echo 'selected'; endif; ?>><?= $LANG['option-product-name'] ?></option>
                                                        <option value="2" <?php if ($search_by == 2): echo 'selected'; endif; ?>><?= $LANG['option-keywords'] ?></option>
                                                        <option value="3" <?php if ($search_by == 3): echo 'selected'; endif; ?>><?= $LANG['option-country-brand'] ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                   <!-- <div class="col-sm-12 col-md-12 col-lg-3">
                                        <div class="custom-controls-stacked">
                                            <div class="form-label"><?php echo $LANG['label-ad-category']; ?></div>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2 mt-lg-0 location-type location-address ">
                                                    <select id="category" class="form-control" name="category">
                                                        <option <?php if ($categoryId == 0) echo "selected"; ?> value="0"><?php echo $LANG['label-all-categories']; ?></option>
                                                        <?php

                                                            $category = new category($dbo);
                                                            $category->setLanguage($LANG['lang-code']);
                                                            $categories = $category->getItems(0);

                                                            foreach ($categories['items'] as $key => $item) {

                                                                ?>
                                                                <option <?php if ($categoryId == $item['id']) echo "selected"; ?> value="<?php echo $item['id']; ?>"><?php echo $item['title']; ?></option>
                                                                <?php
                                                            }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="col-search-actions col-12 col-sm-12 col-md-12 col-lg-2">
                                        <div class="form-group">
                                            <div class="form-label">&nbsp;</div>
                                            <div class="btn-group w-100">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    <i class="fa fa-search pr-2"></i><?php echo $LANG['action-find']; ?>
                                                </button>
                                                <button class="btn btn-primary btn-toggle-search-filters" type="button">
                                                    <i class="fa fa-cog"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div id="search-filters" class=" <?php if ($filters_visible == 0) echo 'hidden'; ?>">

                                    <div class="row pt-2">

                                        <div class="col-sm-12 col-md-4 col-lg-4">

                                            <div class="form-group field-query">
                                                <div class="form-label noselect"><?php echo $LANG['option-range-prices']; ?></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <input type="number" name="range_1" placeholder="Range min" id="range_1" step="0.01" value="<?= $range_1 ?>" class="form-control">
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <input type="number" name="range_2" placeholder="Range max" id="range_2" step="0.01" value="<?= $range_2 ?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group field-query">
                                                <div class="form-label noselect"><?php echo $LANG['label-search-filters-sort-type']; ?></div>
                                                <select id="sortType" class="form-control" name="sortType">
                                                    <option <?php if ($sortType == 0) echo "selected"; ?> value="0"><?php echo $LANG['label-search-filters-sort-by-new']; ?></option>
                                                    <option <?php if ($sortType == 1) echo "selected"; ?> value="1"><?php echo $LANG['label-search-filters-sort-by-old']; ?></option>
                                                </select>
                                            </div>

                                            <div class="form-group field-query">
                                                <div class="form-group field-online">
                                                    <div class="form-label noselect"><?php echo $LANG['label-search-filters-moderation-type']; ?></div>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="online" class="custom-control-input" name="moderationType" value="1" <?php if ($moderationType != 0) echo 'checked'; ?>>
                                                        <span class="custom-control-label"><?php echo $LANG['label-search-filters-moderation-only']; ?></span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </form>

                    <?php endif ?>


                    <!-- Search form end -->



                    <!-- Start Content Block -->

                    <div class="dashboard-block mb-3">

                        <?php

                            $finder->addCategoryFilter($categoryId);

                            if ($moderationType != 0) $finder->setModerationFilter(FILTER_ONLY_YES); // Show only moderated items

                            $tmp_lat = 0.000000;
                            $tmp_lng = 0.000000;

                            if ($locationType != 0) {

                                $tmp_lat = $lat;
                                $tmp_lng = $lng;
                            }

                            $result = $finder->getItems($query, 0, $sortType, $tmp_lat, $tmp_lng, $distance, $search_by, $ranges_prices);

                            if (strlen($query) == 0 && $categoryId == 0 && $locationType == 0) {

                                ?>
                                    <h3><?php echo $LANG['label-items-latest']; ?></h3>
                                <?php

                            } else {

                                if (count($result['items']) > 0) {

                                    ?>
                                        <h3><?php echo sprintf($LANG['msg-search-success'], $result['itemsCount']); ?></h3>
                                    <?php

                                } else {

                                    ?>
                                        <h3><?php echo $LANG['msg-search-empty']; ?></h3>
                                    <?php
                                }
                            }
                        ?>

                            <div class="list-view items-list-view">

                                <div class="row row-cards row-deck items-grid-view">

                                    <?php

                                        if (count($result['items']) > 0) {

                                            foreach ($result['items'] as $key => $value) {

                                                draw::item($value, $CURRENCY_ARRAY, $LANG);
                                            }
                                        }

                                     ?>

                                </div>

                                <div class="row row-cards row-deck loading-more-container <?php if (count($result['items']) < 20) echo 'hidden'; ?>">
                                    <div class="d-lg-block col-md-12 mb-5">
                                        <div class="list-view-banner p-3 d-flex justify-content-between align-items-center loading-more-banner">
                                            <h4 class="mb-0 d-flex flex-row align-items-center loading-more-text"></h4>
                                            <a class="btn btn-primary btn-lg float-right d-flex justify-content-between align-items-center loading-more-button" href="javascript:void(0)">
                                                <div class="btn-loader hidden rounded justify-content-center align-items-center d-sm-flex loading-more-progress"></div>
                                                <i class="fa fa-arrow-down loading-more-button-icon mr-1"></i>
                                                <span class="ml-2 d-sm-inline"><?php echo $LANG['action-more']; ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                    </div> <!-- End Content Block -->

                </div> <!-- End container -->
            </div> <!-- End  -->

        </div> <!-- End page main-->


        <?php

            include_once("common/footer.inc.php");
        ?>

    </div> <!-- End page -->

    <script src="/js/geo.js"></script>

        <script type="text/javascript">

            var $distanceSelect = $('select#distance');
            var $mapView = $('div.map-view');
            var $form = $("#search-form");

            $(document).on('click', '.loading-more-button', function() {

                var $this = $(this);

                if ($this.hasClass('disabled')) {

                    return;
                }

                $this.addClass('disabled');
                $this.find('div.btn-loader').removeClass('hidden');
                $this.find('i.loading-more-button-icon').addClass('hidden');

                $.ajax({
                    type: 'POST',
                    url: $form.attr('action'),
                    data: $form.serialize(),
                    dataType: 'json',
                    timeout: 30000,
                    success: function(response) {

                        if (response.hasOwnProperty('html')) {

                            $("div.items-grid-view").append(response.html);
                        }

                        if (response.hasOwnProperty('items_count')) {

                            if (response.items_count < 20) {

                                $('div.loading-more-container').addClass('hidden');

                            } else {

                                var pageId = $form.find("input[name=pageId]").val();

                                pageId++;

                                $form.find("input[name=pageId]").val(pageId);
                            }
                        }

                        $this.removeClass('disabled');
                        $this.find('div.btn-loader').addClass('hidden');
                        $this.find('i.loading-more-button-icon').removeClass('hidden');
                    },
                    error: function(xhr, status, error) {

                        $this.removeClass('disabled');
                        $this.find('div.btn-loader').addClass('hidden');
                        $this.find('i.loading-more-button-icon').removeClass('hidden');
                    }
                });
            });

            $('select#locationType').on('change', function() {

                switch (this.value) {

                    case "0": {

                        locationType = 0;

                        $mapView.hide();
                        $distanceSelect.attr("disabled", true);

                        break;
                    }

                    case "1": {

                        locationType = 1;

                        if (!map_initialized) {

                            map_initialized = true;

                        }

                        $mapView.removeClass("hidden");
                        $mapView.show();
                        $distanceSelect.attr("disabled", false);

                        break;
                    }

                    default: {

                        return;
                    }
                }
            });

            $(document).on('click', '.btn-toggle-search-filters', function() {

                var $filtersBlock = $('div#search-filters');

                if ($filtersBlock.hasClass('hidden')) {

                    $filtersBlock.removeClass('hidden');

                    $.cookie("search-filters-visible", "yes", { expires : 7, path: '/' });

                    if (locationType != 0 && !map_initialized) {

                        map_initialized = true;

                    }

                } else {

                    $filtersBlock.addClass('hidden');

                    $.removeCookie('search-filters-visible', { path: '/' })
                }
            });

        </script>

</body>
</html>
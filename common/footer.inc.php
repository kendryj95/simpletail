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

?>

<footer class="footer" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto m-auto ml-md-auto">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <ul class="list-inline list-inline-dots mb-2 text-center">
                                <li class="list-inline-item"><a href="/about"><?php echo $LANG['label-footer-about']; ?></a></li>
                                <li class="list-inline-item"><a href="/terms"><?php echo $LANG['label-footer-terms']; ?></a></li>
                                <li class="list-inline-item"><a href="/gdpr">GDPR</a></li>
                                <li class="list-inline-item"><a href="/privacy"><?php echo $LANG['label-footer-privacy']; ?></a></li>
                                <li class="list-inline-item"><a href="/cookie"><?php echo $LANG['label-footer-cookies']; ?></a></li>
                                <li class="list-inline-item"><a href="/support"><?php echo $LANG['label-footer-support']; ?></a></li>
                                <li class="list-inline-item"><a data-toggle="modal" data-target="#lang-box" href="#"><i class="pr-1 fa fa-globe"></i><?php echo $LANG['lang-name']; ?></a></li>
                            </ul>

                            <ul class="list-inline text-center">
                                <?php

                                    if (strlen(FACEBOOK_PAGE_LINK) != 0) {

                                        ?>
                                        <li class="list-inline-item">
                                            <a href="<?php echo FACEBOOK_PAGE_LINK; ?>" target="_blank">
                                                <i class="pr-1 fab fa-facebook-square"></i>Facebook</a>
                                        </li>
                                        <?php
                                    }
                                ?>
                                <li class="list-inline-item"><?php echo APP_NAME; ?> © <?php echo APP_YEAR; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal modal-form fade" id="lang-box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title placeholder-title" id="profile-new-message-title"><?php echo $LANG['page-language']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>

                <div class="modal-body">

                    <?php

                    foreach ($LANGS as $name => $val) {

                        ?>

                        <a style="<?php if ($val === $LANG['lang-code']) echo 'font-weight: 600' ?>"  onclick="App.setLanguage('<?php echo $val; ?>'); return false;" href="javascript:void(0)" class="flat_btn d-block" ><?php echo $name ?></a>

                        <?php
                    }

                    ?>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $LANG['action-close']; ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-form fade" id="info-box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title placeholder-title" id="info-box-title"><?php echo APP_TITLE; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>

                <div class="modal-body">

                    <div id="info-box-message" class="error-summary alert alert-danger"></div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $LANG['action-close']; ?></button>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/js.cookie-2.2.0.min.js"></script>

<script type="text/javascript" src="/js/app.js?x=45"></script>
<script type="text/javascript" src="/js/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="/js/common.js"></script>

    <script type="text/javascript">

        App.setLanguage = function(language) {

            $.cookie("lang", language, { expires : 7, path: '/' });
            $('#lang-box').modal('hide');
            location.reload();
        };

    </script>

    <script type="text/javascript">

        App.api_version = 'v1';
        App.api_path = '/api/' + App.api_version + "/method/";

        var options = {

            pageId: "<?php echo $page_id; ?>"
        };

        var account = {

            id: "<?php echo auth::getCurrentUserId(); ?>",
            username: "<?php echo auth::getCurrentUserUsername(); ?>",
            fullname: "<?php echo auth::getCurrentUserFullname(); ?>",
            photoUrl: "<?php echo auth::getCurrentUserPhotoUrl(); ?>",
            accessToken: "<?php echo auth::getAccessToken(); ?>",
            lastNotifyView: "<?php echo auth::getCurrentLastNotifyView(); ?>"
        };

        <?php

            if (auth::isSession()) {

                ?>
                    App.init();
                <?php
            }

        ?>

        $('.attributes').tagsinput({
            maxTags: 5,
            confirmKeys: [13, 44, 188, 9]
        });

        $('.other-input-tags').tagsinput({
            confirmKeys: [13, 44, 188, 9]
        });

        $(".attributes, .other-input-tags").keypress(function(e) {
            if (e.which === 13) {
                e.preventDefault();
            }
        });

    </script>

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

        } else {

            $filtersBlock.addClass('hidden');

            $.removeCookie('search-filters-visible', { path: '/' })
        }
    });

</script>
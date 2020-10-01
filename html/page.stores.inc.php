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


    $finder = new finder($dbo);
    $finder->setRequestFrom(auth::getCurrentUserId());
    $finder->setRequestFromApp(APP_TYPE_WEB);

    $pageId = 1;

    $page_id = "stores";

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
                    <!-- Start Content Block -->

                    <div class="dashboard-block mb-3">

                        <?php
                        $result = $finder->getStores();

                        ?>

                        <?php if (count($result['items']) > 0): ?>
                        <h3><?php echo $LANG['label-all-stores']; ?></h3>
                        <?php else : ?>
                        <h3><?php echo $LANG['msg-stores-empty']; ?></h3>
                        <?php endif ?>

                        <div class="list-view items-list-view">

                                <div class="row row-cards row-deck items-grid-view">

                                    <?php

                                        if (count($result['items']) > 0) {

                                            foreach ($result['items'] as $key => $value) {

                                                draw::itemStore($value);
                                            }
                                        }

                                     ?>

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

</body>
</html>
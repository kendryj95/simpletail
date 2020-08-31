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

    $page_id = "terms";

    $css_files = array();
    $page_title = $LANG['page-terms']." | ".APP_TITLE;

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

                    <div class="card">
                        <div class="card-body">
                            <div class="text-wrap p-4">
                                <h2 class="mt-0 mb-4"><?php echo $LANG['page-terms']; ?></h2>

                                <?php

                                    if (file_exists("content/terms/".$LANG['lang-code'].".inc.php")) {

                                        include_once("content/terms/".$LANG['lang-code'].".inc.php");

                                    } else {

                                        include_once("content/terms/en.inc.php");
                                    }
                                ?>

                            </div>
                        </div>
                    </div>

                </div> <!-- End container -->
            </div> <!-- End  -->

        </div> <!-- End page main-->


        <?php

            include_once("common/footer.inc.php");
        ?>

    </div> <!-- End page -->

</body>
</html>
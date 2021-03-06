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
		<div class="header py-2">
			<div class="container">
				<div class="d-flex">

					<a class="header-brand" href="<?= auth::isSession() ? "/" : "http://simpletail.com" ?>">
						<img class="header-brand-img" src="/img/topbar_logo.png" alt="<?php echo APP_NAME; ?>" title="<?php echo APP_TITLE; ?>">
					</a>

				<?php

					if (!auth::isSession()) {

                        ?>

                        <div class="d-flex align-items-center order-lg-2 ml-auto">

                            <?php

                                if (isset($page_id) && $page_id != "login") {

                                    ?>

                                        <a class="btn btn-outline-primary" href="/login"><?php echo $LANG['action-login']; ?></a>

                                    <?php

                                } else {

                                    ?>

                                        <a class="btn btn-outline-primary" href="/signup"><?php echo $LANG['action-signup']; ?></a>

                                    <?php
                                }
					        ?>

                            <?php if (isset($page_id) && $page_id !== "login" && $page_id !== "signup" && $page_id !== "restore" && $page_id !== "restore_new" && $page_id !== "restore_sent"): ?>

                                <div class="nav-item">
                                    <a href="/login?continue=/item/new" class="btn btn-add-item" title="<?php echo $LANG['action-new-classified']; ?>" rel="tooltip">
                                        <i class="fa fa-plus"></i>
                                        <span class="d-none d-sm-inline-block"><?php echo $LANG['action-new-classified']; ?></span>
                                    </a>
                                </div>
                            <?php endif ?>

                        </div>

                        <?php

					} else {

						?>

							<div class="d-flex align-items-center order-lg-2 ml-auto">

                                <?php if (auth::isSession() && auth::getTypeuser() !== "BRAND"): ?>
                                    <div class="d-none d-sm-block">


                                        <a class="nav-link py-2 icon position-relative" href="/account/favorites">
                                            <i class="fa fa-star"></i>
                                            <span class="nav-unread hidden favorites-badge"></span>
                                        </a>

                                    </div>
                                <?php endif ?>

                                <div class="d-none d-sm-block">

                                    <a class="nav-link py-2 icon position-relative" href="/account/messages">
                                        <i class="fa fa-envelope"></i>
                                        <span class="nav-unread hidden messages-badge"></span>
                                    </a>
                                </div>

								<?php

									if (isset($page_id) && $page_id != "notifications") {

										?>
											<div class="dropdown dropdown-notifications d-none d-sm-block">
												<a class="nav-link py-2 icon dropdown-notifications-button" data-toggle="dropdown" href="/account/notifications">
													<i class="fa fa-bell"></i>
													<span class="nav-unread hidden notifications-badge"></span>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow dropdown-menu-notifications" style="right: 0; left: auto;">
													<div class="text-center p-5 dropdown-notifications-loader hidden">
														<div class="loader d-inline"><i class="fa fa-spin fa-spin"></i></div>
													</div>
													<div class="dropdown-notifications-content">
														<div class="dropdown-notifications-list"></div>
														<div class="text-muted text-center py-2 dropdown-notifications-message"><?php echo $LANG['page-notifications-empty-list']; ?></div>
														<div class="dropdown-divider"></div>
														<a href="/account/notifications" class="dropdown-notifications-link dropdown-item text-center text-muted-dark"><?php echo $LANG['action-see-all']; ?></a>
													</div>
												</div>
											</div>
										<?php
									}
								?>

								<?php

									if (isset($page_id) && $page_id != "new_item" && auth::getTypeuser() === "BRAND") {

										?>
											<div class="nav-item d-sm-block">
												<a href="/item/new" class="btn btn-add-item btn-sm" title="<?php echo $LANG['action-new-classified']; ?>" rel="tooltip">
													<i class="fa fa-plus"></i>
													<span class="new-item d-none d-sm-inline-block"><?php echo $LANG['action-new-classified']; ?></span>
												</a>
											</div>
										<?php
									}

									if (auth::getTypeuser() === "BRAND") {

										?>
											<div class="nav-item d-sm-block">
												<a href="/stores" class="btn btn-add-item btn-sm" title="<?php echo $LANG['action-stores']; ?>" rel="tooltip">
													<i class="fa fa-building"></i>
													<span class="new-item d-none d-sm-inline-block"><?php echo $LANG['action-stores']; ?></span>
												</a>
											</div>
										<?php
									}
								?>

								<div class="dropdown">
									<a href="/<?php echo auth::getCurrentUserUsername(); ?>" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span class="avatar" style="background-image: url(<?php echo auth::getCurrentUserPhotoUrl(); ?>); background-position: center; background-size: cover;"></span>
										<span class="ml-2 d-none d-lg-block profile-menu-nav-link">
											<span class="text-default"><?php echo auth::getCurrentUserFullname(); ?></span>
											<small class="text-muted d-block mt-1"><?php echo auth::getCurrentUserUsername(); ?></small>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item" href="/<?php echo auth::getCurrentUserUsername(); ?>"><i class="dropdown-icon fa fa-user-alt"></i><?php echo $LANG['topbar-profile']; ?></a>
                                        <?php if (auth::isSession() && auth::getTypeuser() !== "BRAND"): ?>
                                            <a class="dropdown-item d-block d-md-none" href="/account/favorites">
                                                <span class="float-right">
                                                    <span class="badge badge-primary favorites-badge favorites-primary-badge hidden">0</span>
                                                </span>
                                                <i class="dropdown-icon fa fa-star"></i><?php echo $LANG['topbar-favorites']; ?>
                                            </a>
                                        <?php endif ?>
                                        <a class="dropdown-item d-block d-md-none" href="/account/messages">
											<span class="float-right">
												<span class="badge badge-primary messages-badge messages-primary-badge hidden">0</span>
											</span>
                                            <i class="dropdown-icon fa fa-envelope"></i><?php echo $LANG['topbar-messages']; ?>
                                        </a>
										<a class="dropdown-item d-block d-md-none" href="/account/notifications">
											<span class="float-right">
												<span class="badge badge-primary notifications-badge notifications-primary-badge hidden">0</span>
											</span>
											<i class="dropdown-icon fa fa-bell"></i><?php echo $LANG['topbar-notifications']; ?>
										</a>
										<a class="dropdown-item" href="/account/settings"><i class="dropdown-icon fa fa-cog"></i><?php echo $LANG['topbar-settings']; ?></a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="/support"><i class="dropdown-icon fa fa-question-circle"></i><?php echo $LANG['label-topbar-help']; ?></a>
										<a class="dropdown-item" href="/account/logout?access_token=<?php echo auth::getAccessToken(); ?>&continue=/"><i class="dropdown-icon fa fa-sign-out-alt"></i><?php echo $LANG['topbar-logout']; ?></a>
									</div>
								</div>

							</div>

						<?php
					}
				?>
				</div>
			</div>
		</div>


    <?php

        if (!isset($_COOKIE['privacy'])) {

            if (isset($page_id) && $page_id !== 'signup' && $page_id !== 'login' && $page_id !== 'privacy' && $page_id !== 'cookie' && $page_id !== 'terms') {

                ?>
                    <div class="header header-message" id="cookie-message">
                        <div class="container">
                            <div class="d-flex">
                                <span class="mb-0 w-100 header-text-message text-white">
                                    <?php echo $LANG['label-cookie-message']; ?> <a class="text-white-50" href="/terms"><?php echo $LANG['label-terms-link']; ?></a>, <a class="text-white-50" href="/privacy"><?php echo $LANG['label-terms-privacy-link']; ?></a> <?php echo $LANG['label-terms-and']; ?> <a class="text-white-50" href="/cookie"><?php echo $LANG['label-terms-cookies-link']; ?></a>
                                </span>
                                <div class="d-flex align-items-center order-lg-2 ml-auto">
                                    <div class="nav-item d-sm-block">
                                        <button class="close close-message-button close-privacy-message text-white" title="<?php echo $LANG['action-close']; ?>" rel="tooltip"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            }
        }
    ?>

<?php

$filters_visible = 0;

if (isset($_COOKIE['search-filters-visible'])) {

    $filters_visible = 1;
}

if (isset($page_id) && $page_id !== "main" && $page_id !== "login" && $page_id !== "signup" && (!auth::isSession() || auth::getTypeuser() === "STORE") && auth::getCurrentUserVerified()) {

    ?>

<div class="content my-3 my-md-5">
    <div class="container">
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
                            <input type="text" id="query" class="form-control" name="query" placeholder="<?php echo $LANG['placeholder-search-query']; ?>" value="">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="custom-controls-stacked">
                            <div class="form-label"><?php echo $LANG['label-search-by']; ?></div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2 mt-lg-0 location-type location-address ">
                                    <select id="type" class="form-control" name="type">
                                        <option value="1"><?= $LANG['option-classified-name'] ?></option>
                                        <option value="2"><?= $LANG['option-keywords'] ?></option>
                                        <option value="3"><?= $LANG['option-country-brand'] ?></option>
                                        <option value="4"><?= $LANG['label-classified-certifications'] ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                        <input type="number" name="range_1" placeholder="Range min" id="range_1" step="0.01" value="" class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <input type="number" name="range_2" placeholder="Range max" id="range_2" step="0.01" value="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="moderationType" value="1">

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </form>

    </div>

</div>
    <?php
}
?>

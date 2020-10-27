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

	if (!$auth->authorize(auth::getCurrentUserId(), auth::getAccessToken())) {

		header('Location: /');
		exit;
	}

	$accountId = auth::getCurrentUserId();

	$account = new account($dbo, $accountId);

	$error = false;
	$send_status = false;
	$fullname = "";
	$birthday = "2000-01-01";

	if (auth::isSession()) {

		$ticket_email = "";
	}

	if (!empty($_POST)) {

		$token = isset($_POST['authenticity_token']) ? $_POST['authenticity_token'] : '';

		$sex = isset($_POST['sex']) ? $_POST['sex'] : 0;

		$birthday = isset($_POST['date_incorporation']) ? $_POST['date_incorporation'] : "2000-01-01";

		$phoneNumber = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';

		$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
		$bio = isset($_POST['bio']) ? $_POST['bio'] : '';
		$location = isset($_POST['location']) ? $_POST['location'] : '';
		$facebook_page = isset($_POST['facebook_page']) ? $_POST['facebook_page'] : '';
		$instagram_page = isset($_POST['instagram_page']) ? $_POST['instagram_page'] : '';

		$sex = helper::clearInt($sex);

		$fullname = helper::clearText($fullname);
		$fullname = helper::escapeText($fullname);

        $bio = helper::clearText($bio);

        $bio = preg_replace( "/[\r\n]+/", "<br>", $bio); //replace all new lines to one new line
        $bio = preg_replace('/\s+/', ' ', $bio);         //replace all white spaces to one space

        $bio = helper::escapeText($bio);

		$location = helper::clearText($location);
		$location = helper::escapeText($location);

		$facebook_page = filter_var($facebook_page, FILTER_SANITIZE_URL);
		$facebook_page = helper::clearText($facebook_page);
		$facebook_page = helper::escapeText($facebook_page);

		$instagram_page = filter_var($instagram_page, FILTER_SANITIZE_URL);
		$instagram_page = helper::clearText($instagram_page);
		$instagram_page = helper::escapeText($instagram_page);
		$category_id = isset($_POST['category_id']) ? implode(",",$_POST['category_id']) : null;
		$attributes = isset($_POST['attributes']) ? $_POST['attributes'] : null;
		$address = isset($_POST['address']) ? $_POST['address'] : null;
		$annual_turnover = isset($_POST['annual_turnover']) ? $_POST['annual_turnover'] : null;
		$type_business = isset($_POST['type_business']) ? $_POST['type_business'] : null;
		$url_content_company = isset($_POST['url_content_company']) ? $_POST['url_content_company'] : null;
        $url_content_company = filter_var($url_content_company, FILTER_SANITIZE_URL);
        $url_content_company = helper::clearText($url_content_company);
        $url_content_company = helper::escapeText($url_content_company);
        $number_stores = isset($_POST['number_stores']) ? $_POST['number_stores'] : null;
        $cities_stores = isset($_POST['cities_stores']) ? $_POST['cities_stores'] : null;
        $website = isset($_POST['website']) ? $_POST['website'] : null;
        $website = helper::clearText($website);
        $website = helper::escapeText($website);


		if (auth::getAuthenticityToken() !== $token) {

			$error = true;
		}

		if (!$error) {

			if (helper::isCorrectFullname($fullname)) {

				auth::setCurrentUserFullname($fullname);

				$account->setFullname($fullname);
			}

			if (helper::isCorrectPhoneNew($phoneNumber)) {

				$account->setPhoneNumber($phoneNumber);

			} else {

                if (strlen($phoneNumber) == 0) {

                    $account->setPhoneNumber("");
                }
            }

			if (helper::validateDate($birthday)) {

				$new_date = date('Y-m-d', $birthday);

				$date = new DateTime($birthday);

				//$account->setBirth($date->format('Y'), $date->format('m'), $date->format('d'));
                // Replaced
                $account->setDateIncorporation($birthday);

			}

			$account->setSex($sex);
			$account->setBio($bio);
			$account->setLocation($location);
			$account->setCategory($category_id);
			$account->setAttributes($attributes);
			$account->setAddress($address);
			$account->setAnnualTurnover($annual_turnover);
			$account->setTypeBusiness($type_business);
			$account->setNumberStores($number_stores);
			$account->setCitiesStores($cities_stores);

			if (filter_var($url_content_company, FILTER_VALIDATE_URL) !== false) {

				$account->setUrlCompany($url_content_company);

			} else {

				if (strlen($url_content_company) == 0) {

					$account->setUrlCompany("");
				}
			}



			if (filter_var($website, FILTER_VALIDATE_URL) !== false) {

				$account->setWebsite($website);

			} else {

				if (strlen($website) == 0) {

					$account->setWebsite("");
				}
			}

			if (filter_var($facebook_page, FILTER_VALIDATE_URL) !== false) {

				$account->setFacebookPage($facebook_page);

			} else {

				if (strlen($facebook_page) == 0) {

					$account->setFacebookPage("");
				}
			}

			if (filter_var($instagram_page, FILTER_VALIDATE_URL) !== false) {

				$account->setInstagramPage($instagram_page);

			} else {

				if (strlen($instagram_page) == 0) {

					$account->setInstagramPage("");
				}
			}

			if (isset($_FILES['pdf_document'])) {

			    $currentFile = $account->getPdfDocument();
			    if ($currentFile) {
			        if (file_exists($currentFile)) unlink($currentFile);
                }
                $ext = pathinfo($_FILES['pdf_document']['name'], PATHINFO_EXTENSION);
                $new_file_name = TEMP_PATH."pdf/".sha1_file($_FILES['pdf_document']['tmp_name']).".".$ext;
                @move_uploaded_file($_FILES['pdf_document']['tmp_name'], $new_file_name);
                $account->setPdfDocument($new_file_name);
            }

			header("Location: /account/settings?error=false");
			exit;
		}

		header("Location: /account/settings?error=true");
		exit;
	}

	$accountInfo = $account->get();
	$category = new category($dbo);
	$categories = $category->getItems();

	auth::newAuthenticityToken();

	$page_id = "settings_profile";

	$css_files = array();
	$page_title = $LANG['page-settings-profile']." | ".APP_TITLE;

	include_once("common/header.inc.php");

?>
<style>
    .bootstrap-tagsinput {
        width: 100% !important;
    }
    .tag.label {
        cursor: pointer;
    }
    .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        font-weight: bold;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em;
    }
    .label-info {
        background-color: #37bc9b;
        border-color: #37bc9b;
    }
</style>

<body class="body-directory-index page-profile">

	<div class="page">
		<div class="page-main">

			<?php

				include_once("common/topbar.inc.php");
			?>

			<!-- End topbar -->

			<div class="content my-3 my-md-5">
				<div class="container">

					<div class="page-content">
						<div class="row">

							<!-- Sidebar section -->

							<?php

								include_once("common/sidebar_settings.inc.php");
							?>

							<!-- End Sidebar section -->


							<!-- Start settings section -->

							<div class="col-lg-9">

								<div class="card">

									<div class="card-header">
										<h3 class="card-title"><?php echo $LANG['page-settings-profile']; ?></h3>
									</div>

									<div class="card-body">

										<?php

											if (isset($_GET['error'])) {

												switch ($_GET['error']) {

													case "true" : {

														?>

                                                        <div class="alert alert-danger"><?php echo $LANG['msg-error-unknown']; ?></div>

														<?php

														break;
													}

													default: {

														?>

                                                         <?php if ($accountInfo['verify'] == 1): ?>
                                                        <div class="alert alert-success"><strong><?php echo $LANG['label-thanks']; ?></strong> <?php echo $LANG['label-settings-saved']; ?></div>
                                                        <?php else: ?>
                                                            <div class="alert alert-success"><strong><?php echo $LANG['label-thanks']; ?></strong> <?php echo $LANG['label-settings-saved-not-verify']; ?></div>

                                                        <?php endif ?>

														<?php

														break;
													}
												}
											}
										?>

                                        <?php if (isset($_GET['profile']) && $_GET['profile'] === "uncompleted"): ?>

                                            <div class="alert alert-danger">
                                                <?= $LANG['alert-profile-uncompleted'] ?>
                                            </div>

                                        <?php endif ?>

										<form id="profile-form" class="form-horizontal" action="/account/settings" method="post" enctype="multipart/form-data">

											<input autocomplete="off" type="hidden" name="authenticity_token" value="<?php echo auth::getAuthenticityToken(); ?>">

											<div class="form-group field-fullname">
												<label class="form-label" for="fullname"><?php echo $accountInfo['typeuser'] === "BRAND" ? $LANG['label-fullname-brand'] : $LANG['label-fullname-store'] ?></label>
												<input type="text" maxlength="96" id="fullname" class="form-control" name="fullname" value="<?php echo $accountInfo['fullname']; ?>">

												<div class="help-block"></div>
											</div>

                                            <?php if ($accountInfo['typeuser'] === "BRAND"): ?>
                                            <div class="form-group">
												<label class="form-label" for="category_id"><?php echo $LANG['label-category-brand'] ?></label>
                                                <select name="category_id" id="category_id"
                                                        class="form-control" required>
                                                    <?php foreach ($categories['items'] as $item): ?>
                                                        <option value="<?= $item['id'] ?>" <?php if($accountInfo['category_id'] == $item['id']): ?> selected <?php endif ?>><?= $item['title'] ?></option>
                                                    <?php endforeach ?>
                                                </select>

												<div class="help-block"></div>
											</div>
                                            <?php else: ?>
                                                <div class="form-group">
                                                    <label class="form-label" for="category_id"><?php echo $LANG['label-category-store'] ?></label>
                                                    <select name="category_id[]" id="category_id"
                                                            class="form-control select2-multiple" multiple required>
                                                        <?php foreach ($categories['items'] as $item): ?>
                                                            <option value="<?= $item['id'] ?>" <?php if(in_array($item['id'],explode(",",$accountInfo['category_id']))): ?> selected <?php endif ?>><?= $item['title'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>

                                                    <div class="help-block"></div>
                                                </div>
                                            <?php endif ?>

                                            <?php if ($accountInfo['typeuser'] === "BRAND"): ?>

                                                <div class="form-group">
                                                    <label class="form-label" for="type_business"><?php echo $LANG['label-type-business'] ?></label>
                                                    <select name="type_business" id="type_business"
                                                            class="form-control">
                                                        <option value="Produttore" <?php if ($accountInfo['type_business'] == "Produttore"): ?> selected <?php  endif ?>>Produttore</option>
                                                        <option value="Distributore" <?php if ($accountInfo['type_business'] == "Distributore"): ?> selected <?php  endif ?>>Distributore</option>
                                                    </select>

                                                    <div class="help-block"></div>
                                                </div>
                                            <div class="form-group">
												<label class="form-label" for="attributes"><?php echo $LANG['label-attributes-brand'] ?></label>
                                                <input type="text" class="attributes" name="attributes" id="attributes" value="<?= $accountInfo['attributes'] ?>" data-role="tagsinput">

                                                <div class="help-block"></div>
											</div>

                                            <div class="form-group">
                                                <label class="form-label" for="address"><?php echo $LANG['label-address-company'] ?></label>
                                                <input type="text" maxlength="96" id="address" class="form-control" name="address" value="<?php echo $accountInfo['address']; ?>">

                                                <div class="help-block"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="annual_turnover"><?php echo $LANG['label-annual-turnover'] ?></label>
                                                <select name="annual_turnover" id="annual_turnover"
                                                        class="form-control">
                                                    <option value="0 milioni € - 1 milione €" <?php if ($accountInfo['annual_turnover'] == "0 milioni € - 1 milioni €"): ?> selected <?php endif ?> >0 milioni € - 1 milioni €</option>
                                                    <option value="1 milione € - 2 milioni €" <?php if ($accountInfo['annual_turnover'] == "1 milione € - 2 milioni €"): ?> selected <?php endif ?> >1 milione € - 2 milioni €</option>
                                                    <option value="2 milioni € - 4 milioni €" <?php if ($accountInfo['annual_turnover'] == "2 milioni € - 4 milioni €"): ?> selected <?php endif ?> >2 milioni € - 4 milioni €</option>
                                                    <option value="+ 5 milioni €" <?php if ($accountInfo['annual_turnover'] == "+ 5 milioni €"): ?> selected <?php endif ?> >+ 5 milioni €</option>
                                                </select>

                                                <div class="help-block"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label d-inline-block" for="pdf_document"><?php echo $LANG['label-pdf-document'] ?></label>
                                                <?php if ($accountInfo['pdf_document'] != ""): ?>
                                                    <a class="text-muted-dark" href="<?= APP_URL.'/'.$accountInfo['pdf_document'] ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                                <?php endif ?>
                                                <input type="file" name="pdf_document" id="pdf_document" accept="application/pdf" class="form-control">

                                                <div class="help-block"></div>
                                            </div>

                                            <?php endif ?>

                                            <?php if ($accountInfo['typeuser'] === "STORE"): ?>

                                                <div class="form-group">
                                                    <label class="form-label" for="number_stores"><?php echo $LANG['label-number-stores'] ?></label>
                                                    <input type="number" class="form-control" id="number_stores" name="number_stores" value="<?= $accountInfo['number_stores'] ?>">

                                                    <div class="help-block"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="type_business"><?php echo $LANG['label-type-business'] ?></label>
                                                    <select name="type_business" id="type_business"
                                                            class="form-control">
                                                        <option value="Distributore" <?php if ($accountInfo['type_business'] == "Distributore"): ?> selected <?php  endif ?>>Distributore</option>
                                                        <option value="Negozio singolo" <?php if ($accountInfo['type_business'] == "Negozio singolo"): ?> selected <?php  endif ?>>Negozio singolo</option>
                                                        <option value="Catena di negozi al dettaglio" <?php if ($accountInfo['type_business'] == "Catena di negozi al dettaglio"): ?> selected <?php  endif ?>>Catena di negozi al dettaglio</option>
                                                        <option value="Negozio online" <?php if ($accountInfo['type_business'] == "Negozio online"): ?> selected <?php  endif ?>>Negozio online</option>
                                                    </select>

                                                    <div class="help-block"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="website"><?php echo $LANG['label-website-company'] ?></label>
                                                    <input type="text" maxlength="96" placeholder="<?php echo $LANG['placeholder-text-url']; ?>" id="website" class="form-control" name="website" value="<?php echo $accountInfo['website']; ?>">

                                                    <div class="help-block"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="address"><?php echo $LANG['label-address-store'] ?></label>
                                                    <input type="text" maxlength="96" id="address" class="form-control" name="address" value="<?php echo $accountInfo['address']; ?>">

                                                    <div class="help-block"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="cities_stores"><?php echo $LANG['label-cities-stores'] ?></label>
                                                    <input type="text" class="attributes" name="cities_stores" id="cities_stores" value="<?= $accountInfo['cities_stores'] ?>" data-role="tagsinput">

                                                    <div class="help-block"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="attributes"><?php echo $LANG['label-attributes-essentials'] ?></label>
                                                    <input type="text" class="attributes" name="attributes" id="attributes" value="<?= $accountInfo['attributes'] ?>" data-role="tagsinput">

                                                    <div class="help-block"></div>
                                                </div>

                                            <?php endif ?>

                                            <?php

                                                if (strlen($accountInfo['status']) != 0) $accountInfo['status'] = preg_replace("/<br>/", "\n", $accountInfo['status']);
                                            ?>

											<div class="form-group field-bio">
												<label class="form-label" for="bio"><?php echo $LANG['label-bio']; ?></label>
												<textarea style="min-height: 100px" maxlength="400" placeholder="<?php echo $LANG['placeholder-bio']; ?>" id="bio" class="form-control" name="bio"><?php echo $accountInfo['status']; ?></textarea>

												<div class="help-block"></div>
											</div>

                                            <?php if ($accountInfo['typeuser'] === "BRAND"): ?>
                                                <div class="form-group">
                                                    <label class="form-label" for="website"><?php echo $LANG['label-website-company-brand'] ?></label>
                                                    <input type="text" maxlength="96" id="website" placeholder="<?= $LANG['placeholder-text-url'] ?>" class="form-control" name="website" value="<?php echo $accountInfo['website']; ?>">

                                                    <div class="help-block"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="url_youtube_company"><?php echo $LANG['label-youtube-company-brand'] ?></label>
                                                    <input type="text" maxlength="96" id="url_content_company" placeholder="<?= $LANG['placeholder-text-url'] ?>" class="form-control" name="url_content_company" value="<?php echo $accountInfo['url_content_company']; ?>">

                                                    <div class="help-block"></div>
                                                </div>
                                            <?php endif ?>

											<div class="form-group field-facebook-page">
												<label class="form-label" for="facebook-page"><?php echo $LANG['label-facebook-link']; ?></label>
												<input type="text" maxlength="256" placeholder="<?php echo $LANG['placeholder-text-url']; ?>" id="facebook-page" class="form-control" name="facebook_page" value="<?php echo $accountInfo['fb_page']; ?>">

												<div class="help-block"></div>
											</div>

											<div class="form-group field-instagram-page">
												<label class="form-label" for="instagram-page"><?php echo $LANG['label-instagram-link']; ?></label>
												<input type="text" maxlength="256" placeholder="<?php echo $LANG['placeholder-text-url']; ?>" id="instagram-page" class="form-control" name="instagram_page" value="<?php echo $accountInfo['instagram_page']; ?>">

												<div class="help-block"></div>
											</div>

											<div class="row">

												<div class="col-sm-4">
													<div class="form-group field-phone-number">
														<label class="form-label" for="phone-number"><?php echo $LANG['label-phone-number']; ?></label>
														<input type="text" maxlength="16" style="min-width: 350px;" placeholder="<?php echo $LANG['placeholder-phone-number']; ?>" id="phone-number" class="form-control" name="phone_number" value="<?php echo $accountInfo['phone']; ?>">

														<div class="help-block"></div>
													</div>
												</div>

											</div>

											<div class="row">

												<div class="col-sm-4">
													<div class="form-group field-birthday">
                                                            <label class="form-label" for="date_incorporation"><?php echo $LANG['label-date-incorporation']; ?></label>
														<input type="date" id="date_incorporation" class="form-control" name="date_incorporation" value="<?php echo $accountInfo['dateIncorporation'] ?>">

														<div class="help-block"></div>
													</div>
												</div>

											</div>

											<button type="submit" class="btn float-right btn-primary"><?php echo $LANG['action-save']; ?></button>
										</form>
									</div>
								</div>

							</div>

							<!-- End settings section -->

						</div>
					</div>

				</div>
			</div> <!-- End content -->

		</div> <!-- End page-main -->

		<?php

			include_once("common/footer.inc.php");
		?>

	</div> <!-- End page -->

</body>
</html>

<?php $data["title"] = "1. CKS - Đăng nhập"; ?>
<?php $is_from_login = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="login__section uk-height-viewport uk-background-norepeat uk-background-center-center uk-background-cover uk-section" data-src="images/image7.png" uk-img>
    <div class="uk-container uk-container-small">
        <div class="uk-child-width-1-1@l uk-flex-center" uk-grid>
            <div>
                <div class="login__card uk-card uk-card-default uk-border-rounded uk-card-body uk-height-min-medium">
                    <div class="login__width uk-margin-auto">
                        <form>
                            <figure class="uk-text-center"><img src="images/image2.png" alt=""></figure>
                            <fieldset class="uk-fieldset">
                                <legend class="uk-legend login__card__title uk-text-center uk-text-uppercase">HỆ THỐNG KÝ SỐ</legend>

                                <div class="item__25">
                                    <div class="uk-inline uk-width">
                                        <span class="uk-form-icon uk-form-icon-flip login__card__icon login__card__icon--user" uk-icon="icon: user"></span>
                                        <input class="uk-input uk-border-rounded login__card__input" type="text" placeholder="Tên đăng nhập" aria-label="Not clickable icon">
                                    </div>
                                </div>

                                <div class="item__8">
                                    <div class="uk-inline uk-width">
                                        <a class="uk-form-icon uk-form-icon-flip login__card__icon login__card__icon--pass" href="#" uk-icon="icon: link"></a>
                                        <input class="uk-input uk-border-rounded login__card__input" type="password" placeholder="Mật khẩu" aria-label="Clickable icon">
                                    </div>
                                </div>
                                <div class="item__13">
                                    <button class="uk-button login__card__btnSubmit uk-button-default uk-width uk-border-rounded">Đăng nhập</button>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                    <div class="item__21 uk-text-center login__card__txt">
                        Để ký văn bản, Quý khách vui lòng đăng nhập với tên đăng nhập và mật khẩu đã được gửi qua <br class="uk-visible@m">
                        email của Quý khách.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>
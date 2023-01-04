<?php $data["title"] = "3. CKS - Tạo chữ ký"; ?>
<?php $is_from_login = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="danhsach__section uk-position-relative" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-position-relative uk-section-xsmall">
        <div class="uk-container">
            <div class="danhsach__txt uk-background-norepeat uk-background-center-left" data-src="images/image12.png" uk-img>Hệ thống ký số</div>
            <div class="login__card__title uk-text-center uk-text-uppercase item__30">TẠO CHỮ KÝ</div>
            <div class="item__30"><a href="" class="taochuky__link">Download Plugin ký số</a></div>
            <div class="item__6 login__card uk-card uk-card-body uk-card-default uk-height-min-medium uk-text-center">
                <div class="taochuky__txt">Quý khách tạo chữ ký bằng cách “Vẽ chữ ký” hoặc “Tải ảnh chữ ký” lên hệ thống</div>
                <div class="uk-grid item__59 uk-flex-center uk-flex-middle uk-child-width-auto uk-grid-93-m uk-grid-small" uk-grid>
                    <div>
                        <a href="#modal-taochuky" uk-toggle class="taochuky__btn uk-border-rounded uk-button uk-button-default">Vẽ chữ ký</a>
                    </div>
                    <div>
                        <span class="taochuky__txt1">hoặc</span>
                    </div>
                    <div>
                        <a href="" class="taochuky__btn uk-border-rounded uk-button uk-button-default">Tải ảnh chữ ký</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-xsmall danhsach__section1">
    <div class="uk-container">
        <a href="" class="uk-button uk-button-default danhsach__btnBack">Quay lại</a>
    </div>
</div>
<!-- This is the modal with the default close button -->
<div id="modal-taochuky" class="taochuky__modal" uk-modal>
    <div class="uk-modal-dialog taochuky__modal__dialog">
        <div class="uk-modal-header taochuky__modal__header">
            <button class="uk-modal-close-default taochuky__modal__close" type="button" uk-close></button>
            <h2 class="uk-modal-title taochuky__modal__title uk-text-center">Vẽ chữ ký</h2>
        </div>
        <div class="uk-modal-body taochuky__modal__body uk-background-default">
            <div class="uk-text-center taochuky__modal__txt1">Sau khi vẽ xong chữ ký, vui lòng thả chuột trước khi ra khỏi khung vẽ</div>
            <div class="login__width uk-margin-auto item__10">
                <div class="uk-height-min-small uk-text-center taochuky__modal__box1 uk-padding-small uk-border-rounded">
                    <img src="images/image14.png" alt="">
                </div>
                <div class="item__8">
                    <button class="uk-button taochuky__modal__btnVelai uk-button-default uk-border-rounded">Vẽ lại</button>
                </div>
                <div class="item__16">
                    <button class="uk-button login__card__btnSubmit login__card__btnSubmit--taochuky uk-button-default uk-width uk-border-rounded">Xác nhận ký</button>
                </div>
                <div class="uk-text-danger item__8 uk-text-center taochuky__modal__txtdanger">Lưu ý:  Bạn cần kiểm tra kỹ thông tin trước khi xác nhận!</div>
                <div class="js-upload taochuky__modal__boxUpload uk-placeholder uk-text-center uk-padding-small">
                    <div class="uk-grid-10 uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <span class="uk-text-middle taochuky__modal__boxUpload__txt1">Hoặc đổi hình thức tạo chữ ký</span>
                        </div>
                        <div class="uk-width-auto">
                            <div uk-form-custom>
                                <input type="file" multiple>
                                <span uk-icon="icon: cloud-upload"></span>
                                <span class="uk-link taochuky__modal__boxUpload__txt2">Tải ảnh chữ ký</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // UIkit.modal('#modal-taochuky').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>
<div class="col-lg-5 col-md-6 mt-4 pt-2 order-2 order-md-1">
    <div class="card rounded shadow border-0" data-aos="fade-up" data-aos-duration="1000">
        <div class="card-body">
            <div class="custom-form bg-white">
                <div id="message"></div>
                <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">نام <span class="text-danger">*</span></label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                    <input name="fullname" id="fullname" type="text" class="form-control ps-5"
                                        placeholder="مهدی">
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">شماره موبایل <span class="text-danger">*</span></label>
                                <div class="form-icon position-relative">
                                    <i data-feather="phone" class="fea icon-sm icons"></i>
                                    <input name="mobile" id="mobile" type="number" class="form-control ps-5"
                                        placeholder="09120186223">
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">متن پیام</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                    <textarea name="comments" id="comment" rows="4" class="form-control ps-5" placeholder="متن پیام شما..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="d-grid">
                                <input type="submit" name="send" class="send submitBnt btn btn-primary"
                                    value="ارسال پیام همکاری">
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
                <!--end form-->
            </div>
            <!--end custom-form-->
        </div>
    </div>
</div>
<!--end col-->




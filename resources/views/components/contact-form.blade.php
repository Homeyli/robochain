<div class="col-lg-5 col-md-6 mt-4 pt-2 order-2 order-md-1">
    <div class="card rounded shadow border-0" data-aos="fade-up" data-aos-duration="1000">
        <div class="card-body">
            <div class="custom-form bg-white">
                <div id="message"></div>
                <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                    <input name="name" id="name" type="text" class="form-control ps-5" placeholder="First Name :">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                <div class="form-icon position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input name="email" id="email2" type="email" class="form-control ps-5" placeholder="Your email :">
                                </div>
                            </div> 
                        </div><!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Comments</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                    <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Your Message :"></textarea>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="d-grid">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                <div id="simple-msg"></div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form><!--end form--> 
            </div><!--end custom-form-->
        </div>
    </div>
</div><!--end col-->
<form action="" id="contactForm" method="post">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <small>Last name First Name <span class="text-danger">*</span></small>
                                    <input type="text" name="nom" class="shadow-none form-control py-3" required>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <small>Address <span class="text-danger">*</span></small>
                                    <input type="text" name="adresse" class="shadow-none form-control py-3" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <small>Email <span class="text-danger">*</span></small>
                                    <input type="email" name="email" class="shadow-none form-control py-3" required>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <small>Phone number <span class="text-danger">*</span></small><br>
                                    <input type="tel" name="tel" id="phone" class="shadow-none form-control py-3" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <small>Message <span class="text-danger">*</span></small>
                            <textarea name="message" style="height:110px;" id="" class="shadow-none" required></textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" name="submit" class="submit_btn">Submit now</button>
                        </div>
                    </form>
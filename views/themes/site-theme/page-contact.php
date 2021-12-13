<?php
/*
Template Name: Contact Page
 */ 
get_header('');
?>

<!-- Main Content -->
<section class="container-fluid contact-us">
    <div class="container p-t-140">
        <div class="col-12 d-block align-items-start justify-content-center">
            <h2
                class="f_l_bld c_4b4b4b t50 line-height m-b-10 text-uppercase text-center align-items-center justify-content-center">
                Contact us</h2>
            <p class="f_l_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center">
                Select which country you want to contact and send us your message.</p>
        </div>
        <div class="row">
            <div class="col-12 m-t-10">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs d-flex justify-content-center f_j_m t6 c_222 list-unstyled" id="myTab"
                            role="tablist">
                            <li class="nav-item"><a class="nav-link f_l_b c_3d9fe6 t16 text-uppercase active"
                                    id="singapore-tab" data-toggle="tab" href="#singapore" role="tab"
                                    aria-controls="singapore" aria-selected="true">Singapore</a></li>
                            <li class="nav-item"><a class="nav-link f_l_b c_3d9fe6 t16 text-uppercase" id="vietnam-tab"
                                    data-toggle="tab" href="#vietnam" role="tab" aria-controls="vietnam"
                                    aria-selected="false">Vietnam</a></li>
                            <li class="nav-item"><a class="nav-link f_l_b c_3d9fe6 t16 text-uppercase"
                                    id="philippines-tab" data-toggle="tab" href="#philippines" role="tab"
                                    aria-controls="philippines" aria-selected="false">Philippines</a></li>
                            <li class="nav-item"><a class="nav-link f_l_b c_3d9fe6 t16 text-uppercase" id="hongkong-tab"
                                    data-toggle="tab" href="#hongkong" role="tab" aria-controls="hongkong"
                                    aria-selected="false">Hongkong</a></li>
                            <li class="nav-item"><a class="nav-link f_l_b c_3d9fe6 t16 text-uppercase" id="malaysia-tab"
                                    data-toggle="tab" href="#malaysia" role="tab" aria-controls="malaysia"
                                    aria-selected="false">Malaysia</a></li>
                        </ul>
                        <div class="tab-content d-flex justify-content-center f_j_m t6 c_222 list-unstyled m-t-100"
                            id="myTabContent">
                            <div class="tab-pane fade show active" id="singapore" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="container d-block d-lg-flex">
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/6eb740090e59330582c3e4cb1572584b.png"
                                                        alt="Address" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Address</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        <?php echo get_system_option(array('option_name'=>'company_address')); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/c13b67b729bb4e42f693e326c07493ca.png"
                                                        alt="Phone Call" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Phone</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        <?php echo get_system_option(array('option_name'=>'company_contact_number')); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/d27db497baafe4e5890c9fe069c5769b.png"
                                                        class="img-responsive" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Email</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        <?php echo get_system_option(array('option_name'=>'company_email')); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vietnam" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="container d-block d-lg-flex">
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/6eb740090e59330582c3e4cb1572584b.png"
                                                        alt="Address" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Address</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        #123 Veniam, Quis nost, Vietnam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/c13b67b729bb4e42f693e326c07493ca.png"
                                                        alt="Phone Call" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Phone</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        +65 1234 5678</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/d27db497baafe4e5890c9fe069c5769b.png" />
                                                </div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Email</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        contact@crystalnet.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="philippines" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="container d-block d-lg-flex">
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/6eb740090e59330582c3e4cb1572584b.png"
                                                        alt="Address" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Address</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        #123 Veniam, Quis nost, Philippines</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/c13b67b729bb4e42f693e326c07493ca.png"
                                                        alt="Phone Call" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Phone</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        +65 1234 5678</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/d27db497baafe4e5890c9fe069c5769b.png" />
                                                </div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Email</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        contact@crystalnet.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hongkong" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="container d-block d-lg-flex">
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/6eb740090e59330582c3e4cb1572584b.png"
                                                        alt="Address" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Address</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        #123 Veniam, Quis nost, HongKong</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/c13b67b729bb4e42f693e326c07493ca.png"
                                                        alt="Phone Call" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Phone</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        +65 1234 5678</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/d27db497baafe4e5890c9fe069c5769b.png" />
                                                </div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Email</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        contact@crystalnet.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="malaysia" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="container d-block d-lg-flex">
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/6eb740090e59330582c3e4cb1572584b.png"
                                                        alt="Address" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Address</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        #123 Veniam, Quis nost, Malaysia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/c13b67b729bb4e42f693e326c07493ca.png"
                                                        alt="Phone Call" /></div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Phone</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        +65 1234 5678</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card-body">
                                                <div
                                                    class="col-12 d-flex align-items-center justify-content-center m-t-40">
                                                    <img class="img-responsive"
                                                        src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/10/30/d27db497baafe4e5890c9fe069c5769b.png" />
                                                </div>
                                                <div class="col-12">
                                                    <h4
                                                        class="f_p_smbld c_0774ec t20 text-center align-items-center justify-content-center m-t-40 m-b-10">
                                                        Email</h4>
                                                </div>
                                                <div class="col-12">
                                                    <p
                                                        class="f_p_r t16 c_4b4b4b line-height-2 m-b-30 text-center align-items-center justify-content-center m-t-20 m-b-10">
                                                        contact@crystalnet.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
  <?php echo cms_get_fragment('', 'contact'); ?>
</section>
<?php
get_footer();
?>

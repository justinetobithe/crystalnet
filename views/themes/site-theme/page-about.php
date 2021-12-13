<?php
/*
Template Name: About Page
 */ 
get_header('');
?>

<!-- Main Content -->


<section class="container-fluid about-us align-items-center">
  <div class="container p-t-140 p-b-60">
    <div class="row f_j_b t16 c_222">
      <div class="col-12 col-lg- d-flex flex-column align-items-start justify-content-center">
        <h2 class="f_l_r c_4b4b4b t50 line-height m-b-10 text-uppercase justify-content-center"><span
            class="f_l_bi c_0088e9">Crystal net</span></h2>
      </div>
      <div class="col-12 col-lg-12 d-flex flex-column align-items-start justify-content-center">
        <p class="f_l_r t16 c_4b4b4b line-height-2 m-b-30 justify-content-center">Crystal Net specializes in developing
          internet-based telephone services as well as cloud-based technology for any business that needs it. Our has
          been recognized as one of the most respected names in telecommunications within Singapore given the excellent
          service, various contributions to internet telephony, and different innovations for businesses&rsquo; digital
          work environment. Aside from the VoIP technologies, our CRM is also an effective solution for many companies
          to make business processes more convenient and help improve customer satisfaction overall.</p>
      </div>
    </div>
  </div>
  <figure class="container-fluid vision-mission m-b-150">
    <div class="row">
      <div class="mission col-12 col-md-6 col-lg-6 col-xl-6 aos-item p-b-30" data-aos="fade-up-right">
        <div class="article">
          <div class="col-12">
            <h3 class="text-details f_l_b t32 text-uppercase text-left m-t-50">Experience</h3>
            <p class="text-details f_l_r t16 line-height-2 m-b-30 justify-content-center m-t-50">As one of the leaders
              in internet-based telephone services, Crystal Net understands that businesses need flexible and adaptive
              solutions to the demands of telecommunications. Our experiences with working with various organizations
              and internet telephony setups in Singapore have led us to create our own world-class infrastructure to
              give our clients the best international-standard services.</p>
            <p class="text-details f_l_r t16 line-height-2 m-b-30 justify-content-center m-t-50">By partnering with
              Crystal Net, your company can focus on growth and important matters without having to worry about setting
              up, maintaining, and upgrading a full-fledged phone system. Crystal Net will do everything for you from
              telecom maintenance to smooth transitioning to the Cloud without having to rely on a PBX phone system. Our
              features and plans are tailored to fit all business models, whether your company needs full-fledged VoIP
              or integrate existing solutions, all for a reasonable price that is right for you!</p>
          </div>
        </div>
      </div>
      <div class="vision col-12 col-md-6 col-lg-6 col-xl-6 aos-item p-b-30" data-aos="fade-up-left">
        <div class="article">
          <div class="col-12">
            <h3 class="text-details f_l_b t32 text-uppercase text-left m-t-50">Our Partners</h3>
            <p class="text-details f_l_r t16 line-height-2 m-b-30 justify-content-center m-t-50">For years, Crystal Net
              has partnered with various local providers in Singapore, giving us an edge when it comes to distribution
              channels, reputation, trustworthiness, and quality of service. As well as providing skilled and certified
              professionals for the best experience, we continuously work with trusted organizations to ensure
              high-quality but reasonably priced internet-based calls for all our clients.</p>
              <div class="row container-fluid">
                  <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center m-b-50">
                      <img class="img-responsive img-fluid" src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/11/09/cd2b3ceba26ad0853e24864c279dc465.png" alt="Cisco" />
                  </div>
                  <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center">
                      <img class="img-responsive img-fluid" src="http://jus.maxdyna.com/crystalnet/files/uploads/image/png/2020/11/09/1ed5970cce002ada50dd214b5d1de79f.png" alt="Yealink" />
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </figure>
 
 
  <?php echo cms_get_fragment('', 'contact'); ?>
</section>

<?php
get_footer();
?>

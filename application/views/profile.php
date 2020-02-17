<?php include('includes/header.php');?>

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title pt-3"><?php echo $name; ?></h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                    <span>
                                        <a title="Go to Delmont." href="<?php echo base_url().'Nsambya';?>" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                    </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span><?php echo $name; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main single">

        <section class="ttm-row overview-section clearfix">
            <div class="ttm-team-member-single-content-wrapper ttm-team-member-view-default">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ttm-team-member-single-content">
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons">
                                        <li class="social-facebook">
                                            <a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter">
                                            <a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-gplus">
                                            <a class="tooltip-top" target="_blank" href="#" data-tooltip="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-12">
                                        <!-- ttm-featured-wrapper -->
                                        <div class="ttm-featured-wrapper"> 
                                            <div class="featured-thumbnail">
                                                <img class="img-fluid" src="<?php echo base_url().'images/team-member/team-details-img01.jpg'; ?>" alt="image">
                                            </div> 
                                        </div><!-- ttm-featured-wrapper end--> 
                                    </div>
                                    <div class="ttm-team-member-single-content-area col-md-12 col-lg-7">
                                        <div class="ttm-team-member-content shadow-box">
                                            <div class="ttm-team-member-single-list">
                                                <h2 class="ttm-team-member-single-title"><?php echo $name ?></h2>
                                                <h5 class="ttm-team-member-single-position"><?php echo $title ?></h5>
                            
                                                <div class="ttm-team-data">
                                                    <div class="ttm-team-details-wrapper">
                                                        <ul class="ttm-team-details-list clearfix">
                                                            <li>
                                                                <div class="ttm-team-list-title">
                                                                    <i class="fa fa-phone"></i> Phone :
                                                                </div>
                                                                <div class="ttm-team-list-value"><a href="tel:(123)456-7890"><?php echo $phone ?></a></div>
                                                            </li>
                                                            <li>
                                                                <div class="ttm-team-list-title">
                                                                    <i class="ti ti-email"></i> Email :
                                                                </div>
                                                                <div class="ttm-team-list-value">
                                                                    <a href="mailto:info@example.com" tabindex="0"> <?php echo $email ?></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="ttm-team-list-title">
                                                                    <i class="ti ti-location-pin"></i> Address Info :
                                                                </div>
                                                                <div class="ttm-team-list-value"><?php echo $address ?></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-team-member-single-content">
                                <div class="ttm-team-member-content">
                                    <h2>Overview</h2>
                                    <div class="pt-5 row">
                                        <div class="col-sm-12">
                                            <div class="pr-20">
                                                <p><?php  echo $overview?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div><!--site-main end-->

    <?php include('includes/footer.php');?>

<div class="footer-content">
    <div class="container">
        <div class="row gap-y">
            <div class="col-md-6 col-xl-4">
                <p>
                    <a href="/"><img src="images/logo.png" alt="logo"></a>
                </p>
                <p>{!! __("Footer_Text") !!}</p>
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <!-- Footer widget area 2 -->
                <div class="widget">
                    <h4>{!! __("SUPPORT") !!}</h4>
                    <ul class="list">
                        <li><a href="/">{!! __("Troubleshooting") !!}</a></li>
                        <li><a href="/">{!! __("Common_Questions") !!}</a></li>
                        <li><a href="/">{!! __("Report_a_Bug") !!}</a></li>
                        <li><a href="/">{!! __("Get_Help") !!}</a></li>
                        <li><a href="/">{!! __("FAQS") !!}</a></li>
                    </ul>
                </div>
                <!-- end: Footer widget area 2 -->
            </div>
            <div class="col-6 col-md-6 col-xl-2">
                <!-- Footer widget area 3 -->
                <div class="widget">
                    <h4>{!! __("COMPANY") !!}</h4>
                    <ul class="list">
                        <li><a href="/">{!! __("Home") !!}</a></li>
                        <li><a href="/Services">{!! __("Services") !!}</a></li>
                        <li><a href="/Gallery">{!! __("Gallery") !!}</a></li>
                        <li><a href="/Contact">{!! __("Contact") !!}</a></li>
                        <li><a href="/About">{!! __("About") !!}</a></li>
                    </ul>
                </div>
                <!-- end: Footer widget area 3 -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="widget clearfix widget-newsletter">
                    <h4 class="widget-title"><i class="fa fa-envelope"></i> {!! __("Newsletter_Title") !!}</h4>
                    <p>{!! __("Newsletter_Details") !!}
                    </p>
                    <form class="widget-subscribe-form p-r-40" action="include/subscribe-form.php" role="form" method="post" novalidate="novalidate">


                        <div class="input-group">
                            <input aria-required="true" {!! __("Dir1") !!} name="widget-subscribe-form-email" class="form-control required email" placeholder="{!!__('Enter_Your_Email')!!}" type="email">
                            <span class="input-group-btn">
                                <button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright-content">
    <div class="container">
        <div class="copyright-text text-center"><a href="http://alephba-system.ir">Alephba-System</a> &copy; 2021 </div>
    </div>
</div>
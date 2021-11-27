<section class="text-center text-light p-t-150 p-b-150" data-bg-image="homepages/event/images/parallax/1.jpg">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="col-lg-6 center">
            <div class="text-center">
                <div class="text-medium">{{ __("SUBSCRIBE") }}</div>
            </div>

            <form class="widget-subscribe-form" novalidate action="include/subscribe-form.php" role="form" method="post">
                <div class="input-group">
                    <input type="email" required name="widget-subscribe-form-email" class="form-control required email" placeholder="{{ __("Enter_Your_Email") }}">
                    <button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                </div>
            </form>

            <small>{{ __("Stay informed") }}</small>

        </div>
    </div>
</section>
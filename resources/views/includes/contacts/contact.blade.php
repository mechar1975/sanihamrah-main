@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">{!! __("Get_In_Touch") !!}</h3>
                <p>{!! __("Contact_P1") !!}</p>
                <p>{!! __("Contact_P2") !!}</p>
                <div class="row m-t-40">
                    <div class="col-lg-12">
                        <address>
                            {!! __("Contact_Address") !!}
                        </address>
                    </div>
                </div>
                <div class="social-icons m-t-30 social-icons-colored">
                    <ul>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-google"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">

                <form class="widget-contact-form" novalidate action="/Contact" role="form" method="post">

                    <div class="row">
                        <div class="form-group col-md-6  {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">Name</label>
                            <input type="text" aria-required="true" name="name" required class="form-control required name" placeholder="">
                        </div>
                        <div class="form-group col-md-6  {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">Email</label>
                            <input type="email" aria-required="true" name="email" required class="form-control required email" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12   {{ $errors->has('subject') ? 'has-error' : '' }}">
                            <label for="subject">Your Subject</label>
                            <input type="text" name="subject" required class="form-control required" placeholder="">
                        </div>
                    </div>
                    <div class="form-group   {{ $errors->has('message') ? 'has-error' : '' }}">
                        <label for="message">Message</label>
                        <textarea type="text" name="message" required rows="5" class="form-control required" placeholder=""></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>

                </form>
            </div>
        </div>
    </div>
</section>
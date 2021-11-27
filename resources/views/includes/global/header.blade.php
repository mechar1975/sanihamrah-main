<div class="header-inner">
    <div class="container">
        <!--Logo-->
        <div id="logo"><img src="/images/logo.png" alt="Alephba-Sanat" />
            <a style="font-size: 18px;">
                {{ __("AlephbaSystem") }}
            </a>
        </div>

        <!--End: Logo-->
        <!-- Search -->
        <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
            <form class="search-form" action="search-results-page.html" method="get">
                <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
            </form>
        </div>
        <!-- end: search -->
        <!--Header Extras-->
        <div class="header-extras">
            <ul>
                <li>
                    <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                </li>
                <li>
                    <div class="p-dropdown"> <a href="#"><i class="icon-globe"></i><span>{{$current_locale}}</span></a>
                        <ul class="p-dropdown-content">
                            @foreach($available_locales as $locale_name => $available_locale)

                            <li><a href="language/{{ $available_locale }}">{{ $locale_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!--end: Header Extras-->
        <!--Navigation Resposnive Trigger-->
        <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
        <!--end: Navigation Resposnive Trigger-->
        <!--Navigation-->
        <div id="mainMenu">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="/">{{ __("Home") }}</a></li>
                        <li><a href="/Services">{{ __("Services") }}</a></li>
                        <li><a href="/Gallery">{{ __("Gallery") }}</a></li>
                        <li><a href="/Contact">{{ __("Contact") }}</a></li>
                        <li><a href="/About">{{ __("About") }}</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--end: Navigation-->
    </div>
</div>
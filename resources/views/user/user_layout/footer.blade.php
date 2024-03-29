<footer class="footer-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12 white_fonts">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <img class="img-responsive" src="{{ asset('assets/images/footer_logo.png') }}"
                                alt="#" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="full">
                            <ul class="menu_footer">
                                <li><a href="{{ route('user.index') }}">>Home</a></li>
                                <li><a href="{{ route('user.about') }}">>About</a></li>
                                <li><a href="exchange.html">>Exchange</a></li>
                                <li><a href="{{ route('user.help') }}">How to Buy&Sell</a></li>
                                <li><a href="{{ route('user.contact') }}">>Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3>Newsletter</h3>
                                <p>Start Exchange Your E-currency with {{ env('APP_NAME') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3>Contact us</h3>
                                <ul class="d-flex justify-content-center align-items-center">
                                    {{-- <li><img src="{{ asset('assets/images/i5.png') }}"><span>{{ env('APP_ADDRESS') }}</span></li> --}}
                                    <li>
                                        <a href="https://mail.google.com/mail/{{ env('APP_Email') }}/0" target="_blank">
                                            <img src="{{ asset('assets/images/gmail.jpg') }}" height="50px"
                                                width="50px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://web.whatsapp.com/send?phone={{ env('APP_Phone2') }}"
                                            target="_blank">
                                            <img src="{{ asset('assets/images/whatsapp.png') }}" height="50px"
                                                width="50px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/instantflexyexchange/" target="_blank">
                                            <img src="{{ asset('assets/images/Instagram.png') }}" height="50px"
                                                width="50px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://t.me/instantflexyxchange" target="_blank">
                                            <img src="{{ asset('assets/images/Telegram.png') }}" alt="social_img"
                                                height="50px" width="60px">
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="https://twitter.com/Instantflexy?t=efd24_80Zf0Kt8ygOTs0FQ&s=09"
                                            target="_blank">
                                            <img src="{{ asset('assets/images/twitter.png') }}" height="50px"
                                                width="50px">
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<x-alert />

<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="crp">Copyrights 2022 design by {{ env('APP_NAME') }} </p>
            </div>
        </div>
    </div>
</div>

<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.pogo-slider.min.js') }}"></script>
<script src="{{ asset('assets/js/slider-index.js') }}"></script>
<script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/images-loded.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script>
    (function($) {
        $.fn.countTo = function(options) {
            options = options || {};

            return $(this).each(function() {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,
            to: 0,
            speed: 1000,
            refreshInterval: 100,
            decimals: 0,
            formatter: formatter,
            onUpdate: null,
            onComplete: null
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function(value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>
</body>

</html>

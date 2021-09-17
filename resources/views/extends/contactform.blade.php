<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <img src="{{ asset('assets/images/wave.png') }}" alt="image" class="imgFluid" />
                    <div>

                        <span>Have A Question?</span>
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <x-alert />
                <form class="CrudForm" id="inquiry_form" data-noinfo="true" data-customcallback="inquiry_success" data-customcallbackFail="inquiry_error" method="POST" action="{{route('contactusSubmit')}}">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="text" name="inquiries_name" placeholder="Name" />

                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="email" name="inquiries_email" placeholder="Email" />
                        </div>
                        <div class="col-12">
                            <textarea name="extra_content" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <input name="submit" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
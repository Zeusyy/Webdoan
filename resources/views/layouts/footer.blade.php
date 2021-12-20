<!-- Footer -->
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<footer style="margin-top: 20px;" id="footer" class="page-footer font-small blue">

    <div style="max-width: 1500px" class="container">
        <div class="row">
            <div style="margin-top: 50px" class="col-12 col-md-3">
                <div class="logo">
                    <a class="logo" href="{{ route('home') }}">
                        {{ config('app.name', 'Laravel') }}
                        {{-- FnGO --}}
                    </a>
                </div>
                <div class="row">
                    <div class="col">
                        {{__('footer.Try')}}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="footer-title">
                    {{__('footer.Contacts')}}
                    
                    <div class="d-flex justify-content-start">
                        <hr class="hr-footer">
                    </div>

                </div>
                <p>
                    <i class="bi bi-geo-alt"></i>
                    97 Võ Văn Tần, Phường 6, Quận 3, Thành phố Hồ Chí Minh
                </p>

                <p>
                    <i class="bi bi-telephone"></i>
                    Hotline: 0985321689
                </p>

                <p>
                    <i class="bi bi-envelope"></i>
                    tuannm218@uef.edu.vn
                </p>

                <p>
                    <i class="bi bi-envelope"></i>
                    hytnht18@uef.edu.vn
                </p>

                <p>
                    <i class="bi bi-envelope"></i>
                    thanhlc18@uef.edu.vn
                </p>
            </div>
            <div class="col-12 col-md-2">
                <div class="footer-title">
                    {{__('footer.Links')}}
                    <div>
                        <hr class="hr-footer">
                    </div>

                </div>
                <p>
                    <a class="footer-link" href="tel:0905200419">
                        <i class="bi bi-telephone"></i>
                        0905200419
                    </a>
                </p>

                <p>
                    <a class="footer-link" href="{{route('payment.index')}}">
                        <i class="bi bi-cash-coin"></i>
                        {{__('footer.Payment')}}
                    </a>
                </p>
                <p>
                    <a class="footer-link" href="{{route('introduction.index')}}">
                        <i class="bi bi-people-fill"></i>
                        {{__('footer.Intro')}}
                    </a>
                </p>

                <!-- <p>
                    <a class="footer-link" href="">
                        <i class="bi bi-person-square"></i>
                        {{__('footer.About us')}}
                    </a>
                </p> -->
            </div>
            <div class="col-12 col-md-4">
                <div id="map" class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d823.9639360685248!2d106.69040338151909!3d10.776413602300883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3afa713ca7%3A0xbfe2296e25218665!2zOTcgVsO1IFbEg24gVOG6p24sIFBoxrDhu51uZyA2LCBRdeG6rW4gMywgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1635764523173!5m2!1svi!2s" 
                    width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        2021 - FnGO
    </div>
    <!-- Copyright -->
  
</footer>
<!-- Footer -->
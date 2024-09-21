<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h5>Timing</h5>
                    <p>
                        <strong>{!! $contact->timing !!}</strong>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">About</a></li>
                        <li><a class="nav-link scrollto" href="#services">Services</a></li>
                        <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3>Physio Era</h3>
                    <p>
                        {{ $contact->address }}<br><br>
                        <strong>Phone:</strong> {{ $contact->phone }}<br>
                        <strong>Email:</strong> {{ $contact->email }}<br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Physio Era</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#">Prince</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="{{ $contact->whatsapp }}" class="twitter"><i class="bi bi-whatsapp"></i></a>
            <a href="{{ $contact->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{ $contact->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</footer>

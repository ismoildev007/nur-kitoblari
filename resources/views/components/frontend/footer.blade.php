<?php
$contact=\App\Models\Contact::first();
    ?>

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-top-menu bb-2">
                        <nav>
                            <ul>
                                <li><a href="">Bosh sahifa</a></li>
                                <li><a href="">Kitoblar</a></li>
                                <li><a href="">Biz bilan bog'laning</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-mid ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-footer br-2 xs-mb">
                        <div class="footer-title mb-20">
                            <h3>Biz bilan bog'laning</h3>
                        </div>
                        <div class="footer-mid-menu">
                            <ul>
                                <li><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></li>
                                <li><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-footer br-2 xs-mb">
                        <div class="footer-title mb-20">
                            <h3>DO'KON MANZILI</h3>
                        </div>
                        <div class="footer-contact">
                            <div class="location">
                                <p><i class="fa fa-map-marker"></i> Maymanoq, Kasbi tumani, Qashqadaryo viloyati, O'zbekiston</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row bt-2">
                <div class="col-12">
                    <div class="copy-right-area">
                        <p>&copy; 2024 <strong>Nur Kitoblari</strong>. Sayt yaratuvchisi tomonidan barcha huquqlar himoyalangan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<style>
    @media (max-width: 768px) {
        .footer-top-menu ul {
            display: flex;
            flex-direction: column;
            padding: 0;
        }

        .footer-mid-menu ul {
            display: flex;
            flex-direction: column;
            padding: 0;
        }

        .single-footer {
            margin-bottom: 30px;
        }

        .footer-contact .location p {
            font-size: 14px;
            line-height: 1.4;
        }

        .footer-title h3 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .footer-bottom {
            text-align: center;
        }

        .footer-top {
            display: none; /* Mobilda menuni ochish uchun maxsus button qo'shish mumkin */
        }
    }

</style>

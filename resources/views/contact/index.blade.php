@extends('main')

@section('main')
    <div class="contact">
        <div class="container">
            <h3 class="w3ls-title">Наши контакты</h3>
            <div class="contact-w3lsrow">
                <div class="col-md-6 contact-left w3-agileits">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 contact-right">
                    <form action="#" method="post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="Name" required="">
                            <label>Имя</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="Email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="Subject" required="">
                            <label>Тема</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <textarea name="Message" required=""></textarea>
                            <label>Сообщения</label>
                            <span></span>
                        </div>
                        <input type="submit" value="Отправить">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection

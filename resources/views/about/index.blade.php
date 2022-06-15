@extends('main')

@section('main')
    <div class="about">
        <div class="container">
            <h3 class="w3ls-title">О нас</h3>
            <div class="about-w3ls-row">
                <div class="col-md-5 about-left">
                    <img src="images/gal10.JPG" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-7 about-right">
                    <div class="about-agile-row">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class=" nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Инфо</a></li>
                                <li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl"> История</a></li>
                            </ul>
                            <div class="clearfix"> </div>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    <div  class="tabcontent-grids" >

                                        <table  class="onas">

                                            <th>1. Балдар бакчасынын статусу</th>
                                            <tr>
                                                <td class="strong">Бакчанын аталышы:</td>
                                                <td>Байчечекей</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Бакчанын директору: </td>
                                                <td>Каразакова Уулман</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Бакчанын дареги:</td>
                                                <td>Искра айылы</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Окутуу тили: </td>
                                                <td>Кыргыз тили</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Уставынын катталышы Баткен шаары, облустук юстиция башкармалыгы </td>

                                            </tr>


                                            <th>2. Балдар бакчасынын жалпы муноздомозу</th>
                                            <tr>
                                                <td class="strong">Бакча кайсы жылы колдонууга берилген:</td>
                                                <td>2011-жыл, октябрь</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Жалпы аянты: </td>
                                                <td>0,57га</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Жылуулук системасы:</td>
                                                <td>От казан</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Жылдык керектуулучу комур: </td>
                                                <td>16 тонна</td>
                                            </tr>

                                            <th>3. Балдар бакчасындагы тайпалар</th>
                                            <tr>
                                                <td class="strong">Даярдоо:</td>
                                                <td>жок</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Ортонку</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">1 Кенже:</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">2 Кенже: </td>
                                                <td>1</td>
                                            </tr>

                                            <th>4. Окутуу процессинин уюштурулушу</th>
                                            <tr>
                                                <td class="strong">Окуу куну</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Убактысы</td>
                                                <td>8-18.00</td>
                                            </tr>

                                            <th>5. Балдар бакчасынын педагоикалык жамаатынын сапаттык курамы</th>
                                            <tr>
                                                <td class="strong">Жалпы педагоктордун саны:</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Бакчанын директору:</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Тарбиячы:</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Музыка мугалим: </td>
                                                <td>1</td>
                                            </tr>



                                            <th>6. Эмгек стаждары боюнча</th>
                                            <tr>
                                                <td class="strong">Биринчи жыл:</td>
                                                <td>жок</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">1-5 жылга чейин:</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">5-10 жылга чейин:</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">10-15 жылга чейин: </td>
                                                <td>жок</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">15 жылдан жогору: </td>
                                                <td>12</td>
                                            </tr>



                                            <th>7. Бакчадагы жылпы кызматкерлердин саны 15</th>
                                            <tr>
                                                <td class="strong">Директор:</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Тарбиячылар:</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Музыка мугалими:</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Медайым: </td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Тех.кызматкер: </td>
                                                <td>8</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Пенсия жашындагылар: </td>
                                                <td>2</td>
                                            </tr>

                                            <tr>
                                                <td class="strong">Кайсы чет тили окутулат?</td>
                                                <td>жок</td>
                                            </tr>



                                            <th>8. Социалдык коргоого муктаж болгон тарбиялануучулар</th>
                                            <tr>
                                                <td class="strong">Тоголок жетим:</td>
                                                <td>жок</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Жарым жетим:</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Соц. жетим:</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Коп балалауу уй-булолордун балдары: </td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Майыптар: </td>
                                                <td>жок</td>
                                            </tr>

                                            <th>9. Материалдык-техника база</th>
                                            <tr>
                                                <td class="strong">Керектелуучу столдор:</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Керектелуучу отургучтар:</td>
                                                <td>80</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Керектелуучу доскалар:</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Диван кроватьтар: </td>
                                                <td>80</td>
                                            </tr>



                                            <th>10. Тышкы байланыштар</th>
                                            <tr>
                                                <td class="strong">Ата Энелер взносу айына:</td>
                                                <td>500с</td>
                                            </tr>
                                            <tr>
                                                <td class="strong">Камкорчулар кенеши:</td>
                                                <td>50с</td>
                                            </tr>


                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
                                    <div class="tabcontent-grids">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis.Excepteur sint occaecat
                                            cupidatat non proident, sunt in culpa qui officia deserunt mollit, Excepteur sint occaecat
                                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                            anim id est laborum. Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget. Nulla ornare purus nunc, ut dapibus leo sodales adipiscing. Praesent sit amet justo diam. Quisque sagittis egestas sem vitae vestibulum. Quisque nec lacus ornare, volutpat arcu in, lacinia dolor.</p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->

    <!-- team -->
    <div class="team agileits">
        <div class="team-info">
            <div class="container">
                <h3 class="w3ls-title">Биздин команда</h3>
                <h4 class="workers-info text-center">"Байчечекей" балдар бакчасынын жалпы педагогикалык кызматкерлердин сандык жана сапаттык курамы</h4>

                <!--	<div class="team-row">
                    <div class="col-md-3 col-sm-6 col-xs-6 team-grids">
                        <div class="team-agile-img">
                            <a href="#"><img src="images/t4.jpg" alt="img"></a>
                            <div class="view-caption">
                                <div class="w3ls-info">
                                    <h4>Laura</h4>
                                    <p>Staff</p>
                                </div>
                                <ul>
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>-->
                <div class="table-responsive">
                    <table  class="list-workers"  >
                        <tr>
                            <th>Ф.И.О</th>
                            <th>Туулган жылы</th>
                            <th>Улуту жынысы</th>
                            <th>Билими</th>
                            <th>Кызматы</th>
                            <th>Жуктомү</th>
                            <th>Качан кайсы окуу жайын бутургон</th>
                            <th>Диплом боюнча адистиги</th>
                            <th>Жалпы пед стажы</th>
                        </tr>
                        <tr>
                            <td>Каразакова Уулман</td>
                            <td>05.03.1965</td>
                            <td>Крыгыз, аял</td>
                            <td>Жогорку</td>
                            <td>Директор</td>
                            <td>1</td>
                            <td>1990-ж Фрунзе шаары Кыз келиндер институту Дип №133586</td>
                            <td>Мектепке чейинки балдарды тарбиялоо</td>
                            <td>33,5/33,5</td>
                        </tr>
                        <tr>
                            <td>Джураева Мастура</td>
                            <td>22.01.1977</td>
                            <td>Кыргыз,аял</td>
                            <td>Жогорку</td>
                            <td>Тарбиячы</td>
                            <td>1.55</td>
                            <td>2017-жыл Бишкек шаары Арабаева атындагы КМУ Дип №УБ170878481</td>
                            <td>Мектепке чейинки балдарды тарбиялоо</td>
                            <td>13,6/7</td>
                        </tr>
                        <tr>
                            <td>Кудаяарова Бурмакан</td>
                            <td>14.09.1984</td>
                            <td>Кыргыз, аял</td>
                            <td>Жогорку</td>
                            <td>Тарбиячы</td>
                            <td>1,55</td>
                            <td>2009-ж БатМУ Дип № CD0901166068</td>
                            <td>Биология мугалими</td>
                            <td>7/7</td>
                        </tr>
                        <tr>
                            <td>Кадырова Жамила</td>
                            <td>05.04.1974</td>
                            <td>Кыргыз,аял</td>
                            <td>Орто</td>
                            <td>Тарбиячы</td>
                            <td>1,55</td>
                            <td>Сулукту шаарында мектепке чейинки балдарды тарбиялоо боюнча 2- курсунда окуп жатат</td>
                            <td>Мектепке чейинки балдарды тарбиялоо</td>
                            <td>12,9/0,9</td>
                        </tr>
                        <tr>
                            <td>Уматкулов Д</td>
                            <td>14.10.1979</td>
                            <td>Кыргыз, эркек</td>
                            <td>Атайын орто</td>
                            <td>Музыка жетекчиси</td>
                            <td>0,75</td>
                            <td>2002-ж Ош Жогорку коледжи Дип №</td>
                            <td>Музыка мугалими</td>
                            <td>19/19</td>
                        </tr>
                        <tr>
                            <td>Айтикеева Гулумкан</td>
                            <td>27.08.1989</td>
                            <td>Кыргыз, аял</td>
                            <td>Жогорку</td>
                            <td>Тарбиячы</td>
                            <td>1,55</td>
                            <td>2018-ж Жалал-Абад шаары.Дип №111С180044647</td>
                            <td>Мектепке чейинки балдарды тарбиялоо</td>
                            <td>1,3/1,3</td>
                        </tr>

                    </table>
                    <h4 class="workers-info text-center">"Байчечекей" балдар бакчасынын жалпы техникалык кызматкерлердин сандык жана сапаттык курамы</h4>
                    <table class="list-workers">
                        <tr>
                            <th>Ф.И.О</th>
                            <th>Туулган жылы</th>
                            <th>Улуту</th>
                            <th>Кызматы</th>
                            <th>Билими</th>
                            <th>Стажы</th>
                            <th>Эскертуу</th>
                        </tr>
                        <tr>
                            <td>Батырова Гулнара</td>
                            <td>11.08.1968</td>
                            <td>Кыргыз</td>
                            <td>Медсестра</td>
                            <td>Атайын орто</td>
                            <td>33,5</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Самандарова Катыча</td>
                            <td>07.06.1965</td>
                            <td>Кыргыз</td>
                            <td>Жар.тарбиячы</td>
                            <td>Орто</td>
                            <td>22,4</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ташбекова Касиет</td>
                            <td>30.08.1968</td>
                            <td>Кыргыз</td>
                            <td>Жар.тарбиячы</td>
                            <td>Орто</td>
                            <td>23,2</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Аладшова Алтынай</td>
                            <td>16.12.1964</td>
                            <td>Кыргыз</td>
                            <td>Жар.тарбиячы</td>
                            <td>Орто</td>
                            <td>22,8</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Кадырова Бухамида</td>
                            <td>03.03.163</td>
                            <td>Кыргыз</td>
                            <td>Ашпозчу</td>
                            <td>Орто</td>
                            <td>27</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Раззакова Мастура</td>
                            <td>05.01.1974</td>
                            <td>Кыргыз</td>
                            <td>Кир жуугуч</td>
                            <td>Орто</td>
                            <td>13,4</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Саматов Акбарали</td>
                            <td>20.02.1972</td>
                            <td>Кыргыз</td>
                            <td>Кузотчу</td>
                            <td>Орто</td>
                            <td>12,1</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Самандаров Торобек</td>
                            <td>26.08.1972</td>
                            <td>Кыргыз</td>
                            <td>От жаккыч</td>
                            <td>Орто</td>
                            <td>12,1</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Баннапова Гулбайра</td>
                            <td>26.04.1979</td>
                            <td>Кыргыз</td>
                            <td>Ашпозчу, жардамчы</td>
                            <td>Орто</td>
                            <td>0,7</td>
                            <td></td>
                        </tr>

                    </table>
                </div>






            </div>
        </div>
    </div>
    <!-- //team -->
    <!-- features -->
    <div class="features about">
        <div class="container">
            <div class="wthree-features-row">
                <div class="col-md-4 features-w3grid">
                    <div class="col-xs-3 features-w3lleft">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 features-w3lright">
                        <h4>контакты</h4>
                        <p>+996 779 387 990</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 features-w3grid">
                    <div class="col-xs-3 features-w3lleft">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 features-w3lright">
                        <h4>адресс</h4>
                        <p>Сумбула а.о, Искра а, достук к.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 features-w3grid">
                    <div class="col-xs-3 features-w3lleft">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 features-w3lright">
                        <h4>почта</h4>
                        <p><a href="mailto:info@example.com">  karazakovauulman@gmail.com</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection

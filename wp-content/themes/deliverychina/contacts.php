<?php
/**

 * Template Name: Contacts

 */
get_header(); ?>


<main>
    <div class="contacts_wrapper">
        <div class="container1000">
            <span class="title">Наши филиалы</span>
            <ul class="contacts_tabs__link">
                <?php $contact_page_info=get_field('contact_page_info') ?>
                <?php foreach ($contact_page_info as $contact_page_info_k => $contact_page_info_v){
                ?>
                <li>
                    <a href="" <?php if($contact_page_info_k==0){  ?>class="contacts_tabs__link--active"<?php } ?> data-item="<?php echo $contact_page_info_k; ?>"><?php echo $contact_page_info_v['name']; ?></a>
                </li>

                <?php } ?>
            </ul>

            <?php $contact_page_info=get_field('contact_page_info') ?>
            <?php foreach ($contact_page_info as $contact_page_info_k => $contact_page_info_v){
                ?>

                <div  class="contacts_tabs__container<?php if($contact_page_info_k==0){  ?> contacts_tabs__container--active<?php } ?>"  id="<?php echo $contact_page_info_k; ?>">
                    <?php echo $contact_page_info_v['text']; ?>
                </div>
            <?php } ?>


        </div>
        <div class="main_form__wrapper">
            <div class="container">
                <form action="#">
                    <span class="title">Обратная связь</span>
                    <ul>
                        <li class="contact_face">
                            <i class="user_i">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-user fa-w-16 fa-2x"><path fill="currentColor" d="M256 0c88.366 0 160 71.634 160 160s-71.634 160-160 160S96 248.366 96 160 167.634 0 256 0zm183.283 333.821l-71.313-17.828c-74.923 53.89-165.738 41.864-223.94 0l-71.313 17.828C29.981 344.505 0 382.903 0 426.955V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48v-37.045c0-44.052-29.981-82.45-72.717-93.134z" class=""></path></svg>
                            </i>
                            <input type="text" placeholder="Контактное лицо*" required>
                        </li>
                        <li>
                            <i class="tel_i">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone fa-w-16 fa-2x"><path fill="currentColor" d="M493.397 24.615l-104-23.997c-11.314-2.611-22.879 3.252-27.456 13.931l-48 111.997a24 24 0 0 0 6.862 28.029l60.617 49.596c-35.973 76.675-98.938 140.508-177.249 177.248l-49.596-60.616a24 24 0 0 0-28.029-6.862l-111.997 48C3.873 366.516-1.994 378.08.618 389.397l23.997 104C27.109 504.204 36.748 512 48 512c256.087 0 464-207.532 464-464 0-11.176-7.714-20.873-18.603-23.385z" class=""></path></svg>
                            </i>
                            <input type="tel" id="phone_us" placeholder="Телефон" required>
                        </li>
                        <li>
                            <i class="envelope_i">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-2x"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path></svg>
                            </i>
                            <input type="email" placeholder="Электронная почта*" required>
                        </li>
                    </ul>
                    <div class="inpt_container">
                        <i class="info_i"><svg aria-hidden="true" data-prefix="fas" data-icon="info" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" class="svg-inline--fa fa-info fa-w-6 fa-2x"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z" class=""></path></svg></i>
                        <input type="text" placeholder="Дополнительная Информация ">
                    </div>
                    <button type="submit">отправить</button>
                </form>
            </div>
        </div>
        <div class="main_location">
            <div class="container">
                <span class="title">Где мы находимся</span>
                <div class="map_wrapepr">
                    <img src="<?php echo get_template_directory_uri();?>/img/map.png" alt="" class="map">
                    <!--                    <div class="city_marker st_city">-->
                    <!--                        <div>-->
                    <!--								<span class="span_">Санкт-Петербург-->
                    <!--									<i></i>-->
                    <!--								</span>-->
                    <!--                            <div class="city_marker--inside">-->
                    <!--                                <span class="current_span">Санкт-Петербург:</span>-->
                    <!--                                <ul class="first_ul">-->
                    <!--                                    <li>630040, г. Новосибирск,</li>-->
                    <!--                                    <li>ул. Кубовая, д. 86</li>-->
                    <!--                                </ul>-->
                    <!--                                <ul class="second_slider">-->
                    <!--                                    <li>-->
                    <!--                                        <span class="red">Email:</span>-->
                    <!--                                        <a href="">nsk@neoneon.ru</a>-->
                    <!--                                    </li>-->
                    <!--                                    <li>-->
                    <!--                                        <span class="red">Телефон:</span>-->
                    <!--                                        <i>8-383-207-57-56</i>-->
                    <!--                                    </li>-->
                    <!--                                </ul>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="city_marker mosc_city">
                        <div>
								<span class="span_">Москва
									<i></i>
								</span>
                            <div class="city_marker--inside">
                                <span class="current_span">Москва:</span>
                                <ul class="first_ul">
                                    <li> вн. тер. г. Муниципальный округ Солнцево,</li>
                                    <li>ул. Родниковая д. 16. Пом/комн/оф 5/1/2/52</li>

                                </ul>
                                <ul class="second_slider">
                                    <li>
                                        <span class="red">Email:</span>
                                        <a href="">nihao@chinainsiders.ru</a>
                                    </li>
                                    <li>
                                        <span class="red">Телефон:</span>
                                        <i>+7 (916) 336-31-17</i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="city_marker sibr_city">
                        <div>
								<span class="span_">г. Владивосток
									<i></i>
								</span>
                            <div class="city_marker--inside">
                                <span class="current_span">Владивосток:</span>
                                <ul class="first_ul">
                                    <li>ул, Нерчинская</li>
                                    <li>д. 21, офис 2</li>
                                </ul>
                                <ul class="second_slider">
                                    <li>
                                        <span class="red">Email:</span>
                                        <a href="">nihao@chinainsiders.ru</a>
                                    </li>
                                    <li>
                                        <span class="red">Телефон:</span>
                                        <i>+7 (916) 336-31-17</i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

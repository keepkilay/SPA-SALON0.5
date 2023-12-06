<? require_once "header.php"; ?>
        
            <div class='stripes'></div>
            <!-- Панель администратора -->
            <a href="../pages/admin.php" class='adminPanelRef'>Панель администратора</a>
            <!-- контейнер числа дней до ДР -->
            <p class='discount discountBirthday'></p>
            <!-- индивидуальная скидка -->
            <p class='discount discountUniq'></p>

            <?php
            include 'pages/loginWindow.php'; // модальное окно входа
            include 'pages/birthdayInputWindow.php';  // модальное окно ввода ДР
            ?>

            <section class='container' img src="./img/58816d2e174f0331e490116ac16469f5.png" alt="backgroundImg" >
                <section class='visit-card'>
                    <p class='visit-card__company-name'> Спокойствие </p>
                    <p class='visit-card__address'>Спа-Салон (г.Омск, ул.Ленина, д.14)</p>
                    <p class='visit-card__schedule'>24/7</p>
                    <input type="button" class='visit-card__btn' value="Позвонить">
                </section>

                <section class='firstContainer'>
                <h2 class='firstServiesContainer'>Главное</h2>
                <article>
            <img src="./img/IMG_9440.JPG" alt='main-photo'>
            <p>SPA - это символ отдыха, гармонии и расслабления… Три волшебных буквы, таящие в себе магию красоты и роскоши. SPA – это не просто комплекс эффективных методик и процедур. Это, прежде всего, искусство достижения внутреннего и внешнего здоровья, гармонии Вашей души и тела…<br>

<br>Женские SPA-программы – это настоящие магические ритуалы, которые подарят Вам не только полноценный уход за лицом и телом, но и ощущение неги, наслаждения и релаксации…<br>

<br>SPA – это не только прерогатива женщин… Мужчинам также нужны отдых и расслабление. Наши SPA-программы для сильного пола помогут держать себя в форме и станут отличным дополнением к занятиям спортом.<br>

<br>Восхитительный SPA-отдых для двоих – это незабываемое путешествие, в котором Вы можете отдохнуть, расслабиться и прекрасно провести время с лучшей подругой, сестрой, мамой, а также устроить романтическую встречу со своим любимым человеком. Что может быть прекрасней возможности совместить приятное общение и отдых с пользой для здоровья?!<br>

<br>Наши спа — специалисты разработали для Вас прекрасные СПА-программы с разнообразием процедур по уходу за телом и лицом. Вы также можете скорректировать содержание  программ или составить индивидуальную СПА-программу, исходя из своих пожеланий и предпочтений.</p>
                </article>
            </section>

                <h2 class='services-container__title'>Услуги</h2>
                <div class='services-container'>
                    <section class='service'>
                        <h3 class='service__title'>Расслабляющий массаж</h3>
                        <img src="img/srv1.png" alt="">
                        <p class='service__info'>Для психического здоровья и улучшения общего самочувствия после тяжелых жизненных нагрузок.</p>
                        <ul class='service__pricelist'>
                            <li>60 минут — <span class='service__price'>3400₽</span></li>
                            <li>90 минут — <span class='service__price'>4600₽</span></li>
                            <li>120 минут — <span class='service__price'>6400₽</span></li>
                        </ul>
                    </section>

                    <section class='service'>
                        <h3 class='service__title'>Ароматический масляный массаж</h3>
                        <img src="img/srv2.png" alt="">
                        <p class='service__info'>Ойл массаж позволяет достичь омолаживающий и антицеллюлитный эффект, и так же избавиться от различных проблем и заболеваний.</p>
                        <ul class='service__pricelist'>
                            <li>60 минут — <span class='service__price'>3700₽</span></li>
                            <li>90 минут — <span class='service__price'>5000</span></li>
                            <li>120 минут — <span class='service__price'>7000₽</span></li>
                        </ul>
                    </section>

                    <section class='service action-container'>
                        <p class='action-container__action'>Если у вас день рождение СКИДКА на массаж 25%!</p>
                        <p class='action-container__action'>В Новогодние праздники вы можете приобрести годовой абонемент со скидкой 15% с 28 декабря по 12 января.</p>
                    </section>

                    <section class='service'>
                        <h3 class='service__title'>Стоун-терапия</h3>
                        <img src="img/srv3.png" alt="">
                        <p class='service__info'>Для этого вида массажа применяются специальные камни вулканических пород,
                            которые нагреваются до определенной температуры (40-50 градусов). В них содержится множество
                            полезных веществ, включая железо и магний.
                        </p>
                        <ul class='service__pricelist'>
                            <li>60 минут — <span class='service__price'>3600₽</span></li>
                            <li>90 минут — <span class='service__price'>5400₽</span></li>
                            <li>120 минут — <span class='service__price'>7300₽</span></li>
                        </ul>
                    </section>

                    <section class='service'>
                        <h3 class='service__title'>Спортивный массаж</h3>
                        <img src="img/srv4.png" alt="">
                        <p class='service__info'>Техника спортивного массажа особенно рекомендована тем, кто ведет активный
                            образ жизни, регулярно испытывает физические нагрузки. Массажные манипуляции помогут снизить боль,
                            расслабить мышцы, нормализировать кровообращение и лимфопоток.
                        </p>
                        <ul class='service__pricelist'>
                            <li>60 минут — <span class='service__price'>3000₽</span></li>
                            <li>90 минут — <span class='service__price'>4700₽</span></li>
                            <li>120 минут — <span class='service__price'>6900₽</span></li>
                        </ul>
                    </section>

                    <section class='service'>
                        <h3 class='service__title'>ШИАЦУ</h3>
                        <img src="img/srv5.png" alt="">
                        <p class='service__info'>Это японская методика массажа, которая предполагает выполнение 
                            ритмичных движений и точечных надавливаний на определенные участки тела, воздействуя
                            на лимфу, внутренние системы и органы. 
                        </p>
                        <ul class='service__pricelist'>
                            <li>60 минут — <span class='service__price'>4000₽</span></li>
                            <li>90 минут — <span class='service__price'>5200₽</span></li>
                            <li>120 минут — <span class='service__price'>8000₽</span></li>
                        </ul>
                    </section>
                </div>
            </section>
          
  <? require_once 'footer.php'; ?>
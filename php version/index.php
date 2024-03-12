<section class="feedbacks">
    <h2 class="districts__title districts__title_black">Видеообзоры и отзывы наших клиентов</h2>

    <ul class="feedbacks__list">
      <li class="feedback">
        <div>
          <div class="feedback__info">
            <? if (get_field('foto_klienta_1', 11)) : ?>
              <img class="feedback__avatar" src="<? the_field('foto_klienta_1', 11); ?>" alt="аватар" />
            <? endif ?>
            <div>
              <? if (get_field('imya', 11)) : ?>
                <p class="feedback__name"><?= the_field('imya', 11); ?></p>
              <? endif ?>
              <? if (get_field('uroven_znatoka_goroda', 11)) : ?>
                <p class="feedback__text feedback__text_dark feedback__rating-text">
                  <?= the_field('uroven_znatoka_goroda', 11); ?>
                </p>
              <? endif ?>
            </div>
          </div>

          <div class="feedback__rating-block">
            <img class="feedback__stars" src="/wp-content/themes/oceanwp-child/assets/img/stars.svg" alt="аватар" />
            <? if (get_field('data', 11)) : ?>
              <span class="feedback__text feedback__text_dark feedback__date-text"><?= the_field('data', 11); ?></span>
            <? endif ?>
          </div>

          <p class="feedback__text">
            <?= get_field('otzyv', 11); ?>
          </p>

          <? if (get_field('izobrazheniya', 11)) : ?>
            <div class="feedback__images">
              <? 
              $contentImages = get_field('izobrazheniya', 11);
              foreach ($contentImages as $contentImage) : ?>
                <? if (count($contentImages) > 1 && count($contentImages) <= 2) : ?>
                  <img class="feedback__img n1" src="<?= $contentImage; ?>" alt="фотография к отзыву" />
                  <? elseif (count($contentImages) > 2) : ?>
     <img class="feedback__img" src="<?= $contentImage6["url"]; ?>" alt="фотография к отзыву" />
                <? else : ?>
                  <? // var_dump($contentImage3) 
                  ?>
                  <img class="feedback__img 1" src="<?= $contentImage['url']; ?>" alt="фотография к отзыву" />
                <? endif ?>
              <? endforeach; ?>

            </div>
          <? endif ?>
        </div>
      </li>

      <li>
        <? $getVideo1 = get_field('rev_video_1', 11); // https://youtu.be/h2nwNTsKRo0      
        $getVideo1 = str_replace("https://youtu.be/", "", "$getVideo1"); //h2nwNTsKRo0        
        //$getVideo1 = substr($getVideo1, 0, strpos($getVideo1, "?")); //FMVjaTTz2qI
        ?>
        <img class="feedbacks__preview" src="//img.youtube.com/vi/<?= $getVideo1 ?>/hqdefault.jpg" alt="открыть видео" name="https://www.youtube.com/embed/<?= $getVideo1 ?>?si=CNx-6fGrHcD-_4t-" /> 
      </li>

      <li class="feedback">
        <div>
          <div class="feedback__info">
            <? if (get_field('foto_klienta_2', 11)) : ?>
              <img class="feedback__avatar" src="<? the_field('foto_klienta_2', 11); ?>" alt="аватар" />
            <? endif ?>
            <div>
              <? if (get_field('imya_2', 11)) : ?>
                <p class="feedback__name"><?= the_field('imya_2', 11); ?></p>
              <? endif ?>
              <? if (get_field('uroven_znatoka_goroda_2', 11)) : ?>
                <p class="feedback__text feedback__text_dark feedback__rating-text">
                  <?= the_field('uroven_znatoka_goroda_2', 11); ?>
                </p>
              <? endif ?>
            </div>
          </div>

          <div class="feedback__rating-block">
            <img class="feedback__stars" src="/wp-content/themes/oceanwp-child/assets/img/stars.svg" alt="аватар" />
            <? if (get_field('data_2', 11)) : ?>
              <span class="feedback__text feedback__text_dark feedback__date-text"><?= the_field('data_2', 11); ?></span>
            <? endif ?>
          </div>

          <p class="feedback__text">
            <?= get_field('otzyv_2', 11); ?>
          </p>

          <? if (get_field('izobrazheniya_2', 11)) : ?>
            <div class="feedback__images">
              <? $contentImages2 = get_field('izobrazheniya_2', 11);
              foreach ($contentImages2 as $contentImage2) : ?>
                <? if (count($contentImages2) > 1 && count($contentImages2) <= 2) : ?>
                  <img class="feedback__img" src="<?= $contentImage2; ?>" alt="фотография к отзыву" />
                  <? elseif (count($contentImages2) > 2) : ?>
     <img class="feedback__img" src="<?= $contentImage2["url"]; ?>" alt="фотография к отзыву" />
                <? else : ?>
                  <? // var_dump($contentImage3) 
                  ?>
                  <img class="feedback__img" src="<?= $contentImage2['url']; ?>" alt="фотография к отзыву" />
                <? endif ?>
              <? endforeach; ?>

            </div>
          <? endif ?>
        </div>
      </li>

      <li>
        <? $getVideo2 = get_field('rev_video_2', 11);
        $getVideo2 = str_replace("https://youtu.be/", "", "$getVideo2");
        //$getVideo2 = substr($getVideo2, 0, strpos($getVideo2, "?"));
        ?>
        <img class="feedbacks__preview" src="//img.youtube.com/vi/<?= $getVideo2 ?>/hqdefault.jpg" alt="открыть видео" name="https://www.youtube.com/embed/<?= $getVideo2 ?>?si=CNx-6fGrHcD-_4t-" />
      </li>

      <li class="feedback">
        <div>
          <div class="feedback__info">
            <? if (get_field('foto_klienta_3', 11)) : ?>
              <img class="feedback__avatar" src="<? the_field('foto_klienta_3', 11); ?>" alt="аватар" />
            <? endif ?>
            <div>
              <? if (get_field('imya_3', 11)) : ?>
                <p class="feedback__name"><?= the_field('imya_3', 11); ?></p>
              <? endif ?>
              <? if (get_field('uroven_znatoka_goroda_3', 11)) : ?>
                <p class="feedback__text feedback__text_dark feedback__rating-text">
                  <?= the_field('uroven_znatoka_goroda_3', 11); ?>
                </p>
              <? endif ?>
            </div>
          </div>

          <div class="feedback__rating-block">
            <img class="feedback__stars" src="/wp-content/themes/oceanwp-child/assets/img/stars.svg" alt="аватар" />
            <? if (get_field('data_3', 11)) : ?>
              <span class="feedback__text feedback__text_dark feedback__date-text"><?= the_field('data_3', 11); ?></span>
            <? endif ?>
          </div>

          <p class="feedback__text">
            <?= get_field('otzyv_3', 11); ?>
          </p>

          <? if (get_field('izobrazheniya_3', 11)) : ?>
            <div class="feedback__images">
              <? $contentImages3 = get_field('izobrazheniya_3', 11);
              foreach ($contentImages3 as $contentImage3) : ?>
                <? if (count($contentImages3) > 1 && count($contentImages3) <= 2) : ?>
                  <img class="feedback__img n1" src="<?= $contentImage3; ?>" alt="фотография к отзыву" />
                  <? elseif (count($contentImages3) > 2) : ?>
     <img class="feedback__img" src="<?= $contentImage3["url"]; ?>" alt="фотография к отзыву" />
                <? else : ?>
                  <? // var_dump($contentImage3) 
                  ?>
                  <img class="feedback__img 1" src="<?= $contentImage3['url']; ?>" alt="фотография к отзыву" />
                <? endif ?>
              <? endforeach; ?>

            </div>
          <? endif ?>
        </div>
      </li>

      <li>
        <? $getVideo3 = get_field('rev_video_3', 11);
        $getVideo3 = str_replace("https://youtu.be/", "", "$getVideo3");
        //$getVideo3 = substr($getVideo3, 0, strpos($getVideo3, "?"));
        ?>
        <img class="feedbacks__preview" src="//img.youtube.com/vi/<?= $getVideo3 ?>/hqdefault.jpg" alt="открыть видео" name="https://www.youtube.com/embed/<?= $getVideo3 ?>?si=CNx-6fGrHcD-_4t-" />
      </li>

      <!-- скопировала для теста кнопки -->
      <? if (get_field('otzyv_4', 11)) : ?>
        <li class="feedback">
          <div>
            <div class="feedback__info">
              <? if (get_field('foto_klienta_4', 11)) : ?>
                <img class="feedback__avatar" src="<? the_field('foto_klienta_4', 11); ?>" alt="аватар" />
              <? endif ?>
              <div>
                <? if (get_field('imya_4', 11)) : ?>
                  <p class="feedback__name"><?= the_field('imya_4', 11); ?></p>
                <? endif ?>
                <? if (get_field('uroven_znatoka_goroda_4', 11)) : ?>
                  <p class="feedback__text feedback__text_dark feedback__rating-text">
                    <?= the_field('uroven_znatoka_goroda_4', 11); ?>
                  </p>
                <? endif ?>
              </div>
            </div>

            <div class="feedback__rating-block">
              <img class="feedback__stars" src="/wp-content/themes/oceanwp-child/assets/img/stars.svg" alt="аватар" />
              <? if (get_field('data_4', 11)) : ?>
                <span class="feedback__text feedback__text_dark feedback__date-text"><?= the_field('data_4', 11); ?></span>
              <? endif ?>
            </div>

            <p class="feedback__text">
              <?= get_field('otzyv_4', 11); ?>
            </p>

            <? if (get_field('izobrazheniya_4', 11)) : ?>
              <div class="feedback__images">
                <? $contentImages4 = get_field('izobrazheniya_4', 11);
                foreach ($contentImages4 as $contentImage4) : ?>
                  <? if (count($contentImages4) > 1 && count($contentImages4) <= 2) : ?>
                    <img class="feedback__img" src="<?= $contentImage4['url']; ?>" alt="фотография к отзыву" />
                    <? elseif (count($contentImages4) > 2) : ?>
     <img class="feedback__img" src="<?= $contentImage4["url"]; ?>" alt="фотография к отзыву" />
                  <? else : ?>

                    <img class="feedback__img" src="<?= $contentImage4['url']; ?>" alt="фотография к отзыву" />
                  <? endif ?>
                <? endforeach; ?>

              </div>
            <? endif ?>
          </div>
        </li>
      <? endif ?>
      <? if (get_field('rev_video_4', 11)) : ?>
        <li>
          <? $getVideo4 = get_field('rev_video_4', 11);
          $getVideo4 = str_replace("https://youtu.be/", "", "$getVideo4");
          //$getVideo4 = substr($getVideo4, 0, strpos($getVideo4, "?"));
          ?>
          <img class="feedbacks__preview" src="//img.youtube.com/vi/<?= $getVideo4 ?>/hqdefault.jpg" alt="открыть видео" name="https://www.youtube.com/embed/<?= $getVideo4 ?>?si=CNx-6fGrHcD-_4t-" />
        </li>
      <? endif ?>
      <? if (get_field('otzyv_5', 11)) : ?>
        <li class="feedback">
          <div>
            <div class="feedback__info">
              <? if (get_field('foto_klienta_5', 11)) : ?>
                <img class="feedback__avatar" src="<? the_field('foto_klienta_5', 11); ?>" alt="аватар" />
              <? endif ?>
              <div>
                <? if (get_field('imya_5', 11)) : ?>
                  <p class="feedback__name"><?= the_field('imya_5', 11); ?></p>
                <? endif ?>
                <? if (get_field('uroven_znatoka_goroda_5', 11)) : ?>
                  <p class="feedback__text feedback__text_dark feedback__rating-text">
                    <?= the_field('uroven_znatoka_goroda_5', 11); ?>
                  </p>
                <? endif ?>
              </div>
            </div>

            <div class="feedback__rating-block">
              <img class="feedback__stars" src="/wp-content/themes/oceanwp-child/assets/img/stars.svg" alt="аватар" />
              <? if (get_field('data_5', 11)) : ?>
                <span class="feedback__text feedback__text_dark feedback__date-text"><?= the_field('data_5', 11); ?></span>
              <? endif ?>
            </div>

            <p class="feedback__text">
              <?= get_field('otzyv_5', 11); ?>
            </p>

            <? if (get_field('izobrazheniya_5', 11)) : ?>
              <div class="feedback__images">
                <? $contentImages5 = get_field('izobrazheniya_5', 11);
                foreach ($contentImages5 as $contentImage5) : ?>
                  <? if (count($contentImages5) > 1 && count($contentImages5) <= 2) : ?>
                    <img class="feedback__img" src="<?= $contentImage5; ?>" alt="фотография к отзыву" />
                    <? elseif (count($contentImages5) > 2) : ?>
     <img class="feedback__img" src="<?= $contentImage5["url"]; ?>" alt="фотография к отзыву" />
                  <? else : ?>

                    <img class="feedback__img" src="<?= $contentImage5['url']; ?>" alt="фотография к отзыву" />
                  <? endif ?>
                <? endforeach; ?>

              </div>
            <? endif ?>
          </div>
        </li>
      <? endif ?>
      <? if (get_field('rev_video_5', 11)) : ?>
        <li>
          <? $getVideo5 = get_field('rev_video_5', 11);
          $getVideo5 = str_replace("https://youtu.be/", "", "$getVideo5");
          //$getVideo5 = substr($getVideo5, 0, strpos($getVideo5, "?"));

          ?>
          <img class="feedbacks__preview" src="//img.youtube.com/vi/<?= $getVideo5 ?>/hqdefault.jpg" alt="открыть видео" name="https://www.youtube.com/embed/<?= $getVideo5 ?>?si=CNx-6fGrHcD-_4t-" />
        </li>
      <? endif ?>
      <? if (get_field('otzyv_6', 11)) : ?>
        <li class="feedback">
          <div>
            <div class="feedback__info">
              <? if (get_field('foto_klienta_6', 11)) : ?>
                <img class="feedback__avatar" src="<? the_field('foto_klienta_6', 11); ?>" alt="аватар" />
              <? endif ?>
              <div>
                <? if (get_field('imya_6', 11)) : ?>
                  <p class="feedback__name"><?= the_field('imya_6', 11); ?></p>
                <? endif ?>
                <? if (get_field('uroven_znatoka_goroda_6', 11)) : ?>
                  <p class="feedback__text feedback__text_dark feedback__rating-text">
                    <?= the_field('uroven_znatoka_goroda_6', 11); ?>
                  </p>
                <? endif ?>
              </div>
            </div>

            <div class="feedback__rating-block">
              <img class="feedback__stars" src="/wp-content/themes/oceanwp-child/assets/img/stars.svg" alt="аватар" />
              <? if (get_field('data_6', 11)) : ?>
                <span class="feedback__text feedback__text_dark feedback__date-text"><?= the_field('data_6', 11); ?></span>
              <? endif ?>
            </div>

            <p class="feedback__text">
              <?= get_field('otzyv_6', 11); ?>
            </p>

            <? if (get_field('izobrazheniya_6', 11)) : ?>
              <div class="feedback__images">
                <? $contentImages6 = get_field('izobrazheniya_6', 11);
             
                foreach ($contentImages6 as $contentImage6) : ?>
                  <? if (count($contentImages6) > 1 && count($contentImages6) <= 2) : ?>
                    <img class="feedback__img" src="<?= $contentImage6; ?>" alt="фотография к отзыву" />
                    <? elseif (count($contentImages6) > 2) : ?>
                      <img class="feedback__img" src="<?= $contentImage6["url"]; ?>" alt="фотография к отзыву" />
                  <? else : ?>

                    <img class="feedback__img" src="<?= $contentImage6['url']; ?>" alt="фотография к отзыву" />
                  <? endif ?>
                <? endforeach; ?>

              </div>
            <? endif ?>
          </div>
        </li>
      <? endif ?>
      <? if (get_field('rev_video_6', 11)) : ?>
        <li>
          <? $getVideo6 = get_field('rev_video_6', 11);
          $getVideo6 = str_replace("https://youtu.be/", "", "$getVideo6");
          //$getVideo6 = substr($getVideo6, 0, strpos($getVideo6, "?"));
          ?>
          <img class="feedbacks__preview" src="//img.youtube.com/vi/<?= $getVideo6 ?>/hqdefault.jpg" alt="открыть видео" name="https://www.youtube.com/embed/<?= $getVideo6 ?>?si=CNx-6fGrHcD-_4t-" />

        </li>
      <? endif ?>
    </ul>

    <button class="feedbacks__more districts__button">Еще отзывы</button>

    <section class="podbor popup popup_feedback">
      <div class="popup__content">
        <div></div>

        <button type="button" class="popup__close" aria-label="Закрыть"></button>
      </div>
    </section>
  </section>

  <section class="podbor popup popup_video">
    <div class="popup__content">
      <button type="button" class="popup__close" aria-label="Закрыть"></button>
      <iframe class="popup__video" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
    </div>
</section>

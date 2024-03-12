
  //

  class Popup {
    constructor(popupSelector) {
      this._popupSelector = document.querySelector(popupSelector);
      this._closeButton = this._popupSelector.querySelector(".popup__close");
      this.close = this.close.bind(this);
      this.handleEscClose = this.handleEscClose.bind(this);
    }

    open() {
      this._popupSelector.classList.add("popup_opened");
      document.addEventListener("keydown", this.handleEscClose);
    }

    close() {
      this._popupSelector.classList.remove("popup_opened");

      if (this._popupSelector.querySelector('iframe')) {
        this._popupSelector.querySelector('iframe').removeAttribute("src");
      }
    }

    handleEscClose() {
      if (event.key === "Escape") {
        this.close();
      }
    }

    setEventListeners() {
      this._closeButton.addEventListener("click", this.close);

      this._popupSelector.addEventListener("click", (event) => {
        if (event.currentTarget === event.target) {
          this.close();
        }
      });
    }
  }

  const videoImage = document.querySelector(".info__video-block img");
const popupVideo = document.querySelector(".popup_video");

const videoPopup = new Popup(".popup_video");

if (videoPopup) {
  videoPopup.setEventListeners();
}
function openVideoPopup(video) {
    videoPopup.open();
    popupVideo.querySelector(".popup__video").setAttribute("src", video);
  }

const popupFeedback = document.querySelector(".popup_feedback");
  let addMore = document.querySelector(".feedbacks__more");

  const feedbackList = document.querySelector(".feedbacks__list");
  let feedbacksItems;
  let feedbackVideos;
  let feedbacks;

  if (feedbackList) {
    feedbacksItems = Array.from(
      feedbackList.querySelectorAll(".feedbacks__list li")
    );
    
    feedbackVideos = Array.from(feedbackList.querySelectorAll(".feedbacks__preview"));
    feedbacks = Array.from(feedbackList.querySelectorAll(".feedback"));
  }

  const cardAmmount = 6;
  const feedbackPopup = new Popup(".popup_feedback");

  if (feedbackPopup) {
    feedbackPopup.setEventListeners();
  }

  function openFeedbackPopup(e) {
    console.log ('xcd');
    feedbackPopup.open();

    const container = popupFeedback.querySelector(".popup__content div");
    const el = e.currentTarget.querySelector(".feedback div").cloneNode(true);

    container.replaceWith(el);
  }

  function addMoreFeedback() {
    // найти первый скрытый элемент
    let lastVisibleIndex = feedbacksItems.findIndex((el) =>
      el.classList.contains("hidden")
    );

    // открыть 6 следующих скрытых элементов
    feedbacksItems.forEach((el, index) => {
      if (index < lastVisibleIndex + cardAmmount) {
        el.classList.remove("hidden");
      }
    });

    // проверка на наличие еще элементов
    if (lastVisibleIndex + cardAmmount === feedbacksItems.length) {
      addMore.classList.add("hidden");
      addMore.removeEventListener("click", addMoreFeedback);
    }
  }

  // скрыть лишние элементы
  if (feedbackList) {
    feedbacksItems.forEach((el, index) => {

      if (index > 5) {
        el.classList.add("hidden");
      }
    });

  // скрыть кнопку, если отзывов меньше 7
    if (feedbacksItems.length <= 6) {
      addMore.classList.add("hidden");
    }

    if (feedbackVideos) {
      feedbackVideos.forEach((el) => {
        el.addEventListener("click", (e) => openVideoPopup(e.target.name));
    });
    }

    if (feedbacks) {
      feedbacks.forEach((el) => {
        el.addEventListener("click", openFeedbackPopup);
       
      });    
    }
  }

  if (addMore) {
    addMore.addEventListener("click", addMoreFeedback);
  }

  // построенные обьекты - отзывы 

  const objectsFeedback = Array.from(document.querySelectorAll('.object-row__feedback .feedback'));

  if (objectsFeedback.length >= 1 ) {
    
    objectsFeedback.forEach((el) => {
      el.addEventListener("click", openFeedbackPopup);
    });  
  }



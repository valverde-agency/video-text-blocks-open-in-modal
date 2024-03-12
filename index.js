const windowInnerWidth = window.innerWidth;
const videos = document.querySelectorAll(".video__main-slider");
const mainVideo = document.getElementById("main-video_slider").getElementsByTagName('iframe')[0];
const onasCarousel = document.querySelector(".carousel__main-slider");
const firstImage = onasCarousel.querySelectorAll("img")[0];
const arrowIcons = document.querySelectorAll(".arrow__main-slider");

const imageHeight = 180 + 19;
const imageWidth = 320 + 15;

const scrollHeight = onasCarousel.scrollHeight - onasCarousel.clientHeight;
const scrollWidth = onasCarousel.scrollWidth - onasCarousel.clientWidth;

arrowIcons.forEach(icon => {
	icon.addEventListener("click", () => {
		if (windowInnerWidth > 1200) {
			onasCarousel.scrollTop += icon.id === "up" ? -imageHeight : imageHeight;
		} else {
			onasCarousel.scrollLeft += icon.id === "up" ? -imageWidth : imageWidth;
		}
	})
})

// videos.forEach(video => {
// 	video.addEventListener("click", () => {
// 		const iframeVideo = video.querySelector("iframe");
// 		if (mainVideo.src !== iframeVideo.src) mainVideo.src = iframeVideo.src;
// 	})
// })

videos.forEach(video => {
    video.addEventListener("click", () => {
        const iframeVideo = video.querySelector("iframe");
        const mainVideoSrc = mainVideo.src;
        const mainView = document.querySelector(".views_main_slider span");
        const videoViews = video.querySelector(".views_main_slider span");
        console.log(videoViews, mainView);
        if (mainVideo.src !== iframeVideo.src) {
            const iframeVideoSrc = iframeVideo.src;
            mainVideo.src = iframeVideoSrc;
            iframeVideo.src = mainVideoSrc;

            const tmp = mainView.textContent;
            mainView.textContent = videoViews.textContent;
            videoViews.textContent = tmp;
        }
    })
})




// mobile

const mobileArrowIcons = document.querySelectorAll(".wrapper-mobile_main-slider .arrow__main-slider");
const mobileMainVideo = document.getElementById("mobile-main-video_slider").getElementsByTagName('iframe')[0];
let ids = Array.from(document.querySelectorAll(".video__main-slider iframe")).map(iframe => iframe.src.split("/").pop());
let currentId = ids.indexOf(mobileMainVideo.src.split("/").pop());

if (currentId === -1) {
    ids.push(mobileMainVideo.src.split("/").pop());
}

mobileArrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        if (icon.id === "left") {
            currentId = (currentId - 1 + ids.length) % ids.length;
        } else if (icon.id === "right") {
            currentId = (currentId + 1) % ids.length;
        }
        mobileMainVideo.src = "https://www.youtube.com/embed/" + ids[currentId];
    })
})
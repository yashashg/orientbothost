const voice = document.querySelector(".start");
var transcript;
const SpeechRecognition =
  window.SpeechRecognition || window.webkitSpeechRecognition;
const recorder = new SpeechRecognition();
recorder.lang = "hi-IN"; //CHANGED LANGUAGE FROM HERE
voice.addEventListener("click", () => {
  recorder.start();
});
recorder.onstart = () => {
  console.log("Voice activated");
  audio.pause();
};
recorder.onresult = (event) => {
  const resultIndex = event.resultIndex;
  transcript = event.results[resultIndex][0].transcript;
  document.getElementById("cb").checked = false;
  recog(transcript);
  return transcript;
};
recorder.onerror = function (event) {
  console.log("Error occurred in recognition: " + event.error);
  document.getElementById("cb").checked = false;
};
function recog(message) {
  console.log(message);
  if (
    message.includes("अबाउट ओरियंट") ||
    message.includes("अबाउट ओरिएंट क्लब") ||
    message.includes("ओरिएंट के बारे में") ||
    message.includes("ओरिएंट क्लब के बारे में") ||
    message.includes("ओरिएंट क्लब में क्या क्या है") ||
    message.includes("ओरिएंट क्लब क्या है") ||
    message.includes("ओरियंट क्लब क्या है") ||
    message.includes("अबाउट ओरियंट क्लब") ||
    message.includes("अबाउट ओरियंट") ||
    message.includes("ओरियंट क्लब के बारे में")
  ) {
    window.location.href = "./home.php#about";
  } else if (
    message.includes("इवेंट्स") ||
    message.includes("क्या इवेंट्स होते हैं") ||
    message.includes("कोनसे इवेंट्स होते हैं") ||
    message.includes("इवेंट्स की जानकारी") ||
    message.includes("इवेंट लिस्ट") ||
    message.includes("इवेंट इनफार्मेशन") ||
    message.includes("अबाउट इवेंट्स") ||
    message.includes("ओरिएंट क्लब के इवेंट्स") ||
    message.includes("सेलेब्रेशन्स") ||
    message.includes("सुविधाएँ") ||
    message.includes("सुविधा") ||
    message.includes("फैसिलिटी") ||
    message.includes("फैसिलिटीज") ||
    message.includes("एमेनिटीज") ||
    message.includes("एमेनिटी") ||
    message.includes("चीज़ें") ||
    message.includes("इवेंट")
  ) {
    window.location.href = "./amenities.php#event";
  } else if (
    message.includes("रूम बुक") ||
    message.includes("बुक रूम") ||
    message.includes("रेजिडेंशियल") ||
    message.includes("रेसिडेंटिअल") ||
    message.includes("बैंक्विट हॉल बुक करना है")
  ) {
    window.location.href = "./comingsoon.php";
  } else if (
    message.includes("बैंक्वेट हॉल") ||
    message.includes("बैंक्वेट") ||
    message.includes("बैंक्वेट हॉल देखना है") ||
    message.includes("बैंक्वेट हॉल  के बारे में बताओ") ||
    message.includes("बैंक्वेट हॉल  की जानकारी") ||
    message.includes("बैंक्विट हॉल बुक करना है")
  ) {
    window.location.href = "./amenities.php#banquet";
  } else if (
    message.includes("मल्टी यूटिलिटी हॉल") ||
    message.includes("मल्टी यूटिलिटी") ||
    message.includes("मल्टी यूटिलिटी देखना है") ||
    message.includes("मल्टी यूटिलिटी के बारे में बताओ") ||
    message.includes("मल्टी यूटिलिटी की जानकारी")
  ) {
    window.location.href = "./amenities.php#multi";
  } else if (
    message.includes("कौनफरैंस ") ||
    message.includes("कौनफरैंस रूम ") ||
    message.includes("मीटिंग रूम ") ||
    message.includes("मीटिंग") ||
    message.includes("मीटिंग रूम") ||
    message.includes("कॉन्फ्रेंस")
  ) {
    window.location.href = "./amenities.php#conference";
  } else if (
    message.includes("रेस्टोरेंट्स") ||
    message.includes("ईटिंग") ||
    message.includes("रेस्टोरेंट्स की जानकारी") ||
    message.includes("एस्ट्रो") ||
    message.includes("रेस्टो") ||
    message.includes("रेस्टोरेंट")
  ) {
    window.location.href = "./amenities.php#restaurant";
  } else if (
    message.includes("कॉफ़ी शॉप") ||
    message.includes("कॉफ़ी शॉप  की जानकारी") ||
    message.includes("कॉफ़ी शॉप  के बारे में") ||
    message.includes("कॉफ़ी") ||
    message.includes("कॉफी") ||
    message.includes("मुझे कॉफी शॉप के बारे में बताना")
  ) {
    window.location.href = "./amenities.php#coffee";
  } else if (
    message.includes("कैटरिंग") ||
    message.includes("कैटरिंग के रेट्स") ||
    message.includes("कैटरिंग सर्विस") ||
    message.includes("कैटरिंग सर्विस की जानकारी") ||
    message.includes("कैटरिंग का मेनू") ||
    message.includes("कैटरिंग  प्राइस")
  ) {
    window.location.href = "./amenities.php#catering";
  } else if (
    message.includes("एक्टिविटीज") ||
    message.includes("एक्टिविटी") ||
    message.includes("एक्टिविटीज़ के बारे में") ||
    message.includes("एक्टिविटीज़ की जानकारी") ||
    message.includes("अबाउट एक्टिविटीज") ||
    message.includes("ओरिएंट क्लब में कितनी एक्टिविटीज है")
  ) {
    window.location.href = "./activity.php#activity";
  } else if (
    message.includes("कार्ड प्लेइंग") ||
    message.includes("कार्ड प्लेइंग रूम") ||
    message.includes("कार्ड") ||
    message.includes("प्लेन रूम") ||
    message.includes("मुझे कार्ड्स खेलने है") ||
    message.includes("मुझे कार्ड खेलना है") ||
    message.includes("कार्ड प्लेइंग रूम") ||
    message.includes("मॉडलिंग रूम")
  ) {
    if (
      message.includes("प्राइस") ||
      message.includes("रेट्स") ||
      message.includes("टाइमिंग") ||
      message.includes("टाइम")
    ) {
      window.location.href = "./card.php#price";
    } else {
      window.location.href = "./card.php#card";
    }
  } else if (
    message.includes("बिलियर्ड्स") ||
    message.includes("बिलियर्ड्स की जानकारी") ||
    message.includes("बिलियर्ड्स के बारे में") ||
    message.includes("पूल") ||
    message.includes("पूल की जानकारी") ||
    message.includes("पूल के बारे में") ||
    message.includes("स्नूकर") ||
    message.includes("स्नूकर की जानकारी") ||
    message.includes("स्नूकर के बारे में")
  ) {
    if (
      message.includes("प्राइस") ||
      message.includes("रेट्स") ||
      message.includes("टाइमिंग") ||
      message.includes("टाइम")
    ) {
      window.location.href = "./billiards.php#price";
    } else {
      window.location.href = "./billiards.php#billiards";
    }
  } else if (
    message.includes("टेबल टेनिस") ||
    message.includes("टेबल टेनिस रूम") ||
    message.includes("टीटी")
  ) {
    if (
      message.includes("प्राइस") ||
      message.includes("रेट्स") ||
      message.includes("टाइमिंग") ||
      message.includes("टाइम")
    ) {
      window.location.href = "./tabletennis.php#price";
    } else {
      window.location.href = "./tabletennis.php#table";
    }
  } else if (
    message.includes("हेल्थ") ||
    message.includes("हेल्थ सेंटर") ||
    message.includes("हेल्त") ||
    message.includes("जिम") ||
    message.includes("फिटनेस सेंटर") ||
    message.includes("फिटनेस") ||
    message.includes("एक्सरसाइज रूम") ||
    message.includes("एक्सरसाइज")
  ) {
    if (
      message.includes("प्राइस") ||
      message.includes("रेट्स") ||
      message.includes("टाइमिंग") ||
      message.includes("टाइम")
    ) {
      window.location.href = "./healthcenter.php#price";
    } else {
      window.location.href = "./healthcenter.php#health";
    }
  } else if (
    message.includes("चैस") ||
    message.includes("चेस") ||
    message.includes("शतरंज") ||
    message.includes("शतरंज का खेल") ||
    message.includes("चतुरंग")
  ) {
    if (
      message.includes("प्राइस") ||
      message.includes("रेट्स") ||
      message.includes("टाइमिंग") ||
      message.includes("टाइम")
    ) {
      window.location.href = "./chess.php#price";
    } else {
      window.location.href = "./chess.php#chess";
    }
  } else if (message.includes("ब्रिज") || message.includes("ब्रिज गेम ")) {
    if (
      message.includes("प्राइस") ||
      message.includes("रेट्स") ||
      message.includes("टाइमिंग") ||
      message.includes("टाइम")
    ) {
      window.location.href = "./bridge.php#price";
    } else {
      window.location.href = "./bridge.php#bridge";
    }
  } else if (
    message.includes("कैरम") ||
    message.includes("कैरम गेम") ||
    message.includes("कैरम बोर्ड")
  ) {
    if (
      message.includes("प्राइस") ||
      message.includes("रेट्स") ||
      message.includes("टाइमिंग") ||
      message.includes("टाइम")
    ) {
      window.location.href = "./carrom.php#price";
    } else {
      window.location.href = "./carrom.php#carrom";
    }
  } else if (
    message.includes("हाउसी") ||
    message.includes("तम्बोला") ||
    message.includes("बिंगो") ||
    message.includes("हाऊजी")
  ) {
    if (
      message.includes("प्राइस") ||
      message.includes("रेट्स") ||
      message.includes("टाइमिंग") ||
      message.includes("टाइम")
    ) {
      window.location.href = "./housie.php#price";
    } else {
      window.location.href = "./housie.php#housie";
    }
  } else if (
    message.includes("संगीत") ||
    message.includes("म्यूजिक") ||
    message.includes("गाने") ||
    message.includes("म्यूजिक क्लासज़") ||
    message.includes("संगीत क्लासज़")
  ) {
    if (
      message.includes("प्राइस") ||
      message.includes("रेट्स") ||
      message.includes("टाइमिंग") ||
      message.includes("टाइम")
    ) {
      window.location.href = "./sangeet.php#price";
    } else {
      window.location.href = "./sangeet.php#sangeet";
    }
  } else if (
    message.includes("गैलरी") ||
    message.includes("फोटो गैलरी") ||
    message.includes("फोटो") ||
    message.includes("पिक्चर") ||
    message.includes("पिक्चर गैलरी") ||
    message.includes("इमेजेज ") ||
    message.includes("इमेज गैलरी")
  ) {
    window.location.href = "./gallery.php#gallery";
  } else if (
    message.includes("मेम्बरशिप") ||
    message.includes("क्लब मेम्बरशिप") ||
    message.includes("ओरिएंट क्लब मेम्बरशिप") ||
    message.includes("अबाउट मेम्बरशिप") ||
    message.includes("बिकम अ मैंबर") ||
    message.includes("मैंबर") ||
    message.includes("ओरियंट क्लब में मेंबरशिप लेना है") ||
    message.includes("मेंबरशिप")
  ) {
    window.location.href = "./membership.php#membership";
  } else if (
    message.includes("मैनेजमेंट") ||
    message.includes("प्रेसिडेंट") ||
    message.includes("वाईस प्रेसिडेंट") ||
    message.includes("सेक्रेटरी ") ||
    message.includes("जॉइंट सेक्रेटरी") ||
    message.includes("मैनेजिंग कमिटी ") ||
    message.includes("लीगल एडवाइजर") ||
    message.includes("ओरियंट क्लब की मैनेजमेंट") ||
    message.includes("मैनेजिंग टीम") ||
    message.includes("ओरियंट क्लब की टीम") ||
    message.includes("टीम") ||
    message.includes("मैनेजमेंट टीम")
  ) {
    window.location.href = "./management.php#management";
  } else if (
    message.includes("कॉन्टैक्ट") ||
    message.includes("संपर्क करें") ||
    message.includes("कॉनटैक्ट अस") ||
    message.includes("कौन टेटस") ||
    message.includes("कांटेक्ट") ||
    message.includes("हाउ कैन आई कॉन्टैक्ट यू")
  ) {
    window.location.href = "./contact.php#contact";
  } else {
    var none = window.location.href.split("#")[0];
    console.log(none);
    window.location.href = none + "#none";
  }
  tts();
}
$(document).ready(function () {
  tts();
});
function tts() {
  if (window.location.hash === "#about") {
    var audio = new Audio("./assets/audio/about.mp3");
  } else if (window.location.hash === "#event") {
    var audio = new Audio("./assets/audio/event.mp3");
  } else if (window.location.hash === "#banquet") {
    var audio = new Audio("./assets/audio/banquet.mp3");
  } else if (window.location.hash === "#multi") {
    var audio = new Audio("./assets/audio/multi.mp3");
  } else if (window.location.hash === "#conference") {
    var audio = new Audio("./assets/audio/conference.mp3");
  } else if (window.location.hash === "#restaurant") {
    var audio = new Audio("./assets/audio/rest.mp3");
  } else if (window.location.hash === "#coffee") {
    var audio = new Audio("./assets/audio/coffee.mp3");
  } else if (window.location.hash === "#catering") {
    var audio = new Audio("./assets/audio/catering.mp3");
  } else if (window.location.hash === "#activity") {
    var audio = new Audio("./assets/audio/activity.mp3");
  } else if (window.location.hash === "#cards") {
    var audio = new Audio("./assets/audio/card.mp3");
  } else if (window.location.hash === "#billiards") {
    var audio = new Audio("./assets/audio/billiard.mp3");
  } else if (window.location.hash === "#table") {
    var audio = new Audio("./assets/audio/tt.mp3");
  } else if (window.location.hash === "#health") {
    var audio = new Audio("./assets/audio/health.mp3");
  } else if (window.location.hash === "#chess") {
    var audio = new Audio("./assets/audio/chess.mp3");
  } else if (window.location.hash === "#bridge") {
    var audio = new Audio("./assets/audio/bridge.mp3");
  } else if (window.location.hash === "#carrom") {
    var audio = new Audio("./assets/audio/carrom.mp3");
  } else if (window.location.hash === "#housie") {
    var audio = new Audio("./assets/audio/housie.mp3");
  } else if (window.location.hash === "#sangeet") {
    var audio = new Audio("./assets/audio/sangeet.mp3");
  } else if (window.location.hash === "#price") {
    var audio = new Audio("./assets/audio/price.mp3");
  } else if (window.location.hash === "#gallery") {
    var audio = new Audio("./assets/audio/gallery.mp3");
  } else if (window.location.hash === "#membership") {
    var audio = new Audio("./assets/audio/membership.mp3");
  } else if (window.location.hash === "#management") {
    var audio = new Audio("./assets/audio/management.mp3");
  } else if (window.location.hash === "#contact") {
    var audio = new Audio("./assets/audio/contact.mp3");
  } else if (window.location.hash === "#none") {
    var audio = new Audio("./assets/audio/none.mp3");
  } else {
    console.log("no hash detetcted!");
  }
  audio.play();
  console.log("ok");
}

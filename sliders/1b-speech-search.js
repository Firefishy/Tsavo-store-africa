var speech = {
  // (A) PROPERTIES
  recognition : null, // Speech recognition object
  hwrap : null, // HTML speech on/off button wrapper
  hon : null, // HTML speech on button
  hoff : null, // HTML speech off button
  
  // (B) INIT
  init : function () {
    // (B1) GET HTML ELEMENTS
    speech.hwrap = document.getElementById("search-speech");
    speech.hon = document.getElementById("speech-on");
    speech.hoff = document.getElementById("speech-off");

    // (B2) SPEECH RECOGNITION SUPPORTED - ASK FOR PERMISSION
    // ! WILL FAIL IF NO MICROPHONE IS ATTACHED TO COMPUTER !
    if (window.hasOwnProperty('SpeechRecognition') || window.hasOwnProperty('webkitSpeechRecognition')) {
      navigator.mediaDevices.getUserMedia({ audio: true })
      .then(function(stream) {
        speech.hon.onclick = speech.start;
        speech.hoff.onclick = speech.stop;
        speech.hoff.disabled = true;
      })
      .catch(function(err) {
        speech.hwrap.innerHTML = "Please enable access and attach a microphone.";
      });
    }

    // (B3) SPEECH RECOGNITION NOT SUPPORTED
    else {
      speech.hwrap.innerHTML = "Speech recognition not supported.";
    }
  },
  
  // (C) START SPEECH RECOGNITION
  start : function () {
    // (C1) CREATE SPEECH RECOGNITION OBJECT
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    speech.recognition = new SpeechRecognition();
    
    // (C2) SET OPTIONS
    speech.recognition.continuous = true;
    speech.recognition.interimResults = false;
    speech.recognition.lang = "en-US";
    
    // (C3) WHAT TO DO ON ERROR + RESULT
    speech.recognition.onerror = function (evt) {
      console.log(evt);
    };
    speech.recognition.onresult = function (evt) {
      document.getElementById('search-input').value= evt.results[0][0].transcript;
      speech.stop();
    };
    
    // (C4) GO!
    speech.hon.disabled = true;
    speech.hoff.disabled = false;
    speech.recognition.start();
  },

  // (D) STOP/CANCEL SPEECH RECOGNITION
  stop : function () {
    if (speech.recognition != null) {
      speech.recognition.stop();
      speech.recognition = null;
      speech.hon.disabled = false;
      speech.hoff.disabled = true;
    }
  }
};

window.addEventListener("DOMContentLoaded", speech.init);
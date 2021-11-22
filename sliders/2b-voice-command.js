var cmd = {
  // (A) PROPERTIES
  // ! Define your recognized colors here !
  colors : ["red", "green", "blue", "cyan", "magenta", "purple", "yellow", "orange", "black", "white"],
  recognition : null, // Speech recognition object
  hcolor : null, // HTML color container
  hwrap : null, // HTML speech on/off button wrapper
  hon : null, // HTML speech on button
  hoff : null, // HTML speech off button

  // (B) INIT
  init : function () {
    // (B1) GET HTML ELEMENTS
    cmd.hcolor = document.getElementById("color-wrap");
    cmd.hwrap = document.getElementById("voice-cmd");
    cmd.hon = document.getElementById('voice-on');
    cmd.hoff = document.getElementById('voice-off');

    // (B2) SPEECH RECOGNITION SUPPORTED - ASK FOR PERMISSION
    // ! WILL FAIL IF NO MICROPHONE IS ATTACHED TO COMPUTER !
    if (window.hasOwnProperty('SpeechRecognition') || window.hasOwnProperty('webkitSpeechRecognition')) {
      navigator.mediaDevices.getUserMedia({ audio: true })
      .then(function(stream) {
        cmd.hon.onclick = cmd.start;
        cmd.hoff.onclick = cmd.stop;
        cmd.hon.disabled = false;
      })
      .catch(function(err) {
        cmd.hwrap.innerHTML = "Please enable access and attach a microphone.";
      });
    }

    // (B3) SPEECH RECOGNITION NOT SUPPORTED
    else {
      cmd.hwrap.innerHTML = "Speech Recognition not supported on your browser";
    }
  },
  
  // (C) START VOICE COMMAND
  start : function () {
    // (C1) CREATE SPEECH RECOGNITION OBJECT
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    cmd.recognition = new SpeechRecognition();

    // (C2) SET OPTIONS
    cmd.recognition.continuous = false;
    cmd.recognition.interimResults = false;
    cmd.recognition.lang = "en-US";
    
    // (C3) WHAT TO DO ON ERROR + CHANGE BACKGROUND COLOR ON RESULT
    cmd.recognition.onerror = function (evt) {
      console.log(evt);
    };
    cmd.recognition.onresult = function (evt) {
      var color = evt.results[0][0].transcript.toLowerCase();
      // RECOGNIZED
      if (cmd.colors.includes(color)) {
        cmd.hcolor.style.backgroundColor = color;
      } 
      // NOT RECOGNIZED
      else {
        alert(color + " not recognized - Please try again");
      }
      cmd.stop();
    };
    
    // (C4) GO!
    cmd.hon.disabled = true;
    cmd.hoff.disabled = false;
    cmd.recognition.start();
  },

  // (D) STOP/CANCEL SPEECH RECOGNITION
  stop : function () {
    if (cmd.recognition != null) {
      cmd.recognition.stop();
      cmd.recognition = null;
      cmd.hon.disabled = false;
      cmd.hoff.disabled = true;
    }
  }
};

window.addEventListener("DOMContentLoaded", cmd.init);
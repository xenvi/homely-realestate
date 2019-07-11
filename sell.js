// add commas live -- input //
$(document).ready(function(){
    $("input[data-type='number']").keyup(function(event){
      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40){
          event.preventDefault();
      }
      var $this = $(this);
      var num = $this.val().replace(/,/gi, "");
      var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");
      console.log(num2);

      $this.val(num2);
  });
});
// end live commas //

// text input only numbers //
function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
      textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        }
      });
    });
  }
  setInputFilter(document.getElementById("sf"), function(value) {
    return /^\d*\.?\d*$/.test(value);
  });
  setInputFilter(document.getElementById("inputZip"), function(value) {
    return /^\d*\.?\d*$/.test(value);
  });
// end number only //

// current date -- not working ? //
var fullDate = new Date();console.log(fullDate);
var twoDigitMonth = fullDate.getMonth()+"";if(twoDigitMonth.length==1)	twoDigitMonth="0" +twoDigitMonth;
var twoDigitDate = fullDate.getDate()+"";if(twoDigitDate.length==1)	twoDigitDate="0" +twoDigitDate;
var currentDate = twoDigitDate + "/" + twoDigitMonth + "/" + fullDate.getFullYear();console.log(currentDate);

var input = document.getElementById("available");
input.setAttribute("min",currentDate);
// end current date //

// select only 1 checkbox at a time //
function onlyOne(checkbox) {
  var checkboxes = document.getElementsByName('check')
  checkboxes.forEach((item) => {
      if (item !== checkbox) item.checked = false
  })
}
// end select 1 checkbox //

// **upload image** //

// show file name //
  var input = document.getElementById( 'file-upload' );
  var infoArea = document.getElementById( 'file-selected' );

  input.addEventListener( 'change', showFileName );

  function showFileName( e ) {
    
    var input = e.srcElement;
    var fileName = input.files[0].name;
    
    infoArea.textContent = 'File name: ' + fileName;
  }

  // show file image //
  $("#file-upload").change(function(e) {

    for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
        
        var file = e.originalEvent.srcElement.files[i];
        
        var img = document.getElementById("image");
        var reader = new FileReader();
        reader.onloadend = function() {
        img.src = reader.result;
        /*
        $('.upload-preview-container').append(
          "<div class='upload-preview'><div class='image-preview'><img id='image' /></div><span id='file-selected'></span></div>"
        );
        var container = document.getElementsByClassName("upload-preview-container");
        var upload = document.getElementsByClassName("upload-preview");
        container.innerHTML += '<li>' + upload + '</li>';*/
     }

     reader.readAsDataURL(file);

    }

});

// document.getElementById("image").value != ''

// END upload image //

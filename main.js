
// randomize words in landing page
var words = ['finding', 'giving', 'building'];
var t = setInterval(function() {

  var randomNumber = Math.round( Math.random() * (words.length-1) );

  $('#changing').html( words[ randomNumber ] );
}, 2000);


// slide in login from right
var login = document.getElementById("login");

  function toggleLogin() {
    login.classList.toggle('active');

  };


//prevent btn from closing login
  $('.submit-btn').click(function() {

});
/* 
$('.submit-btn').click(function(e) {
if(e.target !== e.currentTarget) return;
});*/

// replace login form with signup form
$('.to-signup').on('click', function(e){
    e.preventDefault();
    $(".login-container").css("display","none");
    $(".signup-container").css("display","block");
  });

  // replace signup form with login form

$('.to-login').on('click', function(e){
  e.preventDefault();
  $(".signup-container").css("display","none");
  $(".login-container").css("display","block");
});


// forgot pass popup
function popupCenter(url, title, w, h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 

$('.logout-btn').click(function() {
  $('.alert-logout').css('display','block');
  // show the alert
  setTimeout(function() {
      $('.alert-logout').alert('close');
  }, 2000);
});

/*
$(".to-signup").on("click", function(){
    
    if( $(".login-container").is(":visible")) {
        $(".login-container").transition({ x: '-100%', opacity: 0.1 }, function () { $(".login-container").hide(); });
        $(".signup-container").css({ x: '100%' });
        $(".signup-container").show().transition({ x: '0%', opacity: 1.0 });
        return;        
    }
    
    $(".signup-container").transition({ x: '-100%', opacity: 0.1 }, function () { $(".signup-container").hide(); });
    $(".login-container").css({ x: '100%' });
    $(".login-container").show().transition({ x: '0%', opacity: 1.0 });
    
});


$(".to-login").on("click", function(){
    
  if( $(".signup-container").is(":visible")) {
      $(".signup-container").transition({ x: '-100%', opacity: 0.1 }, function () { $(".signup-container").hide(); });
      $(".login-container").css({ x: '100%' });
      $(".login-container").show().transition({ x: '0%', opacity: 1.0 });
      return;        
  }
  
  $(".login-container").transition({ x: '-100%', opacity: 0.1 }, function () { $(".login-container").hide(); });
  $(".signup-container").css({ x: '100%' });
  $(".signup-container").show().transition({ x: '0%', opacity: 1.0 });
  
}); 

$('.to-signup').click(function(e){
  e.preventDefault();
  $(".login-container").addClass('displaynone');
  $(".signup-container").addClass('displayblock');
});
$('.to-login').on('click', function(e){
  e.preventDefault();
  $(".signup-container").addClass('displaynone');
  $(".login-container").addClass('displayblock');
});*/

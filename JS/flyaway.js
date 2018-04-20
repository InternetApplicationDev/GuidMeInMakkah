$('#send').click(function() {
  $(this).toggleClass('clicked');
  $('#send p').text(function(i, text) {
    return text === "Sent!" ? "Send" : "Sent!";
  });
});

$('#clear').click(function() {
  $(this).toggleClass('clicked');
  $('#clear p').text(function(i, text) {
    return text === "Clear!" ? "Clear" : "Clear!";
  });
});

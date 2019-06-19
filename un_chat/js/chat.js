$.ajax({
  type: "GET",
  url: "page-a-appeler.php",
  data: "valeur=" + valeur + "&nom=" + nom,
  success: function(msg) {
    $("#bloc").html(msg);
  }
});

function insertLogin(login) {
  var $message = $("#message");
  $message.val($message.val() + login + "> ").focus();
}

// var reloadTime = 1000; var scrollBar = false;
// function getMessages() {
// // On lance la requête ajax $.getJSON('phpscripts/get-message.php?
// dateConnexion='+$("#dateConnexion").val(), function(data) { /* On vérifie que error vaut 0, ce
// qui signifie qu'il n'y aucune erreur */
// if(data['error'] == '0') {
// // On intialise les variables pour le scroll jusqu'en bas // Pour voir les derniers messages
// var container = $('#text');
// var content = $('#messages_content'); var height = content.height()-500;
// var toBottom;
// // Si avant l'affichage des messages, on se trouve en bas,
// // alors on met toBottom a true afin de rester en bas
// // Il faut tester avant affichage car après, le message a déjà
// été
// // affiché et c'est aps facile de se remettre en bas :D if(container[0].scrollTop == height)
// toBottom = true; else
// toBottom = false;
// $("#annonce").html('<span class="info"><b>'+data['annonce']+'</b></span><br /><br />');
// $("#text").html(data['messages']);
// // On met à jour les variables de scroll // Après avoir affiché les messages content = $('#messages_content');
// height = content.height()-500;
// // Si toBottom vaut true, alors on reste en bas
// if(toBottom == true)
// container[0].scrollTop = content.height();
// // Lors de la première actualisation, on descend
// if(scrollBar != true) { container[0].scrollTop = content.height(); scrollBar = true;
// }
// } else if(data['error'] == 'unlog') {
// /* Si error vaut unlog, alors l'utilisateur connecté n'a pas de compte. Il faut le rediriger vers la page de connexion */
// $("#annonce").html(''); $("#text").html('');

// $(location).attr('href',"chat.php"); }
// }); }

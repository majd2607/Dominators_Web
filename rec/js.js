var btn = document.getElementById('btn');
btn.addEventListener('click', validateForm);
function validateForm(e) {
    e.preventDefault();
    verif();
}



function verif() {

    var nomR=document.forms["reclamation"]["nomR"].value;


 
   ///// prenom////
    var prenomR = document.forms["reclamation"]["prenomR"].value;
    /////mail
    var mail = document.forms["reclamation"]["mail"].value;
    
    var errorN = document.getElementById('errorNR');
    var errorP = document.getElementById('errorPR');
    var errorEmail = document.getElementById('errorMR');



    var letters = /^[A-Za-z]+$/;
   
    
    if (nomR == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";

    }
    
    else {
        errorN.innerHTML = "";

    }
   
    if (prenomR == "") {
        errorP.innerHTML = "Veuillez entrer votre prenom!";

    
    }
    else {
        errorP.innerHTML = "";

    }

    if (mail == "") {
        errorEmail.innerHTML = "Veuillez entrer votre email!";

    }

   // substring( indexof(@)) test sur email 
    else if (!mail.match('@esprit.tn')) {
        errorEmail.innerHTML = "Veuillez entrer un email valid!";
    }
    else {
        errorEmail.innerHTML = "";

    }

    
 
   

}



                                                                         
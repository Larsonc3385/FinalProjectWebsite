//A javascript file to add ease of use for people by highlighting errors.
//Author: Connor Larson
//Version: 1.0
//Last edit: 04/17/2024

function submitForm(){
    //First name
    var fname=document.getElementById("firstname");
    var fnamelabel=document.getElementById("fnameLabel");
   //Last name
    var lname=document.getElementById("lastname");
    var lnamelabel=document.getElementById("lnameLabel");
    //Street
    var street=document.getElementById("street");
    var streetlabel=document.getElementById("streetLabel");
    //City
    var city=document.getElementById("city");
    var citylabel=document.getElementById("cityLabel")
    //State
    var state=document.getElementById("state");
    //Zip
    var zip=document.getElementById("zip");
    //Items
    var items=document.getElementsByClassName("items");
    //CreditCard
    var cc=document.getElementsByName("credit");
    //Validation
    var noItemsSelected=true;
    var noCCSelected=true;
    //Order form
    var orderForm=document.forms["orderForm"];
    //Error sound
    let mySound = new Audio('Produce.wav');

    for(i = 0; i < items.length; i++){
        if(items[i].checked){
            noItemsSelected = false;
        }
    }

    for(i = 0; i <cc.length; i++){
        if(cc[i].checked){
            noCCSelected = false;
        }
    }

    //Highlights empty fields
    if (!fname.value) {
        fnamelabel.style.color = "red";
        mySound.play();
    }
    else if (!lname.value) {
        lnamelabel.style.color = "red";
        mySound.play();
    }
    else if (!street.value) {
        streetlabel.style.color = "red";
        mySound.play();
    }
    else if (!city.value) {
        citylabel.style.color = "red";
        mySound.play();
    }
    else if(state.value.length !=2){
        alert ("State must contain 2 letters");
        mySound.play();
    }
    else if (zip.value.length != 5) {
        alert("The zip must contain 5 letters");
        mySound.play();
    }
    else if (noItemsSelected){
        alert("Please select an item before continuing");
        mySound.play();
    }
    else if(noCCSelected) {
        alert("Please select a Credit Card before continuing");
        mySound.play();
    }
    else{
        if(confirm("Are you ready to place your order?")) {
            orderForm.submit();
        }
    }

    //Reverts text back to original color if field is filled in
    if(fname.value){
        fnamelabel.style.color ="black";
    } 
    if(lname.value){
        lnamelabel.style.color ="black";
    }
    if(street.value){
        streetlabel.style.color ="black";
    }
    if(city.value){
        citylabel.style.color ="black";
    }
    
}
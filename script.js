//selcting uUI elemnts
// Selecting UI elements
const form = $('#form') ;
const username = $('#username');
const email = $('#email');
const password = $('#password');
const password2 = $('#password2');

//Error count
let errors = 0;

//show error
const showError = (displayPlace,message) => {
    displayPlace.html(message);  //display error message
    errors += 1;                 //check the number of errors messages
}

//check for required field
const checkRequired = (inputArr) => {

    //loop to loop through arrays  
    inputArr.forEach(function(input){
        if(input.val() === ''){
            showError(input.next(),`${input.attr('id')} field is required`); //.next jquery uses this elemets to selecet the next element
        }
    })
}

// // check input length
const checkInputLength = (input, min, max) => {

    if(input.val().length <= min){
        showError(input.next(), `${input.attr('id')} must be more than ${min} characters long`);
    } else if( input.val().length >= max){
        showError(input.next(), `${input.attr('id')} must be less than ${max} characters long`);
    }
}

//check if email if valid
const checkEmail = (input) => {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(!regex.test(input.val())){
        showError(input.next(), 'Email is not valid');
    }
}

// check input length
// const checkInputLength = (input, min, max) => {

//     if(input.val.checkInputLength<=min){
//         showError(input.next(), `${input.attr('id')} must be more then ${min} charater long`);
//     } else if (input.val().length >=max){
//         showError(input.next(), `${input.attr('id')} must be less then ${man} charater long`);
//     }
// }

// check if email if valid
// const checkEmail = (input) => {

//     const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

//     if(!regex.test(input.val())){
//         showError(input.mext(), 'Email is not valid');
//     }
// }

//check if password matches
const checkPasswordMatch = (password1,password2) => {

    if(password1.val() != password2.val()){
        showError(password2.next(),'Your passwords do not match');
    }
}




// When form is submitted
form.submit(function (e){
    e.preventDefault();
    $('small').html('');
    errors=0;

    // TODO checl for required input
    checkRequired([username, email, password, password2]);
     
    //check username length
    checkInputLength(username,5,10);

    //check password ;length
    checkInputLength(password,5,15);

    //check for email
    checkEmail(email);
    
    //check if password matches
    checkPasswordMatch(password, password2);

  
    if (errors === 0){
        $('#success').html('All inputs are correct👌.');
    }

    //js to submit to backend

    //submit form to the backend
    //php my admin

  //  e.preventDefault(); //prevent default action on the form
})
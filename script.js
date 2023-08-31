function checkForm(){
    let yes = document.getElementById('yes');
    let no  = document.getElementById('no');
    let inputs = document.getElementsByTagName('input');
    let flag;

    if (yes.checked && no.checked){
        alert(' Please select only one option on our Terms and Condition!');
    }
    else if(no.unchecked && yes.unchecked){
        alert('Please select at least one option on our Terms and Condition! ');
    }
    else if(no.checked){
        alert('Please agree to our Terms and Condition!');
    }
    else if(yes.checked){
        window.location.href = 'shipped.html';
    }
}
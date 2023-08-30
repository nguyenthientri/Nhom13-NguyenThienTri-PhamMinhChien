const form = document.querySelector('#form')
const masv = document.querySelector('#maSV')
const name = document.querySelector('#tenSV')
const email = document.querySelector('#email')
const genders = document.getElementsByName('gioitinh')
var count = 0;
const hobbies = document.getElementsByName('sothich')
const nationality = document.getElementsByName('quoctich')
const note = document.querySelector('#note')
const button = document.querySelector('.dangky');
function showError(input, message) {
    const formControl = input.parentElement;
    formControl.classList.add('error')
    const small = formControl.querySelector('small')
    small.innerText = message;
}
function Validate(){
    if(masv.value === ""){
        showError(masv,"Không được bỏ trống!");
    }else{
        success(masv);
    }
    if(name.value === ""){
        showError(name,"Không được bỏ trống!");
    }else{
        success(name);
    }
    if(email.value === ""){
        showError(email,"Không được bỏ trống!");
    }else if(isEmail(email.value)){
            success(email);
    }else{
        showError(email,"Không đúng định dạng của Email!")
    }
    if(!genders[0].checked && !genders[1].checked){
        showError( genders[0]||genders[1],"Bạn chưa chọn giới tính!")
    }else{
        success(genders[0],"")
    }
    for (let i = 0; i < hobbies.length; i++) {
       if (hobbies[i].checked){
        count ++;
       }
    }
    if(count == 0){
        showError(hobbies[0],"Bạn chưa chọn sở thích!")
    }else{
        success(hobbies[0],"")
    }

    function success(input,message){
        const formControl = input.parentElement;
        formControl.classList.remove('error')
        const small = formControl.querySelector('small')
        small.innerText = message;
    }
    if(nationality[0].value === ""){
        showError(nationality[0],"Bạn phải chọn quốc tịch!")
    }else{
        success(nationality[0],"")
    }
    if(note.value.length >= 200){
        showError(note,"Ghi chú không được quá 200 ký tự!")
    }else{
        success(note,"")
    }
}
function isEmail(data){
        var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        return regex.test(data)
}
// form.addEventListener('submit',function(event){
//     event.preventDefault();
//     Validate();

// })
button.addEventListener('click',function(event){
    // event.preventDefault();
    Validate();
})



const headerMenu = document.getElementsByClassName('auth__menu--link');
const passwordVisibility = document.getElementById('password-visibility');
const passFields =  document.getElementsByClassName('password');
console.log(passFields);
let headerMenuArr = [...headerMenu];
headerMenuArr.forEach(e=>{
  e.addEventListener('click',()=>{
    if (e.classList.contains('active')){
      e.classList.remove('active');
    }else{
      e.classList.add('active');
    }
  })
})

if (passwordVisibility) {
  passwordVisibility.addEventListener('change', () => {
    if (passwordVisibility.checked) {
      [...passFields].forEach(e => {
        e.type = 'text';
      })
    }
    else {
      [...passFields].forEach(e => {
        e.type = 'password';
      })
    }
  })
}
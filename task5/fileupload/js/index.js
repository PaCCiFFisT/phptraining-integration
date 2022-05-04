const delBtn = document.getElementById('delete');
const uploadFormBtn = document.getElementById('upload__form--submit');
const file = document.getElementById('file');

//upload files with ajax from file input
if (uploadFormBtn) {
  uploadFormBtn.addEventListener('click', (e) => {
    e.preventDefault();
    const formData = new FormData();
    //forming multiple files array
    for (let i = 0; i < file.files.length; i++) {
      formData.append('file[]', file.files[i]);
    }
//sending files to server
    const xhr = new XMLHttpRequest();
    xhr.open('POST', './handlers/upload.php');

    xhr.onreadystatechange = ()=>{
      console.log(xhr.readyState);
      if (xhr.readyState === 4){
        const response = document.querySelector('.response');
        response.innerHTML = xhr.responseText.slice(1,-1);
     // alert(xhr.responseText);
      }
    }
    console.log(file.files.length);
    if (file.files.length<1){
      alert('Please choose files for upload');
    }else{
      xhr.send(formData);
    }
    file.value = '';
  });
}

//send request for delete image
function sendDelReq(data) {
  let ajaxReq = new XMLHttpRequest();
  // let data =  JSON.stringify(dataset);
  ajaxReq.open("POST", './handlers/deleteImage.php', true);

//Send the proper header information along with the request
  ajaxReq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajaxReq.send(JSON.stringify(data));
}


if (delBtn) {
  delBtn.addEventListener('click', () => {
    let arrForDel = [];
    let checkbox = document.getElementsByClassName('gallery__checkbox');
    Array.from(checkbox).forEach(e => {
      if (e.checked) {
        //get paragraph text
        arrForDel.push(e.parentNode.firstElementChild.innerHTML);
        //delete element from client page
        e.parentNode.parentNode.remove();
      }
    })
    if (arrForDel.length > 0) {
      sendDelReq(arrForDel);
    }
    else {
      alert('Please choose images for deleting');
    }
  })
}

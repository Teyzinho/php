'use strict'

let photo = document.getElementById('imgPhoto');
let file = document.getElementById('fileImg');

photo.addEventListener('click',() => {
    file.click();
});

file.addEventListener('change', (event) =>{

    if(file.files.length <=0){
        return;
    }

    console.log(file.files);
    
    let reader = new FileReader();

    reader.onload = () => {
        photo.src = reader.result; 
    }

    reader.readAsDataURL(file.files[0]);
})
let listOnBodyNe = document.getElementsByTagName('ol');
listOnBodyNe[0].addEventListener("click",tampilkeun);

function tampilkeun(event){
    alert("tampilkan list ini : "+event.target.innerHTML);
}
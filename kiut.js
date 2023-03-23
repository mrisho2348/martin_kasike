function search_content(){
    let input=document.getElementById('searchbar').value 
    input=input.tolowercase();
    let x =document.getElementsByClassName('content');
    for(i=0;i< x.length;i++){
        if(!x[i].innerHTML.toLowerCase().include(input)){
          x[i].style.display="none";  
        }

        else{
            x[i].style.display="list-item";
        }
    }
}
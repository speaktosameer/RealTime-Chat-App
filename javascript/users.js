const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
userList = document.querySelector(".users .users-lists");

searchBtn.onclick = ()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value="";
}

searchBar.onkeyup =()=>{
    let searchTerm = searchBar.value;
    if(searchTerm != ""){
        searchBar.classList.add("active");
    }else{
        searchBar.classList.remove("active");
    }
    //lets start ajax
    let xhr=new XMLHttpRequest(); //creating XML object
    xhr.open("POST","php/search.php",true);
    xhr.onload =()=>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                       // console.log(data);
                      userList.innerHTML=data;
                }
            }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

setInterval(()=>{
    //lets start ajax
    let xhr=new XMLHttpRequest(); //creating XML object
    xhr.open("GET","php/users.php",true);
    xhr.onload =()=>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                    if(!searchBar.classList.contains("active")){ // if active active not contains in search bar then add this
                    userList.innerHTML=data;
                    }
                    
                }
            }
    }

xhr.send();

}, 500);   //this function will run frequently aftre 500ms
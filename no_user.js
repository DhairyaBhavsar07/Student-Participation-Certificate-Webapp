// let btn = document.getElementById('btn');
// btn.addEventListener('click',btnhandler);

// function btnhandler()
// {
//     const xhr = new XMLHttpRequest();

//     xhr.open('GET','login.php?q=',true);

//     xhr.onload = function(){
//         document.getElementById('no').innerHTML = this.response;
//     }

//     xhr.send();
//     // window.location.href
// }

document.body.addEventListener('click',btnHandler);

function btnHandler()
{
    document.getElementById("popupForm").style.display = "block";
}

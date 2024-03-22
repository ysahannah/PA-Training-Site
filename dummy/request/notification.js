let notification = document.querySelector('notification');
let XED = document.getElementById('XED');

function createToast(type, icon, title, text){
    let newToast = document.createElement('div');
    newToast.innerHTML = `
        <div class="toast success ${type}"> 
            <i class="${icon}"></i>
            <div class="content">
                <div class="title">${title}</div>
                <span>${text}</span>
            </div>
            <i class="fa-solid fa-xmark"
            onclick="(this.parentElement).remove()"
            ></i>
        </div>`;
    notification.appendChild(newToast);
}
login.onclick = function( ){
    let type = 'XED';
    let icon = 'fa-solid fa-circle-check';
    let title = 'Success';
    let text = 'This is success';
    createToast(type, icon, title,text);

}
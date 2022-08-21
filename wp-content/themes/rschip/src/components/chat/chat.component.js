const btnChat = document.querySelector('.btnChat');
const chatBtnClose = document.querySelector('.chatBtnClose');

(btnChat && chatBtnClose) && [btnChat, chatBtnClose].forEach(element=>{
    element.addEventListener("click", () => {
        document.querySelector('.chatContainer').classList.toggle('active');
    });
})
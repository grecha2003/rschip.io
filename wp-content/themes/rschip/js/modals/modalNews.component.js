
let newsItems = document.querySelectorAll('.newsItem');
let modalNews = document.querySelector('.modalNews');

newsItems.forEach(item=>{
    item.addEventListener('click', (e)=>{
        let thisItem = e.target.closest('.newsItem');
        let thisItemModalContent = thisItem.querySelector('.modalContent');
        modalNews.removeChild(modalNews.querySelector('.modalContent'));
        modalNews.appendChild(thisItemModalContent);
    });
});

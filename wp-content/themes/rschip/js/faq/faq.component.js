const faqItemDetails = document.querySelectorAll('.faqItemDetails');

faqItemDetails && faqItemDetails.forEach((itemDetails)=>{
    itemDetails.addEventListener('click',(e)=>{
        if(e.target.parentElement.classList.contains('faqItemDetails')){
            e.target.parentElement.classList.toggle('active');
        } else if(!e.target.parentElement.classList.contains('faqItemDetails')) {
            e.target.parentElement.closest('.faqItemDetails').classList.toggle('active');
        } else {
            e.target.classList.contains('faqItemDetails') &&  e.target.classList.toggle('active');
        }
    });
})

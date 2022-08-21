
document.querySelectorAll(".quantityBox").forEach(function(element){
    element.querySelector(".bt_minus").addEventListener("click", function(e){
        e.preventDefault();
        let input = this.closest('.quantityBox').querySelector('.quantityInput');
        let count = parseInt(input.value) - 1;
        count = count < 1 ? 1 : count;
        input.value = count;
    });
    element.querySelector(".bt_plus").addEventListener("click", function(e){
        e.preventDefault();
        let input = this.closest('.quantityBox').querySelector('.quantityInput');
        let count = parseInt(input.value) + 1;
        count = count > parseInt(input.max) ? parseInt(input.max) : count;
        input.value = count;
    })
})

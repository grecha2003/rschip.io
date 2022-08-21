function renderGainProductItem() {
    const productsItem = document.querySelectorAll('.productsItemCart');
    if (productsItem) {

        productsItem.forEach(item => {

            let hp = localStorage.getItem(`HP_default`);
            let nm = localStorage.getItem(`NM_default`);

            let productsItemHP = item.querySelector('.hp');
            let productsItemNM = item.querySelector('.nm');

            if (hp) {
                const product = item.dataset.productgain === 'gtr' ? gtr : gt;

                let percentHp = getPowerGain(hp, product.hp.percent, product.hp.maxIncrease);
                let percentNm = getPowerGain(nm, product.nm.percent, product.nm.maxIncrease);

                productsItemHP && (productsItemHP.textContent = `${percentHp} HP`);
                productsItemNM && (productsItemNM.textContent = `${percentNm} NM`);

            }
        });
    }
}

function clearGainProductItem() {
    const productsItem = document.querySelectorAll('.productsItemCart');
    if (productsItem) {

        productsItem.forEach(item => {

            let productsItemHP = item.querySelector('.hp');
            let productsItemNM = item.querySelector('.nm');

            productsItemHP && (productsItemHP.textContent = `0%`);
            productsItemNM && (productsItemNM.textContent = `0%`);
        });
    }
}
renderGainProductItem();
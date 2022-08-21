// FIXME: переписать нормально, а не хардкод

function getResponse(url, selectBox, selectName) {
  api(url).then((responseJson) => {
    let arrayResults = responseJson.results;
    renderSelectBox(selectBox, selectName, arrayResults);
  });
}



function renderSelectBox(currenSelect, selectName, options) {

  let selectValue = selectName.slice(0, selectName.indexOf('_'));
  // render name car for productCart
  
  let productName = currenSelect.closest('.cartProduct') && currenSelect.closest('.cartProduct').querySelector('.productName');
  let carName = currenSelect.closest('.cartProduct') && currenSelect.closest('.cartProduct').querySelector('.carName');
  getCarName = localStorage.getItem(selectName) ? localStorage.getItem(selectName) : false;
  let selectBox = currenSelect.closest('.selectBox');
  if( localStorage.getItem(selectName) ){
    currenSelect.classList.add('Selected');
  } else {
    currenSelect.classList.remove('Selected');
  }
  if(selectBox.querySelector('.Modification').classList.contains('Selected')){
    selectBox.querySelector('.selectBoxAction') && selectBox.querySelector('.selectBoxAction').classList.add('Selected')
    selectBox.classList.add('Selected');
  } else {
    selectBox.querySelector('.selectBoxAction') && selectBox.querySelector('.selectBoxAction').classList.remove('Selected')
    selectBox.classList.remove('Selected');
  }
  if (getCarName && carName && carName.textContent.indexOf(getCarName) == -1) {
    carName.textContent += `${getCarName} `;
    
    localStorage.setItem('car-name_'+productName.textContent.trim(), carName.textContent);
  }

  function renderBox(name, value, options) {
    let selectBox = currenSelect.querySelector('.select-box');

    let selectBoxCurrent = document.createElement('div');
    selectBoxCurrent.classList.add('select-box__current');

    

    // render inputs & input default
    let inputValueDefault = localStorage.getItem(name) ? localStorage.getItem(name) : value;

    let isSelectBoxCurrentChild = currenSelect.querySelector('.select-box__current');
    isSelectBoxCurrentChild && selectBox.removeChild(isSelectBoxCurrentChild);

    
    selectBoxCurrent.setAttribute('tabindex', 1);
   
    let thisName =  document.getElementById(name) ? name+1 : name;
    selectBoxCurrent.innerHTML = `<div class="select-box__value">
                                    <input class="select-box__input" 
                                    type="radio" 
                                    id="${thisName}" 
                                    value="${inputValueDefault}" 
                                    name="${thisName}" 
                                    checked/>
                                    <p class="select-box__input-text">${inputValueDefault}</p>
                                  </div>`;

    options && options.forEach(option => {
      let selectBoxValue = document.createElement('div');
      selectBoxValue.classList.add('select-box__value');
      //
      let selectBoxInput = document.createElement('input');
      selectBoxInput.classList.add('select-box__input');
      selectBoxInput.setAttribute('type', 'radio');
      selectBoxInput.setAttribute('id', `${thisName}_id_${option.id}`);
      selectBoxInput.setAttribute('name', `${thisName}`);
      selectBoxInput.setAttribute('value', `${option.title}`);
      selectBoxInput.setAttribute('data-id', `${option.id}`);
      selectBoxInput.setAttribute('data-selectname', `${value}`);
      selectBoxInput.setAttribute('data-hp', `${option.hp}`);
      selectBoxInput.setAttribute('data-nm', `${option.nm}`);
      selectBoxInput.addEventListener('click', e => {
        let dataId = e.target.dataset.id,
          dataSelectName = e.target.dataset.selectname,
          dataProductName = e.target.closest('.selectBox').dataset.productname ? e.target.closest('.selectBox').dataset.productname : 'default',
          dataHp = e.target.dataset.hp,
          dataNm = e.target.dataset.nm,
          thisSelectBox = e.target.closest('.selectBox'),
          thisCartProduct = e.target.closest('.cartProduct'),
          modelsBox = thisSelectBox.querySelector('.Models'),
          modificationBox = thisSelectBox.querySelector('.Modification'),
          carName = thisCartProduct && thisCartProduct.querySelector('.carName'),
          selectBoxAction = thisSelectBox.querySelector('.selectBoxAction');

        switch (dataSelectName) {
          case 'Brand':
            
            state.products[dataProductName].brand.name = e.target.value;
            state.products[dataProductName].brand.id = dataId;

            state.products[dataProductName].model.name = '';
            state.products[dataProductName].model.id = '';

            state.products[dataProductName].modifiacation.name = '';
            state.products[dataProductName].modifiacation.id = '';

            setStorage();

            renderSelectBox(modificationBox, `Modification_${dataProductName}`, []);
            getResponse(`${modelsApiUrl}${dataId}`, modelsBox, `Model_${dataProductName}`);


            //добавляем название бренда если это корзина
            carName && (carName.textContent = localStorage.getItem(`Brand_${dataProductName}`));

            // добавляем иконку выбрано и класс
            thisSelectBox.querySelector('.Brands .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';
            thisSelectBox.querySelector('.Brands').classList.add('Selected');
            
            break;

          case 'Model':
            
            state.products[dataProductName].model.name = e.target.value;
            state.products[dataProductName].model.id = dataId;

            state.products[dataProductName].modifiacation.name = '';
            state.products[dataProductName].modifiacation.id = '';
            setStorage();

            getResponse(`${modificationsApiUrl}${dataId}`, modificationBox, `Modification_${dataProductName}`);
            //добавляем название модели  если это корзина
            carName && (carName.textContent = `${localStorage.getItem(`Brand_${dataProductName}`)} ${localStorage.getItem(`Model_${dataProductName}`)}`);
            
            // добавляем иконку выбрано и класс
            thisSelectBox.querySelector('.Models .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';
            thisSelectBox.querySelector('.Models').classList.add('Selected');
            break;

          case 'Modification':
            
            state.products[dataProductName].modifiacation.name = e.target.value;
            state.products[dataProductName].hp = dataHp;
            state.products[dataProductName].nm = dataNm;
            setStorage();

            renderPerformance();

            carName && (carName.textContent = `${localStorage.getItem(`Brand_${dataProductName}`)} ${localStorage.getItem(`Model_${dataProductName}`)} ${localStorage.getItem(`Modification_${dataProductName}`)}`);
            carName && (localStorage.setItem('car-name_'+productName.textContent.trim(), carName.textContent));

            thisSelectBox.querySelector('.Modification .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';
            selectBoxAction && thisSelectBox.closest('.selectBox').querySelector('.selectBoxAction').classList.add('Selected')
            thisSelectBox.querySelector('.Modification').classList.add('Selected');
            thisSelectBox.closest('.selectBox').classList.add('Selected');
            break;

          default:
            break;
        }

      });
      selectBoxValue.appendChild(selectBoxInput);
      //
      let selectBoxInputText = document.createElement('p');
      selectBoxInputText.classList.add('select-box__input-text');
      selectBoxInputText.textContent = option.title;
      selectBoxValue.appendChild(selectBoxInputText);
      //
      selectBoxCurrent.appendChild(selectBoxValue);
    });

    // render icon
    let isSelectBoxIcon = currenSelect.querySelector('.select-box__icon');
    isSelectBoxIcon && selectBox.removeChild(isSelectBoxIcon);

    let selectBoxIcon = document.createElement('div');
    selectBoxIcon.classList.add('select-box__icon');
    selectBoxIcon.innerHTML = localStorage.getItem(name) ? '<i class="iconSuccess"></i>' : '<i class="iconArrowSelect"></i>';

    selectBoxCurrent.appendChild(selectBoxIcon);

    
    selectBox.appendChild(selectBoxCurrent);

    //render lists
    let selectBoxChildList = currenSelect.querySelector('.select-box__list');
    selectBoxChildList && selectBox.removeChild(selectBoxChildList);

    let selectListBox = document.createElement('ul');
    selectListBox.classList.add('select-box__list');

    if (options && options.length !== 0) {
      options.forEach((option) => {
        let li = document.createElement('li');
        li.innerHTML = `<label class="select-box__option" for="${thisName}_id_${option.id}" aria-hidden>${option.title}</label>`;
        selectListBox.appendChild(li);
      });
    } else {
      let empty = document.createElement('div');
      empty.classList.add('select-box__empty');
      empty.textContent = 'no data';

      selectListBox.appendChild(empty);
    }

    selectBox.appendChild(selectListBox);
  }
  return renderBox(selectName, selectValue, options);
}

let selectBoxes = document.querySelectorAll('.selectBox');

selectBoxes.forEach(selectBox => {
  //get product name for select name, if product name empty then return 'Name_default'
  let dataProductName = selectBox.dataset.productname ? selectBox.dataset.productname : 'default';
  let brandsBox = selectBox.querySelector('.Brands');
  let modelsBox = selectBox.querySelector('.Models');
  let modificationBox = selectBox.querySelector('.Modification');

  //init selects
  renderSelectBox(brandsBox, `Brand_${dataProductName}`, brandsArrayDeafult);
  renderSelectBox(modelsBox, `Model_${dataProductName}`, []);
  renderSelectBox(modificationBox, `Modification_${dataProductName}`, []);

  //init selects brands
  getResponse(brandsApiUrl, brandsBox, `Brand_${dataProductName}`);

  let isBrandId = localStorage.getItem(`Brand_${dataProductName}_id`);
  isBrandId && getResponse(`${modelsApiUrl}${isBrandId}`, modelsBox, `Model_${dataProductName}`);
  
  let idModelId = localStorage.getItem(`Model_${dataProductName}_id`);
  idModelId && getResponse(`${modificationsApiUrl}${idModelId}`, modificationBox, `Modification_${dataProductName}`);

});


//закреп 
let banner = document.querySelector('.banner');

if(banner && banner.length !==0){
  document.addEventListener('scroll', function(e){
    let y =  window.scrollY;
    let clientHeight = banner.clientHeight;
    let getBoundingClientRect = banner.getBoundingClientRect();
    let bannerPositionBottom = getBoundingClientRect.bottom;
    // console.log(getBoundingClientRect);
    // console.log(y);
    if( y >= bannerPositionBottom){
      banner.querySelector('.bannerSelect').classList.add('fixed')
    } else {
      banner.querySelector('.bannerSelect').classList.remove('fixed')
    }
  });
}

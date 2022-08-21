// const brands = ['Acura','Alfa Romeo','Alpina','Aston Martin','Audi','BAIC']
// const APP_DOMAIN = 'https://montetuning.app/api/v0/brands'


const APP_DOMAIN = 'https://montetuning.app';

const api = async (url) => {
  try {

    const answer = await fetch(url);

    if (!answer.ok) {
      throw new Error(answer.status.toString());
    }

    const responseJson = await answer.json();

    return responseJson;
  } catch (e) {
    console.warn('Не удалось получить brands', e);
    return e;
  }
}

const brandsApiUrl = `${APP_DOMAIN}/api/v0/brands/`;
const modelsApiUrl = `${APP_DOMAIN}/api/v0/models/?brand=`;
const modificationsApiUrl = `${APP_DOMAIN}/api/v0/modifications/?model=`;


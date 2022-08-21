module.exports = {
    plugins: {
      'postcss-px-to-viewport': {
        unitToConvert: 'em',
        unitPrecision: 5, // точки после запятой
        propList: ['*', '!font-size','!line-height','!margin',],//  Example: ['*', '!letter-spacing'] параметры например не перводить межбуквенный интервал или position
        viewportUnit: 'vw',
        fontViewportUnit: 'vw',
        selectorBlackList: ['icon'], // 'body'блокирует список тегов или css классов 
        minPixelValue: 1,
        mediaQuery: true, // если false то не будет конверить в медиа запросах
        exclude: [],
        landscape: false,
        landscapeUnit: 'vmin',
        landscapeWidth: 500,
        landscapeBreakPoints: [320,768]
      }
    }
  }
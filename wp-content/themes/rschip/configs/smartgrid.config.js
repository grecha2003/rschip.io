delete require.cache[require.resolve('./breakPoints.json')];
const options = require('./breakPoints.json');
module.exports = {
    outputStyle: 'sass', /* less || scss || sass || styl */
    columns: 9, /* number of grid columns */
    offset: '20px', /* gutter width px || % || rem 20*/
    mobileFirst: true, /* mobileFirst ? 'min-width' : 'max-width' */
    container: {
        maxWidth: '1135px', /* max-width оn very large screen */
        fields: '20px' /* side fields 10*/
    },
    breakPoints : options.breakPoints,
    // breakPoints: {
    //     xs: {
    //         width: '576px'
    //     },
    //     sm: {
    //         width: '768px',
    //         fields: '15px' /* set fields only if you want to change container.fields */
    //     },
    //     md: {
    //         width: '992px'
    //     },
    //     // mmd: {
    //     //     width: '1024px'
    //     // },
    //     // lg: {
    //     //     width: '1500px', /* -> @media (max-width: 1100px) */
    //     // },
    //     // lgmax:{
    //     //     width: '1920px',
    //     // }
    //     /* 
    //     We can create any quantity of break points.

    //     some_name: {
    //         width: 'Npx',
    //         fields: 'N(px|%|rem)',
    //         offset: 'N(px|%|rem)'
    //     }
    //     */
    // }
    //detailedCalc: true
};
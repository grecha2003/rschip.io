const gulp = require('gulp');
const fs = require('fs');
const del = require('del');
const path = require('../path.json');
const argv = require('yargs').argv;
const formatDefault = ['pug', 'sass'];
const isCreateComponent = (argv.c === undefined) ? false : String(argv.c);
const isRemoveComponent = (argv.r === undefined) ? false : String(argv.r);

gulp.task('component', function () {
    function _writeFile(componentName, format) {
        let fileContent;
        if(format !== 'pug'){
            fileContent = `/*${componentName}*/`
        } else {
            fileContent = `//-${componentName}`
        }
        fs.writeFile(path.src + `components/${componentName}/${componentName}.component.${format}`, fileContent, (err) => {
            if (err) throw err;
            console.log(`The file ${componentName}.component.${format} was succesfully saved!`);
        });
    }

    async function _create() {
        if (isCreateComponent && isCreateComponent !== "true") {
            let componentName = isCreateComponent;
            fs.mkdirSync(path.src + 'components/' + componentName);

            for (let i = 0; i < formatDefault.length; i++) {
                _writeFile(componentName, formatDefault[i]);
            }

            if (argv.js) {
                _writeFile(componentName, 'js');
            }
        } else if (isRemoveComponent && isRemoveComponent !== "true") {
            let componentName = isRemoveComponent;
            del(path.src + `components/${componentName}`);
        }
        else {
            throw console.error('<name> dosn`t exist use yarn cmp --flag <NAME>');
        }
    }
    return _create();
});

// ex. gulp component --create || gulp component --create <name> --js (if you need js use flag --js) 
// ex. gulp component --remove <name>
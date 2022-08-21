module.exports = {
        mozjpeg:{
            quality: 75, // Compression quality, in range 0 (worst) to 100 (perfect).
            progressive: true, // creates baseline JPEG file. Default: true 
            targa: false, // Input file is Targa format (usually not needed). // Default: false 
            revert: false, // Revert to standard defaults instead of mozjpeg defaults. // Default: false 
            fastCrush: false, // Disable progressive scan optimization. // Default: false 
            dcScanOpt: 1, // Set DC scan optimization mode.  0 One scan for all components 1 One scan per component 2 Optimize between one scan for all components and one scan for 1st component plus one scan for remaining components // Default: 1
            trellis: true, // https://en.wikipedia.org/wiki/Trellis_quantization // Default: true 
            trellisDC: true, // Trellis optimization of DC coefficients. // Default: true 
            tune: 'hvs-psnr', // Set Trellis optimization method. Available methods: psnr, hvs-psnr, ssim, ms-ssim // Default: 'hvs-psnr' 
            overshoot: true, // Black-on-white deringing via overshoot.  // Default: true 
            arithmetic: false, // https://en.wikipedia.org/wiki/Arithmetic_coding // Default: false 
            dct: 'int', // Set DCT method: int Use integer DCT fast Use fast integer DCT (less accurate)  float Use floating-point DCT Default: 'int' 
            quantBaseline: false, // Use 8-bit quantization table entries for baseline JPEG compatibility.  // Default: false 
            //  quantTable: 0, // Use predefined quantization table.  0 JPEG Annex K 1 Flat 2 Custom, tuned for MS-SSIM 3 ImageMagick table by N. Robidoux 4 Custom, tuned for PSNR-HVS  5 Table from paper by Klein, Silverstein and Carney  
            // smooth: 0, // Set the strength of smooth dithered input. (1...100)  
            // maxMemory:0, // Set the maximum memory to use in kilobytes.  
            // sample: ['HxV'], // Set component sampling factors. Each item should be in the format HxV, for example 2x1.
            // buffer:false // Buffer to optimize.
        },
        gifsicle: {
            interlaced: false, // Interlace gif for progressive rendering. // Default: false 
            optimizationLevel: 1, // Select an optimization level between 1 and 3 // Default: 1
            colors: 2, // Reduce the number of distinct colors in each output GIF to num or less. Num must be between 2 and 256.
            buffer: true // Buffer to optimize.
        },
        // https://github.com/svg/svgo
        optipng: {
            optimizationLevel: 7, // Select an optimization level between 0 and 7 // Default: 3
            bitDepthReduction: true, // Apply bit depth reduction. // Default: true
            colorTypeReduction: true, // Apply color type reduction. // Default: true
            paletteReduction: true, // Apply palette reduction. // Default: true
            interlaced: false, // https://en.wikipedia.org/wiki/Adam7_algorithm // Default: false 
            errorRecovery: true, // Apply palette reduction. // Default: true
            buffer: true // Buffer to optimize.
        },
        // https://github.com/svg/svgo
        svgo: {
            plugins: [
                {cleanupAttrs:true}, // cleanup attributes from newlines, trailing, and repeating spaces // enabled
                {mergeStyles:true}, // merge multiple style elements into one // enabled
                {inlineStyles:true}, // move and merge styles from <style> elements to element style attributes // enabled
                {removeDoctype: true}, // remove doctype declaration // // enabled
                {removeXMLProcInst:true}, // remove XML processing instructions // enabled
                {removeComments:true}, // remove comments // enabled
                {removeMetadata:true}, // remove <metadata> // enabled
                {removeTitle:true}, // remove <title> // enabled
                {removeDesc:true}, // remove <desc> // enabled
                {removeUselessDefs:true}, // remove elements of <defs> without id // enabled
                {removeXMLNS:false}, // removes the xmlns attribute (for inline SVG) // disabled
                {removeEditorsNSData:true}, // emove editors namespaces, elements, and attributes // enabled
                {removeEmptyAttrs:true}, // remove empty attributes // enabled
                {removeHiddenElems:true}, // remove hidden elements // enabled
                {removeEmptyText:true}, // remove empty Text elements // enabled
                {removeEmptyContainers:true}, // remove empty Container elements // enabled
                {removeViewBox:true}, // emove viewBox attribute when possible // enabled
                {cleanupEnableBackground:true}, // remove or cleanup enable-background attribute when possible // enabled
                {minifyStyles:true}, // minify <style> elements content with CSSO // enabled
                {convertStyleToAttrs:true}, // convert styles into attributes // enabled
                {convertColors:true}, // convert colors (from rgb() to #rrggbb, from #rrggbb to #rgb) // enabled
                {convertPathData:true}, // convert Path data to relative or absolute (whichever is shorter), convert one segment to another, trim useless delimiters, smart rounding, and much more // enabled
                {convertTransform:true}, // collapse multiple transforms into one, convert matrices to the short aliases, and much more // enabled
                {removeUnknownsAndDefaults:true}, // remove unknown elements content and attributes, remove attributes with default values // enabled
                {removeNonInheritableGroupAttrs:true}, // remove non-inheritable group's "presentation" attributes // enabled
                {removeUselessStrokeAndFill:true}, // remove useless stroke and fill attributes // enabled
                {removeUnusedNS:true}, // remove unused namespaces declaration // enabled
                {prefixIds:false}, // remove unused namespaces declaration // disabled	
                {cleanupIDs:true}, // remove unused and minify used IDs // enabled
                {cleanupNumericValues:true}, // round numeric values to the fixed precision, remove default px units // enabled
                {cleanupListOfValues:false}, // round numeric values in attributes that take a list of numbers (like viewBox or enable-background) // disabled
                {moveElemsAttrsToGroup:true}, // move elements' attributes to their enclosing group // enabled
                {moveGroupAttrsToElems:true}, // move some group attributes to the contained elements // enabled
                {collapseGroups:true}, // collapse useless groups // enabled
                {removeRasterImages:false}, // remove raster images // disabled
                {mergePaths:true}, // merge multiple Paths into one // enabled
                {convertShapeToPath:true}, // convert some basic shapes to <path> // enabled
                {convertEllipseToCircle:true}, // convert non-eccentric <ellipse> to <circle> // enabled
                {sortAttrs:false}, // sort element attributes for epic readability // disabled
                {sortDefsChildren:true}, // sort children of <defs> in order to improve compression // enabled
                {removeDimensions:false}, // remove width/height and add viewBox if it's missing (opposite to removeViewBox, disable it first) // disabled
                {removeAttrs:false}, // remove attributes by pattern // disabled
                {removeAttributesBySelector:false}, // removes attributes of elements that match a CSS selector // disabled
                {removeElementsByAttr:false}, // remove arbitrary elements by ID or className // disabled
                {addClassesToSVGElement:false}, // add classnames to an outer <svg> element // disabled
                {addAttributesToSVGElement:false}, // adds attributes to an outer <svg> element // disabled
                {removeOffCanvasPaths:false}, // removes elements that are drawn outside of the viewbox // disabled
                {removeStyleElement:false}, // remove <style> elements // disabled
                {removeScriptElement:false}, // remove <script> elements // disabled
                {reusePaths:false} // Find duplicated elements and replace them with links // disabled
            ]
        }
}
const glob = require('glob');

// Keenthemes' plugins
var componentJs = glob.sync(`resources/_Keenthemes/src/js/components/*.js`) || [];
var coreLayoutJs = glob.sync(`resources/_Keenthemes/src/js/layout/*.js`) || [];

module.exports = [
    ...componentJs,
    ...coreLayoutJs,
    'resources/mix/common/button-ajax.js'
];

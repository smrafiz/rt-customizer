/**
 * Gulp Configuration File
 *
 * @package RT_Team
 */

module.exports = {
    projectName    : 'rt-customizer',
    projectURL     : 'http://customizer.local/',
    productURL     : './',
    productVersion : '1.0.0',
    browserAutoOpen: true,
    injectChanges  : true,

    // Style options.
    styleSRC        : './src/scss/customizer.scss',
    styleDestination: './assets/css',
    outputStyle     : 'expanded',
    errLogToConsole : true,
    precision       : 10,

    // Images options.
    imgSRC: './src/images/**/*.{png,jpg,gif}',
    imgDST: './assets/images/',

    // Build options
    build       : './dist/',
    buildInclude: [
        // include common file types
        '**/*.php',
        '**/*.html',
        '**/*.css',
        '**/*.js',
        '**/*.svg',
        '**/*.png',
        '**/*.jpg',
        '**/*.gif',
        '**/*.ttf',
        '**/*.otf',
        '**/*.eot',
        '**/*.woff',
        '**/*.woff2',
        '**/*.pot',
        '**/*/LICENSE',
        'README.txt',
        'wpml-config.xml',
        '**/*/*.mo',
        '**/*/*.po',

        // exclude files and folders
        '!**/.*',
        '!node_modules/**/*',
        '!need-to-check/**/*',
        '!dist/**/*',
        '!LICENSE.txt',
        '!tlp.config.js',
        '!gulpfile.js',
        '!src/images/**/*',
        '!src/scss/**/*',
        '!src/js/**/*',
        '!src/**/*',
        '!webpack.config.js',
        '!phpcs.xml.dist',
        '!composer.json',
        '!composer.lock',
        '!package.lock',
        '!package-lock.json',
        '!webpack.mix.js'
    ],
    buildFinalZip: './dist/',

    // Watch files paths.
    watchStyles  : './src/scss/**/*.scss',
    watchPhp     : './**/*.php',

    // Translation options.
    textDomain            : 'rt-customizer',
    translationFile       : 'rt-customizer.pot',
    translationDestination: './languages',
    packageName           : 'RT Customizer',
    bugReport             : 'https://radiustheme.com/',
    lastTranslator        : 'RadiusTheme',
    team                  : 'RadiusTheme',

    // Browsers for autoprefixing.
    BROWSERS_LIST: [
        'last 4 version',
        '> 4%',
        'ie >= 11',
        'last 4 Android versions',
        'last 4 ChromeAndroid versions',
        'last 4 Chrome versions',
        'last 4 Firefox versions',
        'last 4 Safari versions',
        'last 4 iOS versions',
        'last 4 Edge versions',
        'last 4 Opera versions'
    ]
};

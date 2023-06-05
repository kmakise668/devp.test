// webpack.config.js
var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('./local/build/')
    .setPublicPath('/local/build/')
    .cleanupOutputBeforeBuild()
    // .enableSingleRuntimeChunk()  // если включить, не работает js почему-то
    .addEntry('main', './local/assets/scripts/main.js')
    .addStyleEntry('global', './local/assets/styles/global.scss')
    .enableVueLoader()
    .enableSassLoader(() => {}, { resolveUrlLoader: false })
    .enablePostCssLoader()
    .autoProvideVariables({
        BX: 'BX',
        'window.BX': 'BX'
    })
    .enableSourceMaps(!Encore.isProduction())
    .configureFilenames({
        js: '[name].[chunkhash:8].js',
        css: '[name].[contenthash:8].css'
    })
    .enableVersioning()
    .copyFiles({
        from: './local/assets/fonts',
        to: 'fonts/[path][name].[ext]'
    });

var config = Encore.getWebpackConfig();
config.externals = {
    BX: 'BX',
    mode: 'production'
};

module.exports = config;
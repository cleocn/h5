var HtmlWebpackPlugin = require('html-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const webpack = require('webpack');
const uglify = require('uglifyjs-webpack-plugin');

module.exports = {
  entry: {
    'eqShowPreview': './view/eqShow-preview-2.1.5.3.js',
    'eqShowSite': './assets/eqShow-site-2.1.5.3.js',
    'eqShow': './view/eqShow-2.0.5.0.js',
  },
  output: {
    path: __dirname + '/dist',
    filename: '[name].[hash].js',
    publicPath: '{$Think.config.site_url_cdn_static}/dist'
  },
  plugins: [new CleanWebpackPlugin(__dirname + '/dist'),
    // new uglify(),
    new HtmlWebpackPlugin({
    template:  './Application/Home/View/Index/index.tpl.html',
    filename: '../Application/Home/View/Index/index.html',
    inject: 'head',
    minify: {
      collapseWhitespace: false,
    },
    hash: true,
    chunks: ['eqShowSite']
  }),
  new HtmlWebpackPlugin({
    template:  './Application/Home/View/View/index.tpl.html',
    filename: '../Application/Home/View/View/index.html',
    inject: false,//'body',
    minify: {
      collapseWhitespace: false,
    },
    hash: true,
    chunks: ['eqShowPreview','eqShow']
  }),
]
};
// module.exports = {
//     plugins: [
//         new HtmlWebpackPlugin({
//         title: 'Custom template',
//         template: './Application/Home/View/Index/index.html', // Load a custom template (lodash by default see the FAQ for details)
//         filename: 'test.html',
//         })
//     ]
// }
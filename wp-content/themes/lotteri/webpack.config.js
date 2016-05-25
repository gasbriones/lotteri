var webpack = require('webpack');
var path = require('path');
module.exports = {
    context: __dirname,
    entry: [
        "./src/index.jsx"
    ],
    output: {
        path: __dirname + "/public/dist",
        filename: "bundle.js",
        publicPath: "/dist/"
    },
    module: {
        loaders: [{
            test: /\.css$/,
            loader: "style!css"
        }, {
            test: /\.jsx$/,
            loader: 'babel',
            query: {
                presets: ['react']
            }
        }]
    },
    devServer:{
        historyApiFallback:true
    }
}
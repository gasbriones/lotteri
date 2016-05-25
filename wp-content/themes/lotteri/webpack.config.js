var webpack = require('webpack');
var path = require('path');

module.exports = {
    context: __dirname,
    entry: [
        "./src/index.jsx"
    ],
    output: {
        path: __dirname + "/public/dist",
        filename: "build.js",
        publicPath: "/dist/"
    },
    module: {
        loaders: [
            {
                test: /\.jsx?$/,
                loader: 'babel',
                exclude: /(node_modules)/,
                query: {
                    presets: ['react']
                }
            }
        ]
    },
    devServer: {
        historyApiFallback: true
    }
}
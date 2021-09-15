const path    = require('path')

const root    = path.resolve(__dirname, '..'),
      modules = path.resolve(root, 'node_modules')

module.exports = {
    entry: path.resolve(root, 'resources/js/app.js'),
    mode: 'production',
    module: {
        rules: [
            {
                exclude: modules,
                loader: 'babel-loader',
                options: {
                    presets: ['@babel/preset-env']
                },
                test: /\.js$/,
            }
        ]
    },
    output: {
        filename: 'app.js',
        path: path.resolve(root, 'public/js')
    },
    resolve: {
        extensions: [
            '*',
            '.js',
            '.min.js',
        ],
        modules: [
            modules,
            path.resolve(root, 'resources/js'),
        ]
    }
}

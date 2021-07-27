const path = require('path'),
    MCEP   = require('mini-css-extract-plugin'),
    WFSOE  = require('webpack-fix-style-only-entries')

const root = path.resolve(__dirname, '..')

module.exports = {
    entry: path.resolve(root, 'resources/sass/app.scss'),
    mode: 'production',
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    MCEP.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            url: false
                        }
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                config: path.resolve(root, 'config')
                            }
                        }
                    },
                    'sass-loader',
                ]
            }
        ]
    },
    output: {
        path: path.resolve(root, 'public/css')
    },
    plugins: [
        new WFSOE,
        new MCEP({
            filename: 'app.css'
        }),
    ],
    resolve: {
        extensions: [
            '*',
            '.css',
            '.min.css',
            '.sass',
        ],
        modules: [
            path.resolve(root, 'node_modules'),
            path.resolve(root, 'resources/sass'),
        ]
    }
}

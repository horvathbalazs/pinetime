const path         = require('path'),
      globImporter = require('node-sass-glob-importer'),
      MCEP         = require('mini-css-extract-plugin'),
      WFSOE        = require('webpack-fix-style-only-entries')

const root = path.resolve(__dirname, '..'),
      sass = path.resolve(root, 'resources/sass')

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
                        loader: 'sass-loader',
                        options: {
                            sassOptions: {
                                includePaths: [sass],
                                importer: globImporter()
                            }
                        }
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                config: path.resolve(root, 'config')
                            }
                        }
                    }
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
            sass,
        ]
    }
}

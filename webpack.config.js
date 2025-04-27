const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const HtmlWebpackPlugin = require('html-webpack-plugin')

const base_name = 'arr'

module.exports = {
  entry: {
    main: './src/js/main.js',   // Entry point for JS
  },
  output: {
    path: path.resolve(__dirname, 'public'), // Output directory for JS
    filename: `js/${base_name}.js`, // Output file name for JS
    assetModuleFilename: 'assets/[name].[contenthash][ext][query]',
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
        ],
      },
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          {
            loader: 'sass-loader',
            options: {
              implementation: require('sass'),
            },
          },
        ],
      },
    ],
  },
  stats: 'errors-warnings',
  plugins: [
    new HtmlWebpackPlugin({
        filename: '../public/index.php',
        template: 'src/templates/main.php',
        inject: false,
        minify: false,
        hash: true,
    }),
    new MiniCssExtractPlugin({
      filename: `css/${base_name}.css`, // Output file name for CSS
    }),
  ],
};


/**
 * External Dependencies
 */
const path = require('path');

/**
 * WordPress Dependencies
 */
const defaultConfig = require('@wordpress/scripts/config/webpack.config.js');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  ...defaultConfig,
  ...{
    entry: {
      styles: path.resolve(process.cwd(), 'src/scss', 'styles.scss'),
      scripts: path.resolve(process.cwd(), 'src/js', 'script.js'),
    },
    output: {
      filename: 'js/[name].js',
      path: path.resolve(process.cwd(), 'assets'),
    },
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
      },
    ],
  },
  plugins: [
    ...defaultConfig.plugins,
    new MiniCssExtractPlugin({
      filename: 'css/[name].css', // Output CSS files into 'css' subfolder
    }),
  ],
};

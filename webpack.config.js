/**
 * External Dependencies
 */
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FixStyleOnlyEntriesPlugin = require('webpack-fix-style-only-entries');

/**
 * WordPress Dependencies
 */
const defaultConfig = require('@wordpress/scripts/config/webpack.config.js');

module.exports = {
  ...defaultConfig,
  ...{
    entry: {
      styles: path.resolve(process.cwd(), 'src/scss', 'styles.scss'),
      scripts: path.resolve(process.cwd(), 'src/ts', 'script.ts'),
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
    new FixStyleOnlyEntriesPlugin(),
    new MiniCssExtractPlugin({
      filename: '[name].css',
    }),
  ],
};

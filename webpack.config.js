const path = require('path'),
settings = require('./settings');

module.exports = {
	entry: {
		App: settings.themeLocation + "app/scripts/App.js",
        Vendors: ['jquery'],
	},
	output: {
		path: path.resolve(__dirname, settings.themeLocation + "assets/scripts"),
		filename: "[name].js"
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: ['@babel/preset-env']
					}
				}
			}
		]
	}
}
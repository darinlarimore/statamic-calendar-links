module.exports = {
	content: ['./resources/**/*'],
	corePlugins: {
		preflight: false,
	},
	prefix: 'c-',
	darkMode: ['variant', ['html[class*="dark"] &']],
}

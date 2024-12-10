const { gray, yellow } = require('tailwindcss/colors.js');

// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				lato: ['lato', 'sans-serif'],
			},
			fontSize: {
				h1: ['3.562rem', { lineHeight: '120%', fontWeight: '700' }],
				h2: ['3rem', { lineHeight: '120%', fontWeight: '700' }],
				h3: ['2.5rem', { lineHeight: '120%', fontWeight: '700' }],
				h4: ['2.062rem', { lineHeight: '120%', fontWeight: '700' }],
				h5: ['1.750rem', { lineHeight: '120%', fontWeight: '700' }],
				xl: ['1.438rem', '120%'],
				'xl-b': ['1.438rem', { lineHeight: '120%', fontWeight: '700' }],
				m: ['1.188rem', '120%'],
				'm-b': ['1.188rem', { lineHeight: '120%', fontWeight: '700' }],
				body: ['1rem', '120%'],
				'body-b': ['1rem', { lineHeight: '120%', fontWeight: '700' }],
				s: ['0.812rem', '120%'],
				's-b': ['0.812rem', { lineHeight: '120%', fontWeight: '700' }],
				xs: ['0.688rem', '120%'],
				'xs-b': ['0.688rem', { lineHeight: '120%', fontWeight: '700' }],
			},
			colors: {
				black: {
					primmary: '#353535',
				},
				gray: {
					QG: '#555B6E',
					700: '#909293',
					1000: '#D0D2D4',
				},
				green: {
					qg: '#50808E',
					modular: '#808000',
					10: '#3C6E71',
				},
				yellow: {
					QG: '#FBC30E',
					20: '#FFFCE1',
				},
				blue: {
					modular: '#284B63',
				},
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};

module.exports = {
  content: [
    './**/*.{html,js}',
    './node_modules/daisyui/dist/**/*.js'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('daisyui'),
  ],
}

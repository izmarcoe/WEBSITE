module.exports = {
  content: [
      "./*.{html,php,js}",
      "./php/*.{html,php,js}", 
      "./js/*.{html,php,js}"
  ],
  theme: {
    extend: {
      fontFamily: {
        oswald: ['Oswald'],
      },
    },
  },
  plugins: [
    require('daisyui'),
  ],
}

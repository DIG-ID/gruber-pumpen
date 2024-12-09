/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './front-page.php',
    './header.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      poppins: ['Poppins', 'sans-serif'],
      ubuntu: [ 'Ubuntu', 'serif']
    },

    extend: {
      letterSpacing: {
        //wide: '.038em',
        //wider: '.06em',
      },
      colors: {
        'brown-shade-1': '#F5F0EF',
        'brown-shade-2': '#E7DBD9',
        'brown-shade-3': '#8E827B',
        'brown-shade-4': '#34302D',
        'brown-shade-5': '#453D3B',
        'blue-shade-1': '#F0F7FA',
        'blue-shade-2': '#688494',
        'blue-shade-3': '#0D6394',
        'blue-shade-4': '#063047',
        'blue-shade-5': '#010F34',
        'orange-shade-1': "#D3594A",
        'red': '#B63939',
        'green': '#95BE49',
        'orange': '#D7903B',
      },
      transitionTimingFunction: {
        //'out-expo': 'cubic-bezier(0.16, 1, 0.3, 1)',
      },
      gridTemplateRows: {
        // Allow grid rows to auto size based on content
        'masonry': 'masonry',
      },
    },
  },
  plugins: [
  ],
}
